<?php
require 'config/database.php';

if (isset($_POST['submit'])){
    //get form data
    $username_email= filter_var($_POST['username_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password= filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    if(!$username_email){
        $_SESSION['signin']= "username and email required";
}elseif(!$password){
    $_SESSION['signin']= "password required";
}else{
    //fetch user from the databse
    $fetch_user_query = "SELECT * FROM  users WHERE username='$username_email' OR email='$username_email'";
    $fetch_user_result = mysqli_query($connection, $fetch_user_query);
    if(mysqli_num_rows($fetch_user_result)== 1){
        //convert the record to assoc array
        $user_record=mysqli_fetch_assoc($fetch_user_result);
        $db_password =$user_record['password'];

        //compare form password with database password
        if(password_verify($password, $db_password)) {
            //set session for acess  control
            $_SESSION ['user-id'] = $user_record['id'];
            //set session if user is admin
            if ($user_record['is_admin']== 1){
            $_SESSION['user_is_admin']= true;
            }
            //log user in 
            header ('location:' .ROOT_URL. 'admin/ ');

        }else{
            $_SESSION['signin']= "please check your inputs";
        }

    }else{
        $_SESSION['signin']= "user not found";
    }
}
//if any problem, redirect back to signin page with login data
if(isset($_SESSION['signin'])){
  
    $_SESSION['signin-data']=$_POST; 
    header('location:' .ROOT_URL.'signin.php');
    die();
}
}else {
    header ('location:' .ROOT_URL. 'signin.php');
    die();
}