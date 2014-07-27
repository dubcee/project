<?php
require_once('../include/bootstrap.php');

$pages = new Pages($db_connection);
$data = $pages->get($_GET['id']);

if (isset($_GET['action'])) {

	

	if ($_GET['action'] == 'delete') {

		$parts = array('image' => '');

		
		db_update('pages', $parts, $_GET['id']);

		redirect('pages_edit.php?id='.$_GET['id'].'&action=success');
	}

	if ($_GET['action'] == 'success') {
		echo 'Изтриването успешно';
	}
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$filename = '';

	if ($_FILES['image']['tmp_name'] != '') {
		//старата картинка да се изтрие

		$filename = rand(1, 10000).$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'], 'storage/'.$filename);
		//db_update('news', array('image' => $filename), $_GET['id']);

	redirect('pages.php?id='.$_GET['id']);

	} else {
		$filename = $data['image'];
	}
	
	if ($_POST['title'] != '' && $_POST['content'] != '') {

		$page = new Page();
		$page->title = $_POST['title'];
		$page->content = $_POST['content'];
		$page->image = $filename;
		$pages->update($_GET['id'], $page);
    }
	
	
/*

	
	db_update('pages', array(
		'title' => $_POST['title'],
		'content' => $_POST['content']
	),$_GET['id']); */

}
//$data = pages_get($_GET['id']);


require_once('include/header.php');

?>
<div class="content">

	<h2> Редактирай страница: <em><?php echo $data['title']?></em> </h2>
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
		<br>
		<label>
			Снимка
		<?php if ($data['image'] != '') { ?>
		<img src="storage/<?php echo $data['image']?>" width="100">
		</label>
		<br>
		<?php } ?>
		
		<a href="pages_edit.php?action=delete&id=<?=$data['id']?>">Изтрий</a>
		<br />
		<br />
		<label>
			Качете нова картинка
			<input type="file" name="image">
		</label>
		<br>

		<br>
		<button type="submit">Запази</button>

	</form>
</div>

<?php
require_once('include/footer.php');