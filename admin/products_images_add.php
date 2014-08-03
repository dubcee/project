<?php
require_once('../include/bootstrap.php');

//$result = images_get($_GET['id']);

$products_images = new Products_images($db_connection);
$result = $products_images->get($_GET['id']);


if (isset($_GET['action'])) {

	
	if ($_GET['action'] == 'delete') {
		
		db_delete('products_images', $_GET['id']);

		redirect('products_images_add.php?id='.$_GET['product_id'].'&action=success');
	}

	if ($_GET['action'] == 'success') {
		echo 'Delete is successful ';
	}
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


		if ($_FILES['name']['tmp_name'] != '') {//tmp_name 
			$filename = rand(1, 10000).$_FILES['name']['name'];
			move_uploaded_file($_FILES['name']['tmp_name'], 'storage/'.$filename);


	$products_image = new Products_image();
	$products_image->name = $filename;
	$products_image->products_id = $_GET['id'];
	$products_images->add($products_image);


		} else {
			$filename = '';
		}

/*
		db_insert('products_images', array(
			
			'products_id' => $_GET['id'],
			'name' => $filename
		));	*/
	





	
	redirect('products_images_add.php?id='. $_GET['id']); 
}


require_once('include/header.php');

?>
<div class="content">

	<h2> Добави / Изтрий <br> снимка </h2>
	<form action="" method="post" enctype="multipart/form-data">

		<br>
		<label>
			Качете картинка
			<input type="file" name="name">
		</label>

		<br>
		<button type="submit">Запази</button><br>
		<a href="products.php">Връщане към продукти</a><br><br>
		

	<table>
		<tr>
			<td>
			<?php foreach ($result as $key => $value) { ?>
			<div class="grid">
				<img src="storage/<?=$value['name']?>" width="100" height="100" >

				<a href="products_images_add.php?action=delete&id=<?=$value['id']?>&product_id=<?=$value['products_id']?>">Изтрий</a>
			</div>
		<?php } ?>
		 	</td>
		</tr>	
	</table>
</div>

<?php
require_once('include/footer.php');