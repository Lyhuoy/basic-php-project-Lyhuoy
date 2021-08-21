<!-- <form action="" class="">
    <div class="input-group mt-3 mb-3 mr-4 ml-4" style="width: 50%;">
        <input type="text" class="form-control form-control-lg" placeholder="Search Here">
        <button type="submit" class="input-group-text btn-success"><i class="bi bi-search me-2"></i> Search</button>
    </div>
</form> -->
<div class="card mt-3 mb-4 ml-3 mr-3 hvr-shrink">
  <div class="card-header text-center">
    <h1 class="text-danger">Data Management</h1>
  </div>
</div>
<div class="form-group mt-3 mb-3 mr-3 ml-3" style="width: 30%;">

    <form method="POST" action="" class="form-group">
        <h5 class="text-uppercase">Show table below:</h5>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="table" onchange="this.form.submit()">
            <option selected>Select Table</option>
            <option value="posts">Post</option>
            <option value="category">Category</option>
            <option value="users">User</option>
        </select>
    </form>
</div>
<?php
    if(isset($_POST["table"])){
        $table = $_POST["table"];
    }
    else{
        $table = "posts";
    }
    ?>

<!-- <hr class="my-5 mr-3 ml-3"> -->


<!--Table Posts-->
<?php 

    if($table === "posts"):

?>
<div class="mt-3 mb-3 ml-3 d-block">
    <h5 class="text-uppercase">Create Table selected above: </h5>
    <div class="d-flex justify-content-start p-2 hvr-hang">
        <a href="process/create_html.php" class="btn btn-primary">CLICK HERE</a>
    </div>
</div>
<h5 class="ml-3">Post Table</h5>
    <div class="card-body mt-3 mb-3 ml-3 mr-3">
        <table class="table table-hover">
        <!--Table head-->
        <thead>
            <tr>
                <th>PostID</th>
                <th>CategoryID</th>
                <th>UserID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Date</th>
                <th>Option</th>
            </tr>
        </thead>
        <!--Table head-->
        <?php 
            require_once('inc/functions.php');
            $posts = getAllPosts();
            foreach($posts as $post):
        ?>
        <!--Table body-->
        <tbody>
            <tr>
                <th scope="row"><?= $post['post_id'] ?></th>
                <td><?= $post['category_id'] ?></td>
                <td><?= $post['user_id'] ?></td>
                <td><?= $post['title'] ?></td>
                <td><?=substr ($post['description'], 0, 150) ?></td>
                <td><div class="d-flex align-items-center"><img class="rounded" src="assets/images/<?= $post['image'] ?>" width="45" height="33"></td>
                <td><?= $post['date'] ?></td>
                <td>
                    <a href="process/edit_html.php?post_id=<?= $post['post_id'] ?>"><i class="fa fa-pencil-square-o mr-2" aria-hidden="true"></i></a>
                    <a href="process/delete_post.php?post_id=<?= $post['post_id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                </td>
            </tr>
        </tbody>
        <!--Table body-->
        <?php endforeach; ?>
        </table>
    <!--Table-->
</div>


<?php elseif($table === "category"):

?>
<div class="mt-3 mb-3 ml-3 d-block">
    <h5 class="text-uppercase">Create Table selected above: </h5>
    <div class="d-flex justify-content-start p-2 hvr-hang">
        <a href="process/create_cate_html.php" class="btn btn-primary">CLICK HERE</a>
    </div>
</div>
<h5 class="ml-3">Category Table</h5>
<div class="mt-3 mb-3 ml-3 mr-3">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">CategoryID</th>
                <th>Category Name</th>
                <th>Option</th>
            </tr>
        </thead>
        <?php
            require('inc/functions.php');
            $categories = getAllCategories();
            foreach($categories as $cate):
        ?>
        <tbody>
            <tr>
                <th scope="row"><?= $cate['category_id'] ?></th>
                <td class="text-uppercase"><?= $cate['categoryName'] ?></td>
                <td>
                    <a href="process/edit_cate_html.php?cate_id=<?= $cate['category_id'] ?>"><i class="fa fa-pencil-square-o mr-2" aria-hidden="true"></i></a>
                    <a href="process/delete_cate.php?cate_id=<?= $cate['category_id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                </td>
            </tr>
        </tbody>
        <?php endforeach; ?>
    </table>
</div>

<?php elseif($table === "users"): 

?>
<!--Table-->
<div class="mt-3 mb-3 ml-3 d-block">
    <h5 class="text-uppercase">Create Table selected above: </h5>
    <div class="d-flex justify-content-start p-2 hvr-hang">
        <a href="process/create_user.php" class="btn btn-primary">CLICK HERE</a>
    </div>
</div>
<h5 class="ml-3">User Table</h5>
<div class="mt-3 mb-3 ml-3 mr-3">
<table class="table w-auto table table-hover">

    <!--Table head-->
    <thead>
        <tr>
        <th>UserID</th>
        <th>Username</th>   
        <th>Password</th>
        <th>Email</th>
        <th>Profile</th>
        <th>Role</th>
        <th>Option</th>
        </tr>
    </thead>
    <!--Table head-->
    <?php
        require_once('inc/functions.php');
        $users = getAllUsers();
        foreach($users as $user):
    ?>
    <!--Table body-->
    <tbody>
        <tr>
        <th scope="row"><?= $user['user_id'] ?></th>
        <td><?= $user['username'] ?></td>
        <td><?= $user['password'] ?></td>
        <td><?= $user['email'] ?></td>
        <td><div class="d-flex align-items-center"><img class="rounded" src="assets/images/<?= $user['profile'] ?>" width="40" height="28"></div></td>
        <td><?= $user['role'] ?></td>
        <?php
            if($user['role'] != 'admin'):
        ?>
        <td>
            <a href="process/edit_user.php?user_id=<?= $user['user_id'] ?>"><i class="fa fa-pencil-square-o mr-2" aria-hidden="true"></i></a>
            <a href="process/delete_user.php?user_id=<?= $user['user_id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
        </td>
        <?php elseif($user['role'] === 'admin'): ?>
        <td><i class="fa fa-users" aria-hidden="true"></i></td>
        <?php endif; ?>          
        </tr>
    </tbody>
    <!--Table body-->

    <?php endforeach; ?>
    </table>
</div>
<!--Table-->
<?php endif ?>