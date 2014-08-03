<?php  

require_once('functions/body/header.php');
require_once('../include/bootstrap.php');

$products = new Products($db_connection);
$result = $products->get($_GET['id']);

$products_images = new Products_images($db_connection);
$results = $products_images->get($result['id']);



?>
<html>
<head>
	<title>Products</title>
</head>
<body>


	<section>

	<?php  require_once('functions/body/nav.php'); ?>

	<div class="container">
		<div class="content">
			<h2><?=$result['title']?></h2>
			<p> <em> <?=$result['content']?> </em> </p><br/>
			<p>	<?=$result['price']?> &euro; </p><br>
			<button type="submit">Buy it now!</button><br>
			<br>
			
			<?php foreach ($results as $key => $value) { ?>
			
			<img src="../admin/storage/<?= $value['name']?>" width="250" height="175">
			
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
