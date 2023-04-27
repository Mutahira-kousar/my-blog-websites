<?php
include 'partial/header.php';
?>


<section class="form_section">
    <div class="container form_section-container">
        <h2> Add post </h2>
        <div class="alert_message error">
            <p> This is an error  message</p>

        </div>
    
        <form action="" enctype="multipart/form-data">

            <input type="text" placeholder="Title">
         
           <select >
            <option value="1">Technology</option>
            <option value="1">phython</option>
            <option value="1">JavaScript</option>
            <option value="1">BootStrap</option>
            <option value="1">HTML</option>
            <option value="1">PHP</option>
            <option value="1">C++</option>
            <option value="1">CSS3</option>
            </select>
            <textarea  rows="10" placeholder="body"></textarea>
            <div class="form_control-inline">
                   <input type="checkbox" id="is_featured"  checked>
                  <label for="is_featured">Featured</label>
            </div>
            <div class="form_control">
                <label for="thumbnail">Add Thumbnail</label>
                <input type="file" id="thumbnail">
            </div>
            <button type="submit" class="btn">Add Post</button>
       
        </form>
    </div>

</section>
 <!--================================END OF form ====================-->

 <?php
include '../partial/footer.php';
?>