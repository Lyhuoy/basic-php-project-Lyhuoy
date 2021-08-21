<?php require_once('../partial/header.php'); ?>
    <a href="http://localhost/basic-php-project-Lyhuoy/index.php?page=home"><button type="button" class="btn btn-danger mr-3 ml-4 mt-3 text-uppercase">Back to Home</button></a>
    <div class="container p-4">
        <form action="create_model.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Title" name="title" require>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="description" id="" placeholder="Description" require></textarea>
            </div>
            <div class="form-group">
                <input type="file" class="form-control-file" name="file" require>
            </div>
            <div class="form-group">
                <input type="datetime-local" class="form-control" name="date" require>
            </div>
            <div class="form-group">
                <select class="form-select" aria-label="Default select example" name="categoryid" require>
                    <option selected>Open this select menu</option>
                    <option value="1">Sport</option>
                    <option value="2">Technology</option>
                    <option value="3">Movie</option>
                </select>
            </div>
            <div class="form-group">
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="userid">
                <option selected>Open this select menu</option>
                <option value="1">Admin</option>
            </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Create</button>
            </div>
        </form>
    </div>