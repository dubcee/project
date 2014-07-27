<?php

	require_once ('../include/bootstrap.php');

	$pages = new Pages($db_connection);
	$nav = $pages -> getAll();


?>

		<nav>
			<a href="index.php" class="nav">Home</a><br>
			<a href="products.php" class="nav">Products</a><br>
			<a href="catalogue.php" class="nav">Catalogue</a><br>
			<a href="certifications.php" class="nav">Certifications</a><br>
			<a href="news.php" class="nav">News &amp; Events</a><br>
			<a href="about.php" class="nav">About us</a><br>
			<a href="contacts.php" class="nav">Contact us</a><br>
			<a href="blog.php" class="nav">Blog</a><br>

			<?php foreach ($nav as $key => $value) { ?>

			<a href="" class="nav"><?=$value['title'];?></a><br>

		<?php	} ?>
		</nav>