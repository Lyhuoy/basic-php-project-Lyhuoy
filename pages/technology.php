<!-- Search and Sort -->
<div class="d-flex justify-content-start">
  <div>
    <select class="form-select mt-4 ml-4 mr-3" aria-label="Default select example">
      <option selected>Sort by</option>
      <option value="name">Name</option>
  </select>
  </div>
  <nav class="navbar navbar-light mt-3 ml-3" style="width: 50%;">
    <div class="container-fluid">
      <form method="post" class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="techName">
        <button class="btn btn-outline-info" type="submit">Search</button>
      </form>
    </div>
  </nav>
</div>
<!-- End search and Sort -->

<!-- Start page detail -->
<div class="row row-cols-1 row-cols-md-3 g-4 mt-3 ml-3 mr-3 justify-content-center">
  <?php
    require_once('inc/functions.php');
    $techs = get2LastestTech();
    foreach($techs as $tech):
  ?>
  <div class="col">
    <div class="card h-100 shadow-lg hvr-grow ml-3 mr-3">
      <img
        src="assets/images/<?= $tech['image'] ?>"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body">
        <h5 class="card-title"><?= $tech['title'] ?></h5>
        <!-- <p class="card-text">
        <?= $tech['description'] ?>
        </p> -->
        <p class="card-text"><small class="text-muted"><?= $tech['date'] ?></small></p>
      </div>
      <a href="?page=tech_detail&tech_id=<?= $tech['post_id'] ?>" class="btn btn-info text-white">Go Detail</a>
    </div>
  </div>
  <?php endforeach; ?>
</div>
<!-- End start page -->
</div>
<!-- Start Detail info -->
<hr class="mt-5 mb-3 ml-3 mr-3">
<div class="container mt-3 mb-3 justify-content-start">
      <div class="row">
        <div class="col-md-12 offset-2">
        <div class="_blogCard mt-5 bg-white rounded pl-4 pr-4 pb-4 pt-4">
          <div class="row">
          <?php
            require_once('inc/functions.php');
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
              $techs = searchTech($_POST);
            } else {
              $techs = getAllTech();
            }
            foreach($techs as $tech):
          ?>
            <div class="col-lg-7 col-md-12 col-sm-12 hvr-shrink">
              <div class="row">
                <div class="col-md-12">
                  <img src="assets/images/<?= $tech['image'] ?>" alt="" class="img-fluid shadow-lg rounded _moveTop">
                </div>
                <div class="col-md-12 d-inline-flex align-items-center justify-content-between">
                  <div class="_day d-inline-flex mt-2">
                    <span class="_date"><?= $tech['date'] ?></span>
                  </div>
                  <div class="_shareIcons align-self-end">
                    <ul class="list-unstyled m-0 d-inline-flex">
                      <li class="ml-1 mr-1"><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                      <li class="ml-1 mr-1"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></i></a></li>
                      <li class="ml-1 mr-1"><a href="#"><i class="fa fa-share" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                </div>
                
              </div>
            </div>
            <div class="col-lg-6 col-md-14 col-sm-14">
              <div class="row">
                <div class="col-md-12">
                  <div class="pd-2 mb-2 mt-3 border-bottom">
                    <div class="_blogTitle font-weight-bold h5  mt-3 mb-3 text-danger">
                    <?= $tech['title'] ?>
                    </div>
                    </div>
                </div>
                <div class="col-md-12 text-start mb-5">
                  <div class="_content mt-2 text-muted">
                  <?= $tech['description'] ?>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        </div>
      </div>
</div>
<!-- End Detail info -->
