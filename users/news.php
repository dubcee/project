<?php  

require_once('functions/body/header.php');
require_once('../include/bootstrap.php');

$news_s = new News_s($db_connection);
$result = $news_s -> getAll();





?>
<html>
<head>
	<title>News &amp; Events</title>
</head>
<body>


	<section>

	<?php  require_once('functions/body/nav.php'); ?>

	<div class="container">

		<?php foreach ($result as $key => $value) { ?>
		
		<h2><?=$value['title'];?></h2>
		<p> <em> <?=$value['date_added']; ?> </em> </p>

		<?php } ?>
		<br>
		<?php foreach ($result as $key => $value) { ?>
		
		<img src="../admin/storage/<?= $result['image']; ?>">
		<br>

		<?php } ?>

		<?php foreach ($result as $key => $value) { ?>
		
		
		<p>  <?=$value['content']; ?>  </p>

		<?php } ?>








	</div>


	</section>
	
<div class="spacer"></div>			
<?php require_once('functions/body/footer.php'); ?>



</body>
</html>
