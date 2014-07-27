<?php
require_once('../include/bootstrap.php');

$products = new Products($db_connection);
$result = $products->getAll();


if (isset($_GET['action'])) {



	if ($_GET['action'] == 'delete') {

		
		db_delete('products', $_GET['id']);

		redirect('products.php?action=success');
	}

	if ($_GET['action'] == 'success') {
		echo 'Изтриването успешно';
	}
}

//$results = products_get_all_count();

require_once('include/header.php');
?>
<div class="content">
	<table>
		<tr>
			<th>iD</th>
			<th width="50%">Продукт</th>
			<th width="10%">Снимки</th>
			<th>Действие</th>
		</tr>
		<?php
		foreach ($result as $key => $value) { ?>
		
		<tr>
			<td><?php echo $value['id']?></td>
			<td><?php echo $value['title']?></td>
			<td><a href="products_images_add.php?id=<?=$value['id']?>"><?php echo $value['cnt']?><br>Добави / Изтрий</a></td>
			<td><a href="products_edit.php?id=<?php echo $value['id']?>">Редактирай</a> / <a href="products.php?action=delete&id=<?=$value['id']?>">Изтрий</a></td>
		</tr>
		<?php
		}
		?>
	</table>
	<br>
	<a href="products_add.php">Добави продукт!!!</a>
</div>
<?php
require_once('include/footer.php');