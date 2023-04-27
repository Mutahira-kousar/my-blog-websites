<?php
include 'partial/header.php';
?>


 <section class="form_section-add">
        <div class="container form_section-container">
            <h2> Edit User</h2>
        
            <form action="" enctype="multipart/form-data">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                
               <select>
                    <option value="0">Author</option>
                    <option value="1">Admin</option>
                </select>
          
            <button type="submit" class="btn">Update User</button>
            </form>
        </div>
    </section>
 <!--================================END OF form ====================-->


 <?php
include '../partial/footer.php';
?>