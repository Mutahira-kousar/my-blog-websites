<?php

require 'config/constants.php';


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding Dream Blog</title>
    <!--CUSTOM STYLESHEET-->
    <link rel="stylesheet" href="<?= ROOT_URL ?>CSS/style.css">
    <!--ICON-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- GOOGLE FONT (MONTSERAT)-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
</head>
<body>


<section class="form_section">
    <div class="container form_section-container">
        <h2> Edit Registration Details</h2>
        <?php if (isset($_SESSION['signup'])):?>
             <div class="alert_message error"> 
               <p>
                <?= $_SESSION['signup'];
                unset ($_SESSION['signup']);
                ?>
               </p>
               
        </div>
        <?php endif ?>
        <form action="<?php echo ROOT_URL?>signup-logic.php" enctype="multipart/form-data" method="post">
            <input type="text"  name='firstname'  value= "<?= $firstname ?>"  placeholder="First Name">
            <input type="text"  name='lastname' value= "<?= $lastname ?>" placeholder="Last Name">
            <input type="text" name='username' value= "<?= $username ?>" placeholder="username">
            <input type="email" name='email' value= "<?= $email ?>" placeholder="Email">
            <input type="password" name='oldpassword'   value= "<?= $oldpassword ?>" placeholder="old password">
            <input type="password" name='newpassword'   value= "<?= $newpassword ?>" placeholder="new password">
            <input type="password" name='confirmpassword' value= "<?= $confirmpassword ?>" placeholder="confirm password">
        <div class="form_control">
            
            <label for="MK">user MK</label>
            <input type="file"name='MK' id="MK">
            
        </div>
        <button type="submit" name='submit' class="btn">Edit</button>
        <small>Already have an account? <a href="signin.php">Sign In</a></small>
        </form>
    </div>
</section>
</body>
</html>