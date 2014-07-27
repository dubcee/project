<?php
require_once('../include/bootstrap.php');
require_once('include/header.php');

$users = new Users($db_connection);
$result_users  = $users->getAll();

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
            <th>Потребител</th>
            <th>Действие</th>
        </tr>
        <?php foreach($result_users as $key => $value):?>
            <tr>
                <td><?php echo $value['id'];?></td>
                <td><?php echo $value['username'];?></td>
                <td>
                    <a href="user_edit.php?id=<?php echo $value['id'];?>">Редактирай</a>
                    <?php if($value['id'] != $_SESSION['user']['id']): ?>
                    <a href="user_delete.php?id=<?php echo $value['id'];?>">Изтрий</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br><br>
    <a href="user_add.php">Добави потребител</a>
    <br/><br/>

</div>

<?php
require_once('include/footer.php');