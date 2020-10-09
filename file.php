<?php
require_once 'example.php';

//$fp = fopen('file.txt', 'r+');
$fp = fopen("http://www.yandex.ru", "r");

readfile("http://www.yandex.ru");
// Запись.
/*
$mytext = serialize($arr_tree);
//$mytext = json_encode($arr_tree);
$test = fwrite($fp, $mytext);

if ($test) echo 'Данные в файл успешно занесены.';
else echo 'Ошибка при записи в файл.';
*/
/*
// Чтение.
$data = file_get_contents('file.txt');
//$bookshelf = json_decode($data, TRUE); // Если нет TRUE то получает объект, а не массив.
$bookshelf = unserialize($data);
*/
fclose($fp);

/*
$filename = 'array.txt';

// Запись.
$data = serialize($bookshelf);      // PHP формат сохраняемого значения.
//$data = json_encode($bookshelf);  // JSON формат сохраняемого значения.
file_put_contents($filename, $data);

// Чтение.
$data = file_get_contents($filename);
//$bookshelf = json_decode($data, TRUE); // Если нет TRUE то получает объект, а не массив.
$bookshelf = unserialize($data);
*/

?>