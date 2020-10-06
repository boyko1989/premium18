<?php require_once 'catalog.php'; ?>
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
    <div class="sidebar">
			<ul class="category">
				<?php echo $categories_menu ?>
			</ul>
		</div>
		<div class="content">
			<p><?=$breadcrumbs;?></p>
			<br>
            <hr>
            <?php if($products):?>

                <?php if ($count_pages > 1):?>
                    <div class="pagination"><?=$pagination?></div>
                <?php endif;?>

                <hr>
                    <?php foreach($products as $product): ?>
                        <a href="?product=<?=$product['id']?>"><?=$product['title']?></a><br>
                    <?php endforeach; ?>

                <?php if ($count_pages > 1):?>
                    <div class="pagination"><?=$pagination?></div>
                <?php endif;?>
                
            <?php else: ?>
                <p>Здесь товаров нет!</p>
            <?php endif; ?>
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