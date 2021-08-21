<?php require_once('../partial/header.php') ?>
<section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.jpg');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create new Category</h2>
            <?php
                require_once('../inc/functions.php');
                $cate_id = $_GET['cate_id'];
                $cates = getOneCate($cate_id);
                foreach($cates as $cate):
            ?>
              <form action="edit_cate_model.php" method="post">
                <input type="hidden" value="<?= $cate['category_id']?>" name="cate_id">
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="cateName" value="<?= $cate['categoryName'] ?>" require/>
                  <label class="form-label" for="form3Example1cg">Category Name</label>
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-white">update Category</button>
                </div>
              </form>

            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>