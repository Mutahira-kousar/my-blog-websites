<?php

require 'config/database.php';
// get signup form data if signup button was clicked 
if (isset($_POST['submit'])){
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL); 
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
   $MK = $_FILES['MK'];
   //validate input values
   if(!$firstname){
    $_SESSION['signup']="please Enter your First name";
   } elseif (!$lastname){
    $_SESSION['signup']="please Enter your Last name";
  }elseif (!$username){
    $_SESSION['signup']="please Enter your Username";
  }elseif (!$email){
    $_SESSION['signup']="please Enter a valid Email";
  }
  elseif (strlen($createpassword)< 8 || strlen ($confirmpassword)<8){
    $_SESSION['signup']="password should be 8+ characters ";
  }
  elseif (!$MK['name']){
    $_SESSION['signup']="please select an image";
  }else {
    //check if password don't match
    if($createpassword !== $confirmpassword){
        $_SESSION['signup']="password don't match"; 
    }else {
        //hash password
    $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);
       
    // check if the username and email already exist in the database
    $user_check_query ="SELECT * FROM users WHERE username='$username' OR email='$email'";
    $user_check_result = mysqli_query ($connection, $user_check_query);
    if(mysqli_num_rows($user_check_result)>0){
      $_SESSION['signup']= "username or email is already exist";
    }else{ 
      //work on MK remname it 
      $time = time(); // make each img name unique using current timestamp
      $MK_name =$time.$MK['name'];
      $MK_tmp_name =$MK['tmp_name'];
      $MK_destination_path = 'images/' .$MK_name;

      //make sure file is an image
      $allowed_files =['png', 'jpg', 'jpeg'];
      $extention = explode('.', $MK_name);
      $extention = end ($extention);
      if(in_array($extention, $allowed_files)){
        //make sure image is not too large (1mb+)
        if($MK['size']<1000000){
          //upload MK
          move_uploaded_file ($MK_tmp_name, $MK_destination_path);

        }else{
          $_SESSION['signup']= "file size should be less than 1mb";
        }
      }else {
        $_SESSION['signup']= "file  should be png,jpg or jpeg";
      }

    }
    
  }
}
// redirect to signup page if there is any problem
if(isset($_SESSION['signup'])){
  //pass form data back to the signup page
  $_SESSION['signup-data']=$_POST; 
  header('location:' .ROOT_URL.'signup.php');
  die();
} else {

  //insert new user in users table
  
$insert_user_query =" INSERT INTO users SET firstname='$firstname', lastname='$lastname', username='$username', email='$email', password='$hashed_password', 
  mutahira='$MK_name', is_admin=0";
       $insert_user_result = mysqli_query($connection, $insert_user_query);
  if(!mysqli_errno($connection)){
    //redirect to login page with sucess message

    $_SESSION['signup-success']= " Registration successful. please log in";

    header('location:' .ROOT_URL.'signup.php');
    die();
  }
}

  

}else {
    // if button wasn't clicked , bounce back to signup page.
    header ('location:' .ROOT_URL. 'signup.php');
    die();

}