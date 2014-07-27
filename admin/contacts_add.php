<?php
require_once('../include/bootstrap.php');



$contacts = new Contacts($db_connection);
$found_results = $contacts->getAll();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    /* $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "
    SELECT username 
    FROM users
    WHERE username = '" . $username . "'";

    $found_results = db_select($sql);*/

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


require_once('include/header.php');
?>
    <div class="content">


        <form action="" method="POST">
            <label>Име <input type="text" name="first_name" id="first_name" value=""></label><br>   
            <label>Фамилия <input type="text" name="last_name" id="last_name" value=""></label>   <br>
            <label>e-mail <input type="email" name="email" id="email" value=""></label>   <br>
            <label>Телефон <input type="text" name="phone" id="phone" value=""></label>   <br>
            <label>Заглавие <input type="text" name="title" id="title" value=""></label>   <br>
            <label>Съдържание <input type="text" name="content" id="content" value=""></label>   <br>


            <button type="submit">Добави</button>
        </form>
    </div>

<?php
require_once('include/footer.php');