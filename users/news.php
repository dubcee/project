<?php  

require_once('functions/body/header.php');
require_once('../include/bootstrap.php');

$news_s = new News_s($db_connection);
$result = $news_s->getAll();


?>
<html>
<head>
	<title>News &amp; Events</title>
</head>
<body>


	<section>

	<?php  require_once('functions/body/nav.php'); ?>

	<div class="container">	
		<div class="content">

			<?php foreach ($result as $key => $value) { ?>
			<div class="grid">
			<a href="news.comments.php?&id=<?=$value['id']?>"><h2><?=$value['title']?></h2></a>
			<p> <em> <?=$value['date_added']?> </em> </p>
			<br/>	
			<img src="../admin/storage/<?=$value['image']?>" width="300" height="250">
			</div>
			<br>
			<br>
			<br>
		
			<?php } ?>
		</div>
	</div>

	</section>
	
<div class="spacer"></div>	

<?php require_once('functions/body/footer.php'); ?>



</body>
</html>
