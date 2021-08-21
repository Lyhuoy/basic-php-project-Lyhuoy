<?php require_once('../partial/header.php') ?>  
<section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.jpg');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="../process/create_user_model.php" method="post" enctype="multipart/form-data">

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="username" require/>
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="pasword" require/>
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email" require/>
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="file" id="form3Example4cdg" class="form-control form-control-lg" name="file" require/>
                  <label class="form-label" for="form3Example4cdg">Profile</label>
                </div>

                <div class="form-outline mb-4">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Select Role</option>
                        <option value="1">User</option>
                    </select>
                    <label class="form-label" for="form3Example4cdg">Role</label>
                </div>
                <div class="d-flex justify-content-center mb-4">
                  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <div class="mb-4">
                  <a href="http://localhost/basic-php-project-Lyhuoy/?page=home"><button type="button" class="btn btn-info btn-block btn-lg gradient-custom-4 text-body" style="width: 50%;">Back Home</button></a>
                </div>
                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="sign_in.php" class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>