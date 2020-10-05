<?php

require_once 'config.php';
require_once 'functions.php';

$categories = get_cat();
$categories_tree = map_tree($categories);
$categories_menu = categories_to_string($categories_tree);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Главная</title>
</head>
<body>
        <a href="/catalog/">Главная</a>
    <div class="wrapper">
        <ul class="category">
            <?php echo $categories_menu ?>
        </ul>
        <div class="content">
        </div>
    </div>
    <script src="js/jquery-1.9.0.min.js"></script>
	<script src="js/jquery.accordion.js"></script>
	<script src="js/jquery.cookie.js"></script>
	<script>
		$(document).ready(function(){
			$(".category").dcAccordion();
		});
	</script>

</body>
</html>