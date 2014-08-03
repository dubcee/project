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
		<h1 style="color: red; display: inline block; font-size: 50px;">PROMOTiONS!</h1>
		<div class="content">

			<?php foreach ($result as $key => $value) {
			$sql = '
				SELECT promotion
				FROM products
				WHERE id = ' .$value['id'];
				$res = mysqli_query($db_connection, $sql);
				$chk = mysqli_fetch_assoc($res);


				if ($chk['promotion'] == 1) { ?>
			
				
			<div class="grid">
			<a href="products.description.php?&id=<?=$value['id']?>"><h2><?=$value['title']?></h2></a><br/>	
			
			<img src="../admin/storage/<?=$value['image']?>" width="130" height="100">
			
			<p class=> <?=$value['content']?> </p>
			<a href="buy.php?id=<?=$value['id']?>" style="float: right;"><img src="pictures/body/buy.png" width="200" height="50"></a> 
			</div>

			<?php } ?>
 			
			<?php } ?>
		</div>
	</div>

	</section>
	
<div class="spacer"></div>	
<div class="container">
	
		<p>	* Please Note: Free delivery is not available for orders with oversized items. Free delivery is not available for orders to N. Ireland, International
			countries and some out of area postcodes in the UK. A surcharge may be applied for deliveries to these areas
			A full list of out of area postcodes in the UK and corresponding delivery times can be found here.
			Online prices may differ to store prices. To ensure you pay the online price you must use our Click &amp; Collect feature.</p>
</div>

<?php require_once('functions/body/footer.php'); ?>



</body>
</html>