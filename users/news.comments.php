<?php  

require_once('functions/body/header.php');
require_once('../include/bootstrap.php');


$news_s = new News_s($db_connection);
$result = $news_s->get($_GET['id']);



$comments = new Comments($db_connection);
$results = $comments->get($_GET['id']);

if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
	
	if ($_POST['name'] != '' && $_POST['content'] != '') {


		$comment = new Comment();
		$comment->name = $_POST['name'];
		$comment->content = $_POST['content'];
		$comment->date_added = $_POST['date_added'];
		$comment->news_id = $_GET['id'];
		$comments->add($comment);
	}
}	


?>
<html>
<head>
	<title>News &amp; Events</title>
</head>
<body>


	<section>

	<?php  require_once('functions/body/nav.php'); ?>

	<div class="container">

		<div class="content">
		
		<h2><?=$result['title']?></h2>
		<p> <em> <?=$result['date_added']?> </em> </p><br/>	
		<img src="../admin/storage/<?= $result['image']?>">
		<br>
		<br>
		<p>  <?=$result['content']?>  </p>

		</div>


	</div>


	</section>
	
<div class="spacer"></div>	
<hr>
<div class="container">		
		<form action="" method="post">
			<table>
				<tr>
				<td><label for="name">Nickname</label></td>
				<td><input type="name" name="name" id="name" value="" required="required"></td>
				</tr>
				<tr>
				<td><label for="content">Comment</label></td>
				<td><textarea name="content" id="content" value="" required="required" cols="40" rows="10"></textarea></td>
				</tr>
				<tr>
				<td><button type="submit">Submit</button></td>
				<td><button type="reset">Clear</button></td>
				</tr>
			</table>
		</form>
		</div>
		<div class="spacer"></div>
		<?php foreach ($results as $key => $value) { ?>
		<fieldset>
			
			
			
			<legend>
				<cite>

					<p><?= $value['name']; ?></p></legend>
				<blockquote>
					<p><?= $value['content']; ?></p>
					<p style="float: right"><em><?= $value['date_added']; ?></em></p>

				</blockquote>
			</cite>
			
		</fieldset>
		<?php } ?>

<?php require_once('functions/body/footer.php'); ?>



</body>
</html>
