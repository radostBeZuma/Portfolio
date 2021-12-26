<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="/css/news.css">
	<title>News</title>
</head>
<body>
	<section class="card card__wrap">
		<div class="container">
			<div class="card__content">
				<h1 class="card__title h1">Новости</h1>
				<!-- after -->
				<hr class="card__line">
				<?php
					require("../php/link.php");
					require ("../php/news-card.php");
					foreach ($arr as $var) :
				?>
				<div class="news-card marg-top">
					<div class="news-card__wrap">
						<div class="news-card__top">
							<p class="news-card__date p-date"><?php echo gmdate('d.m.Y', $var["idate"]);?></p>
							<form action="view.php" method="get">
								<?php
								 $id = $var["id"];
								 echo '<button class="news-card__link" type="submit" name="id" value="<'.$id.'>">';
								?>
									<h3 class="news-card__title h3"><?php echo $var["title"];?></h3>
								</button>
							</form>
						</div>
						<div class="news-card__bottom p-news">
						<?php echo $var["announce"];?>
						</div>
					</div>
				</div>
				<?php
					endforeach;
				?>
				<hr class="card__line marg-top">
				<h2 class="card__page h2">Страницы</h2>
				<div class="page page__wrap">
					<form method="get">
						<?php
							require("../php/link.php");
							require ("../php/news-card.php");
							$a=1;
							while ($a <= $numPage) {
								echo '<button class="link__text" name="page" type="submit" value="<'.$a.'>">'.$a.'</button>';
								$a++;
							}
						?>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>