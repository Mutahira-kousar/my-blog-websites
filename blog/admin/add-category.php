<?php
include 'partial/header.php';
?>

<section class="form_section">
    <div class="container form_section-container">
        <h2> Add category</h2>
        <div class="alert_message error "> 
            <p>This is an error  message </p>
        </div>
        <form action="">
            <input type="text" placeholder="Title">
           <textarea  rows="4" placeholder="Description"></textarea>
            
        <button type="submit" class="btn">Add category</button>
       
        </form>
    </div>
</section>
 <!--================================END OF form ====================-->
 <?php
include '../partial/footer.php';
?>