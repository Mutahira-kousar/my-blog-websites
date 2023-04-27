<?php
require '../partial/header.php';
//check login status
if(!isset($_SESSION['user-id'])){
    heade('location:' .ROOT_URL. 'signin.php');
    die();
}
?>

