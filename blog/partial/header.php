<?php
require 'config/database.php';
//fetch current user from the database
if(isset($_SESSION['user-id'])){

    $id=filter_var($_SESSION['user-id'],FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT mutahira FROM users WHERE id=$id";
    $result= mysqli_query($connection, $query);
    $mutahira = mysqli_fetch_assoc($result);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding Dream Blog</title>
    <!--CUSTOM STYLESHEET-->
   <link rel="stylesheet" href="<?php echo ROOT_URL?>CSS/style.css">
    <!--ICON-->
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> 
    <!-- GOOGLE FONT (MONTSERAT)-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="<?php echo ROOT_URL?>index.php" class="nav_logo"> MK Blog</a>
            <ul class="nav_items">
                <li><a href="<?php echo ROOT_URL?>blog.php">Blog</a></li>
                <li><a href="<?php echo ROOT_URL?>about.php">About</a></li>
                <li><a href="<?php echo ROOT_URL?>services.php">Services</a></li>
                <li><a href="<?php echo ROOT_URL?>contact.php">Contact</a></li>
                <?php if(isset($_SESSION['user-id'])):?>
                    <li class="nav_profile">
                    <div class="avatar">
                        <img src="<?= ROOT_URL. 'images/' .$mutahira['mutahira'] ?>">

                    </div>
                    <ul>
                        <li><a href="<?php echo ROOT_URL?>admin/index.php">Dashboard</a></li>
                        <li><a href="<?php echo ROOT_URL?>logout.php">Logout</a></li>
                    </ul>
                </li> 
                <?php else :?>
                    <li><a href="<?php echo ROOT_URL?>signin.php">Sign In</a></li>
                    <?php endif ?>
                
            
            </ul>
            <button id="open_nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close_nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!--================================END OF NAVBAR==========================-->