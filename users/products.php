<?php  

require_once('functions/body/header.php');
require_once('../include/bootstrap.php');

$products = new Products($db_connection);
$result = $products->getAll();




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

			<?php foreach ($result as $key => $value) { ?>
			<div class="grid">
			<a href="products.description.php?&id=<?=$value['id']?>"><h2><?=$value['title']?></h2></a><br/>	
			
			<img src="../admin/storage/<?=$value['image']?>" width="300" height="250" alt="No image yet">
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
