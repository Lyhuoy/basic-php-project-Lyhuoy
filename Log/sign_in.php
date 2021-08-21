<?php require_once('../partial/header.php') ?>
<section class="vh-100" style="background-color: #FFFFFF;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img
                src="https://i.pinimg.com/originals/b2/1d/99/b21d9953970eb0d96d6ab3e81c654a02.jpg"
                alt="login form"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
              />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
              <?php 
                require_once('../inc/functions.php');
                $messege = "";
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                  $isLogin = userLogin($_POST);
                  if($isLogin) {
                    header("Location: http://localhost/basic-php-project-Lyhuoy/index.php?page=home");
                  } else {
                    $messege = "Username and Password is incorrect";
                  }
                } 
              ?>

                <form action="" method="POST">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">PNC</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example17" class="form-control form-control-lg" name="username"/>
                    <label class="form-label" for="form2Example17">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" name="password"/>
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="sumbit">Login</button>
                  </div>
                  <small class="text-danger mb-3"><?= $messege ?></small>
                  <div class="pt-1 mb-4">
                    <a href="http://localhost/basic-php-project-Lyhuoy/?page=home"><button class="btn btn-dark btn-lg btn-block" type="button" style="width: 50%;">Back Home</button></a>
                  </div>

                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="regi.php" style="color: #393f81;">Register here</a></p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>