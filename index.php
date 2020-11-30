<?php
error_reporting(E_ALL);
define("CATALOG", TRUE);

$routes = array(
	array('url' => '#^$|^\?#', 'view' => 'category'),
	array('url' => '#^product/(?P<product_alias>[a-z0-9-]+)#i', 'view' => 'product'),
	array('url' => '#^category/(?P<id>\d+)#i', 'view' => 'category')
);

// $url = str_replace('/catalog/', '', $_SERVER['REQUEST_URI']);
$url = ltrim($_SERVER['REQUEST_URI'], '/');

foreach ($routes as $route) {
	if( preg_match($route['url'], $url, $match) ){
		$view = $route['view'];
		break;
	}
}

if( empty($match) ){
	include 'views/404.php';
	exit;
}

extract($match);
// $id - ID категории
// $product_alias - alias продукта
// $view - вид для подключения
include "controllers/{$view}_controller.php";