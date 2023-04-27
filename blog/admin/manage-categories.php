<?php
include 'partial/header.php';
?>

<section  class="dashboard">
    <div class="container dashboard_container">
        <button class="sidebar_toggle" id="show_sidebar-btn"><i class="uil uil-angle-right-b"></i></button>
        <button class="sidebar_toggle" id="hide_sidebar-btn"><i class="uil uil-angle-left-b"></i></button>
        <aside>
            <ul>
                <li><a href="add-post.html"><i class="uil uil-pen"></i>
                    <h5>Add post</h5>
                </a></li>

                <li><a href="index.php"><i class="uil uil-postcard"></i>
                    <h5>manage post</h5>
                </a></li>
                <?php if(isset($_SESSION['user_is_admin'])):?>


                <li><a href="add-user.php"><i class="uil uil-user-circle"></i>
                    <h5>Add User</h5>
                </a></li>

                <li><a href="manage-users.php"><i class="uil uil-users-alt"></i>
                    <h5>Manage users</h5>
                </a></li>

                <li><a href="add-category.php"><i class="uil uil-edit"></i>
                    <h5>Add category</h5>
                </a></li>

                <li><a href="manage-categories.php" class="active"><i class="uil uil-list-ul"></i>
                    <h5>Manage categories</h5>
                </a></li>
                <?php endif ?>
            </ul>
        </aside>
        <main>
            <h2>Manage categories</h2>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Technology</td>
                        <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                       
                    </tr>

                    <tr>
                        <td>JavaScript</td>
                        <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                       
                    </tr>

                    <tr>
                        <td>phython</td>
                        <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                       
                    </tr>
                </tbody>
            </table>

        </main>
    </div>

</section>
<!-- end-->
<?php
include '../partial/footer.php';
?>