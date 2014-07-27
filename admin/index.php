<?php
require_once('../include/bootstrap.php');

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    header('Location: welcome.php');
    exit;
}

$wrong_login = false;
if(isset($_SESSION['errors']) && $_SESSION['errors'] == true) {
    $wrong_login = true;
    $_SESSION['errors'] = false;
}
?>


<html lang="en-US">
<link rel="stylesheet" type="text/css" href="css\styles.css">
<head>
    <meta charset="UTF-8">
    <title>Администрация</title>
</head>
<body>
<div class="form">
    <form action="login.php" method="POST">
        <?php if($wrong_login): ?>
        <div class="errors">Грешно име или парола!!!</div>
        <?php endif; ?>

            <label for="username">Потребител:</label>
            <input type="text" name="username" id="username"/>
            
            <label for="password">Парола:</label>
            <input type="password" name="password" id="password"/>
            <br>
            <br>
            <button type="submit">Вход</button>
    </form>
</div>  
</body>
</html>