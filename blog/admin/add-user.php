<?php
include 'partial/header.php';
?>

 <section class="form_section-add">
        <div class="container form_section-container">
            <h2> Add User</h2>
            <div class="alert_message error"> 
                <p>This is an error  message </p>
            </div>
            <form action="" enctype="multipart/form-data">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <input type="text" placeholder="username">
                <input type="email" placeholder="Emai">
                <input type="password" placeholder="create password">
                <input type="password" placeholder="confirm password">
                <select > 
                    <option value="0">Author</option>
                    <option value="1">Admin</option>
                </select>
            <div class="form_control">
                
                <label for="MK">user MK</label>
                <input type="file" id="MK">
                
            </div>
            <button type="submit" class="btn">Add User</button>
            </form>
        </div>
    </section>
 <!--================================END OF form ====================-->


 <?php
include '../partial/footer.php';
?>