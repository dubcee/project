<?php   require_once('functions/body/header.php');
		require_once('../include/bootstrap.php');

$products = new Products($db_connection);
$result = $products->get($_GET['id']);

$products_images = new Products_images($db_connection);
$results = $products_images->get($result['id']);




if($_SERVER['REQUEST_METHOD'] == 'POST') {


 
    $contact->first_name = $_POST['first_name'];
    $contact->last_name = $_POST['last_name'];
    $contact->email = $_POST['email'];
    $contact->phone = $_POST['phone'];
    $contact->title = $_POST['title'];
    $contact->content = $_POST['content'];
    $contacts->add($contact);

redirect('contacts.php');
}









 ?>
	<section>
<?php  require_once('functions/body/nav.php'); ?>




	<div class="container">
		<div class="content">
			<div class="buy">
			<form action="" method="post">
					<table>
						<tr>
							<td><label for="first_name">First Name *</label></td>
							<td><input type="text" name="first_name" id="first_name" value="" placeholder="First Name" required="required" autofocus></td>
						</tr>
						<tr>
							<td><label for="last_name">Last name *</label></td>
							<td><input type="text" name="last_name" id="last_name" value="" placeholder="Last name" required="required" autofocus></td>
						</tr>
						<tr>
							<td><label for="email">e-mail *</label></td>
							<td><input name="email" id="email" value="" placeholder="e-mail" required="required" autofocus></td>
						</tr>
						<tr>
							<td><label for="phone">Telephone <em>(optional)</em></label></td>
							<td><input type="text" name="phone" id="phone" value="" pattern="{0,9}"></td>
						</tr>
						<tr>
							<td><label for="title">Subject *</label></td>
							<td><input type="text" name="title" id="title" value="" required="required" autofocus></td>
						</tr>
						<tr>
							<td><label for="content"> Message *</label></td>
							<td><textarea name="content" id="content" required rows='20' cols="30"></textarea></td>
						</tr>
						<tr>
							<td><button type="submit" >Buy!</button></td>
							<td><button type="reset">Clear fields</button></td>
						</tr>
					
					</table>
				</form>
				</div>
				<div class="buy">
						<h2><?=$result['title']?></h2>
						<p> <em> <?=$result['content']?> </em> </p><br/>
						<p>	<?=$result['price']?> &euro; </p><br>
						<br>
						
						<?php foreach ($results as $key => $value) { ?>
						
						<img src="../admin/storage/<?= $value['name']?>" width="250" height="175">
						
						<br>
						<br>
						<?php break; } ?>
				</div>	
			</div>
		</div>			



</section>
		<div class="spacer"></div>
		
		
		<?php require_once('functions/body/footer.php'); ?>				