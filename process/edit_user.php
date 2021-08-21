<?php require_once('../partial/header.php'); ?>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Create User</p>
                <?php
                    require_once('../inc/functions.php');
                    $user_id = $_GET['user_id'];
                    $users = getOneUser($user_id);
                    foreach($users as $user):
                ?>
                <form action="edit_user_model.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="<?= $user['user_id']?>" name="user_id">
                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="username" value="<?= $user['username'] ?>" require/>
                      <label class="form-label" for="form3Example1c">Username</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" class="form-control" name="email"  value="<?= $user['email'] ?>" require/>
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" class="form-control" name="password"  value="<?= $user['password'] ?>" require/>
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-image fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="file" id="form3Example4cd" class="form-control"  name="profile" require/>
                      <label class="form-label" for="form3Example4cd">Profile</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example" name="role" require>
                            <option selected>Chose Role</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                      <label class="form-label" for="form3Example4c">Role</label>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Update User</button>
                  </div>
    
                </form>
                <?php endforeach; ?>
                <div class="d-flex justify-content-around mx-4 mb-3 mb-lg-4">
                    <h3>Or</h3>
                    <a href="http://localhost/basic-php-project-Lyhuoy/index.php?page=usermanager"><button type="button" class="btn btn-primary btn-lg mr-2">Back to Admin</button></a>
                </div>
              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/draw1.png" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>