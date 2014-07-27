<?php   require_once('functions/body/header.php');
		require_once('functions/body/map.php');
		require_once('../include/bootstrap.php');

$contacts = new Contacts($db_connection);


if($_SERVER['REQUEST_METHOD'] == 'POST') {


 $contact = new Contact();
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
			<h2>Contact us</h2>
			<p>	We want all Nameless Brake Systems customers to be extremely satisfied with the goods and service(s) we provide. 
				Please do not hesitate to get in touch with our customer service team should you have any queries about our goods and service(s). 
				We do our best to respond to all enquiries within 24-48 hours.
			</p>
			
				<p><em>All fields indicated with * are required</em></p>
				
				<div class="content">

					<div id="googleMap" class="map" ></div>
					<form action="" method="post" class="contact">
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
							<td><button type="submit" >Submit!</button></td>
							<td><button type="reset">Clear fields</button></td>
						</tr>
					
					</table>
					</form>		
					<figure>
						<img src="pictures/body/contact.jpg" alt="contact">
					</figure>	
					
					
					

					
					</div>	
				
				
		</div>			
				
			
			

		</section>
		<div class="spacer"></div>
		
		
		<?php require_once('functions/body/footer.php'); ?>