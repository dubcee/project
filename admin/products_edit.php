<?php
require_once('../include/bootstrap.php');

$products = new Products($db_connection);
$data = $products->get($_GET['id']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$product = new Product();
		$product->title = $_POST['title'];
		$product->content = $_POST['content'];
		$product->price = $_POST['price'];
		$products->edit($product);
/*
	
	db_update('products', array(
		'title' => $_POST['title'],
		'content' => $_POST['content']
	),$_GET['id']); */

	redirect('products.php');
}

//$data = products_get($_GET['id']);

require_once('include/header.php');

?>
<div class="content">

	<h2> Редактирай продукт: <em><?php echo $data['title']?></em> </h2>
	<form action="" method="post" enctype="multipart/form-data">
		<label>
			Заглавие
			<input type="text" name="title" value="<?php echo $data['title']?>">
		</label>
		<br>
		<label>
			Съдържание
			<textarea name="content"><?php echo $data['content']?></textarea>
		</label>
		<br>
		<label>
			Цена
			<input type="text" name="price" value="<?php echo $data['price']?>">
		</label>
		<br>
		<br>
		
		<br>
		<button type="submit">Запази</button>
		<button type="reset">Изчисти  промените</button>
	</form>
</div>

<?php
require_once('include/footer.php');