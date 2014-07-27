<?php
require_once('../include/bootstrap.php');

$pages = new Pages($db_connection);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if ($_POST['title'] != '' && $_POST['content'] != '') {
	
		if ($_FILES['image']['tmp_name'] != '') {//tmp_name 
			$filename = rand(1, 10000).$_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'], 'storage/'.$filename);
		} else {
			$filename = '';
		}

		/*	db_insert('pages', array(
			'title' => $_POST['title'],
			'content' => $_POST['content']
		));

	}*/


		$page = new Page();
		$page->title = $_POST['title'];
		$page->content = $_POST['content'];
		$page->image = $filename;
		$pages->add($page);

	}

	redirect('pages.php');
}

require_once('include/header.php');

?>
<div class="content">

	<h2> Добави страница </h2>
	<form action="" method="post" enctype="multipart/form-data">
		<label>
			Заглавие
			<input type="text" name="title">
		</label>
		<br>
		<label>
			Съдържание
			<textarea name="content"></textarea>
		</label>
		<br>
		<br>
		<label>
			Качете картинка
			<input type="file" name="image">
		</label>
		<br>
		
		<br>
		<button type="submit">Запази</button>
		
</div>

<?php
require_once('include/footer.php');