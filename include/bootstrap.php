<?php
ob_start();
session_start();
error_reporting (E_ALL ^ E_NOTICE);
ini_set('display_errors','On');

require_once('../include/config.php');

$db_connection = mysqli_connect($config['db']['host'], $config['db']['user'], $config['db']['password'], $config['db']['name']);
if (!$db_connection) {
    die('Could not connect: ' . mysqli_error($db_connection));
}

//base librarires
require_once('../admin/functions/db.php');
require_once('../admin/functions/common.php');
require_once('../admin/functions/validate.php');

//module functions
//require_once('functions/news.php');
//require_once('functions/pages.php');
//require_once('functions/products.php');


require_once('../classes/IItem.php');
require_once('../classes/ICRUD.php');
require_once('../classes/Page.php');
require_once('../classes/Pages.php');
require_once('../classes/Product.php');
require_once('../classes/Products.php');
require_once('../classes/News.php');
require_once('../classes/News_s.php');
require_once('../classes/Products_image.php');
require_once('../classes/Products_images.php');
require_once('../classes/User.php');
require_once('../classes/Users.php');
require_once('../classes/Contact.php');
require_once('../classes/Contacts.php');
require_once('../classes/Comment.php');
require_once('../classes/Comments.php');
?>
