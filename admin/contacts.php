<?php
require_once('../include/bootstrap.php');
require_once('include/header.php');

$contacts = new Contacts($db_connection);
$result_users  = $contacts->getAll();


/*$sql = "
SELECT * 
FROM users 
ORDER BY username";

$result_users = db_select($sql);*/
?>

<div class="content">
   
    <table>
        <tr>
            <th>#</th>
            <th>Име</th>
            <th>Фамилия</th>
            <th>email</th>
            <th>Телефон</th>
            <th>Заглавие</th>
            <th>Съдържание</th>
            <th>Действие</th>
            
        </tr>
        <?php foreach($result_users as $key => $value):?>
            <tr>
                <td><?php echo $value['id'];?></td>
                <td><?php echo $value['first_name'];?></td>
                <td><?php echo $value['last_name'];?></td>
                <td><?php echo $value['email'];?></td>
                <td><?php echo $value['phone'];?></td>
                <td><?php echo $value['title'];?></td>
                <td><?php echo $value['content'];?></td>
                <td>
                    <?php if($value['id'] != $_SESSION['user']['id']): ?>
                    <a href="contacts_delete.php?id=<?php echo $value['id'];?>">Изтрий</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br><br>
    <a href="contacts_add.php">Добави потребител</a>
    <br/><br/>

</div>

<?php
require_once('include/footer.php');