<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/view.css">
	<title>View News</title>
</head>

<body>
	
	<div class="card-view card-view__wrap">
		<div class="container">
		<?php
			require ("../php/view-news.php");
		?>
			<h1 class="card-view__title h1"><?php echo $arrView["title"];?></h1>
			<hr class="card-view__line">
			<div class="card-view__text p-news_view">
			<?php echo $arrView["content"];?>
			</div>
			
			<div class="card-view__bottom mg-top">
				<hr class="card-view__line_bottom">
				<a class="card-view__link p-news_link mg-top" href="news.php">Все новости >>></a>
			</div>
			
		</div>
	</div>
</body>
</html>