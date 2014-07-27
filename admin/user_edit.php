<?php
require_once('../include/bootstrap.php');
require_once('include/header.php');
is_logged_in();

$users = new Users($db_connection);
$result = $users->get($_GET['id']);

/*
$sql = '
SELECT * 
FROM users 
WHERE id = ' . $_GET['id'];

$user = db_select($sql);
$user = $user[0];*/

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
/*
 * UPDATE table SET username = 'admin', password = 'password' WHERE i> (1, 2);
 */
$user = new User($db_connection);
$user->username = $_POST['username'];
$user->password = $_POST['password'];
$users->update($user);





if (isset($_GET['action'])) {

    

    if ($_GET['action'] == 'delete') {

        
        db_delete('users', $_GET['id']);

        redirect('user_edit.php?action=success');
    }
}
}
?>

<div class="content">
    <form action="" method="POST">
        <div>
            <label for="">Потребител:</label>
           
             
            <input type="text" name="username" id="" value="<?=$result['username']?>"/>
           
        </div>

        <div>
            <label for="">Нова парола:</label>
            <input type="password" name="password" id=""/>
        </div>

        <button type="submit">Редактирай</button>
    </form>
</div>

<?php
require_once('include/footer.php');