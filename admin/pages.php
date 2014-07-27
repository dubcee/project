<?php
require_once('../include/bootstrap.php');
require_once('include/header.php');

$pages = new Pages($db_connection);
$result = $pages->getAll();

if (isset($_GET['action'])) {

	

	if ($_GET['action'] == 'delete') {

		
		db_delete('pages', $_GET['id']);

		redirect('pages.php?action=success');
	}

	if ($_GET['action'] == 'success') {
		echo 'Изтриването успешно';
	}
}

//$results = pages_get_all_count();

require_once('include/header.php');
?>
<div class="content">
	<table>
		<tr>
			<th width="10%">iD</th>
			<th width="50%">Заглавие</th>
			<th>Действие</th>
		</tr>
		<?php
		foreach ($result as $key => $value) { ?>
		
		<tr>
			<td><?php echo $value['id']?></td>
			<td><?=$value['title']?></td>
			<td><a href="pages_edit.php?id=<?php echo $value['id']?>">Редактирай</a> / <a href="pages.php?action=delete&id=<?=$value['id']?>">Изтрий</a></td>
		</tr>
		<?php
		}
		?>
	</table>
	<br>
	<a href="pages_add.php">Добави страница!!!!</a>
</div>
<?php
require_once('include/footer.php');