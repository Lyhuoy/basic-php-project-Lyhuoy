<?php

    function db() {
        return new mysqli('localhost', 'root', '', 'php_project');
    }

    function getAllSport() {
        return db()->query("SELECT * FROM posts WHERE category_id = 1 ORDER BY post_id DESC");
    }

    function getAllTech() {
        return db()->query("SELECT * FROM posts WHERE category_id = 2 ORDER BY post_id DESC");
    }

    function getAllMovie() {
        return db()->query("SELECT * FROM posts WHERE category_id = 3 ORDER BY post_id DESC");
    }

    function createNewPost($value) {
        $title = $value['title'];
        $description = $value['description'];
        $fileName = $_FILES['file']['name'];
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];
        $tmp_name = $_FILES['file']['tmp_name'];

        $dir = "../assets/images/";
        move_uploaded_file($tmp_name, $dir.$fileName);
        $date = $value['date'];
        $categoryid = $value['categoryid'];
        $userid = $value['userid'];

        return db()->query("INSERT INTO posts(title, description, image, date, category_id, user_id) VALUES('$title', '$description', '$fileName', '$date', '$categoryid', '$userid')");
    }

    function getLastestSport() {
        return db()->query("SELECT * FROM posts WHERE category_id = 1 ORDER BY post_id DESC limit 1");
    }

    function getLastestTech() {
        return db()->query("SELECT * FROM posts WHERE category_id = 2 ORDER BY post_id DESC limit 1");
    }

    function getLastestMovie() {
        return db()->query("SELECT * FROM posts WHERE category_id = 3 ORDER BY post_id DESC limit 1");
    }

    function get2LastestSport() {
        return db()->query("SELECT * FROM posts WHERE category_id = 1 ORDER BY post_id DESC limit 2");
    }

    function get2LastestTech() {
        return db()->query("SELECT * FROM posts WHERE category_id = 2 ORDER BY post_id DESC limit 2");
    }

    function getOneSport($id) {
        return db()->query("SELECT *FROM posts WHERE post_id = $id and category_id = 1");
    }

    function getOneTech($id) {
        return db()->query("SELECT * FROM posts WHERE post_id = $id and category_id = 2");
    }

    function getOneMovie($id) {
        return db()->query("SELECT * FROM posts WHERE post_id = $id and category_id = 3");
    }

    function updatePost($value) {
        $title = $value['title'];
        $description = $value['description'];
        $fileName = $_FILES['file']['name'];
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];
        $tmp_name = $_FILES['file']['tmp_name'];

        $dir = "../assets/images/";
        move_uploaded_file($tmp_name, $dir.$fileName);
        $date = $value['date'];
        $categoryid = $value['categoryid'];
        $post_id = $value['post_id'];
        return db()->query("UPDATE posts SET title='$title', description='$description', image='$fileName', date='$date', category_id='$categoryid' WHERE post_id = $post_id ");
    }

    function getOneDate($id) {
        return db()->query("SELECT * FROM posts WHERE post_id = $id");
    }

    function getAllPosts() {
        return db()->query("SELECT * FROM posts ORDER BY post_id DESC");
    }

    function getAllCategories() {
        return db()->query("SELECT * FROM category ORDER BY category_id ASC");
    }

    function getAllUsers() {
        return db()->query("SELECT * from users ORDER BY user_id DESC");
    }

    function createUser($value) {
        $username = $value['username'];
        $password = $value['password'];
        $email = $value['email'];
        $profile = $_FILES['profile']['name'];
        $role = $value['role'];
        $tmp_name = $_FILES['profile']['tmp_name'];
        $dir = "../assets/images/";
        move_uploaded_file($tmp_name, $dir.$profile);
        return db()->query("INSERT INTO users(username, password, email, profile, role) VALUES('$username', '$password', '$email', '$profile', '$role') ");
    }

    function deleteFromPost($id) {
        return db()->query("DELETE FROM posts WHERE post_id = $id");
    }

    function deleteFromUser($id) {
        return db()->query("DELETE FROM users WHERE user_id = $id");
    }

    function deleteFromCate($id) {
        return db()->query("DELETE FROM category WHERE category_id = $id");
    }

    function getOneUser($id) {
        return db()->query("SELECT * FROM users WHERE user_id = $id");
    }

    function updateUser($value) {
        $username = $value['username'];
        $password = $value['password'];
        $email = $value['email'];
        $profile = $_FILES['profile']['name'];
        $role = $value['role'];
        $tmp_name = $_FILES['profile']['tmp_name'];
        $dir = "../assets/images/";
        move_uploaded_file($tmp_name, $dir.$profile);
        $user_id = $value['user_id'];
        return db()->query("UPDATE users SET username='$username', password='$password', email='$email', profile='$profile', role='$role' WHERE user_id = $user_id");
    }

    function createCate($value) {
        $cateName = $value['cateName'];
        return db()->query("INSERT INTO category(categoryName) VALUES('$cateName')");
    }

    function getOneCate($id) {
        return db()->query("SELECT * FROM category WHERE category_id = $id");
    }

    function updateCate($value) {
        $cateName = $value['cateName'];
        $cate_id = $value['cate_id'];
        return db()->query("UPDATE category SET categoryName='$cateName' WHERE category_id = $cate_id");
    }

    function searchSport($value) {
        $sportName = $value['sportName'];
        return db()->query("SELECT * FROM posts WHERE category_id = 1 AND title LIKE '%$sportName%' ");
    }

    function searchTech($value) {
        $techName = $value['techName'];
        return db()->query("SELECT * FROM posts WHERE category_id = 2 AND title LIKE '%$techName%' ");
    }

    function searchMovie($value) {
        $movieName = $value['movieName'];
        return db()->query("SELECT * FROM posts WHERE category_id = 3 AND title LIKE '%$movieName%' ");
    }

    function sortByName() {
        return db()->query("SELECT * FROM posts WHERE category_id = 1 ORDER BY catgory_id ASC");
    }