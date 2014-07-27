<?php
require_once('../include/bootstrap.php');

$id = $_GET['id'];
db_delete('contacts', $id);

redirect('contacts.php');
