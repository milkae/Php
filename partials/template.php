<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title; ?></title>
	<link href='https://fonts.googleapis.com/css?family=<?= $font ?>' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/style.php?font=<?= $fontcss ?>">
</head>
<body>
	<header>
		<nav>
			<ul id="menu">
				<li><a href="?page=home">Home</a></li>
				<li><a href="?page=turlututu">Turlututu</a></li>
				<li><a href="?page=contact">Contact</a></li>
			</ul>
		</nav>
	</header>

	<section>
		<?= $content ?>
		<aside>
			<nav>
				<button class="post"><a href="?page=add">New Post</a></button>
				<ul class="list">
					<?php
					foreach ($result as $key => $value) {
						echo "<li><a class='edit' href='?page=edit&id=" . $value['id'] . "'>Edit</a><a href='?page=show&id=" . $value['id'] . "'>" . $value['titre'] . "</a></li>";
					}
					?>
				</ul>
			</nav>
		</aside>
	</section>
	<footer>
		<p>Copyright Turlututu company</p>
	</footer>
</body>
</html>