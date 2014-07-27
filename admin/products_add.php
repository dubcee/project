<?php
require_once('../include/bootstrap.php');

$products = new Products($db_connection);
$result = $products->getAll();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if ($_POST['title'] != '' && $_POST['content'] != '') {

		if ($_FILES['image']['tmp_name'] != '') {//tmp_name 
			$filename = rand(1, 10000).$_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'], 'storage/'.$filename);
		} else {
			$filename = '';
		}

		$product = new Product();
		$product->title = $_POST['title'];
		$product->content = $_POST['content'];
		$product->price = $_POST['price'];
		$products->add($product);



		/*db_insert('products', array(
			'title' => $_POST['title'],
			'content' => $_POST['content'],
			'price' => $_POST['price']
			
		));

		db_insert('products_pictures', array(
			
			'products_id' => $_GET['id'],
			'name' => $filename
		));	*/





	}

	redirect('products.php');
}

require_once('include/header.php');

?>
<div class="content">

	<h2> Добави продукт </h2>
	<form action="" method="post" enctype="multipart/form-data">
		<label>
			Име на продукта
			<input type="text" name="title">
		</label>
		<br>
		<label>
			Описание
			<textarea name="content"></textarea>
		</label>
		<br>
		<label>
			Цена
			<input type="text" name="price">
		</label>
		<br>
		
		<br>
		<button type="submit">Запази</button>
		<button type="reset">Изчисти</button>
	</form>
</div>

<?php
require_once('include/footer.php');