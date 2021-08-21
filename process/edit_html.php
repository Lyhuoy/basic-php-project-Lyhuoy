<?php require_once('../partial/header.php'); ?>
<?php require_once('../partial/navbar.php'); ?>
<a href="http://localhost/basic-php-project-Lyhuoy/index.php?page=home"><button type="button" class="btn btn-danger mr-3 ml-4 mt-3 text-uppercase">Back to Home</button></a>
    <div class="container p-4">
        <?php
            require_once('../inc/functions.php');
            $post_id = $_GET['post_id'];
            $datas = getOneDate($post_id);
            foreach($datas as $data):
        ?>
        <form action="edit_model.php" method="post" enctype="multipart/form-data">
            <input type="hidden" value="<?= $data['post_id']?>" name="post_id">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Title" name="title" value="<?= $data['title'] ?>">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="description" placeholder="Description"><?= $data['description'] ?></textarea>
            </div>
            <div class="form-group">
                <input type="file" class="form-control-file" name="file">
            </div>
            <div class="form-group">
                <input type="datetime-local" class="form-control" name="date">
            </div>
            <div class="form-group">
                <select class="form-select" aria-label="Default select example" name="categoryid">
                    <option selected>Open this select menu</option>
                    <option value="1">Sport</option>
                    <option value="2">Technology</option>
                    <option value="3">Movie</option>
                </select>
            </div>
            <!-- <div class="form-group">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="userid">
                <option selected>Open this select menu</option>
                <option value="1">Admin</option>
                <option value="2">User</option>
            </select>
            </div> -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>