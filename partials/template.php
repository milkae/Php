<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title; ?></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="?page=home">Home</a></li>
				<li><a href="?page=turlututu">Turlututu</a></li>
				<li><a href="?page=contact">Contact</a></li>
			</ul>
		</nav>
	</header>
	<section>
		<?php echo $content;
		
		?>

	</section>
	<footer>
		<p>Copyright Turlututu company</p>
	</footer>
</body>
</html>