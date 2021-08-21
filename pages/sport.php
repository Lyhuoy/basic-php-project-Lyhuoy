<div class="d-flex justify-content-start">
  <div>
    <select class="form-select mt-4 ml-4 mr-3" aria-label="Default select example" >
      <option selected>Sort by</option>
      <option value="name">Name</option>
  </select>
  </div>
  <nav class="navbar navbar-light mt-3 ml-3" style="width: 50%;">
    <div class="container-fluid">
      <form method="post" class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="sportName">
        <button class="btn btn-outline-info" type="submit">Search</button>
      </form>
    </div>
  </nav>
</div>

<!-- Start 2 start Page -->
<!-- <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 ml-3 mr-3 mb-3 justify-content-center">
  <?php
    require_once('inc/functions.php');
    $sports = get2LastestSport();
    foreach($sports as $sport):
  ?>
  <div class="col">
    <div class="card h-100 shadow-lg hvr-grow ml-3 mr-3">
      <img
        src="assets/images/<?= $sport['image'] ?>"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body">
        <h5 class="card-title"><?= $sport['title'] ?></h5>
        <p class="card-text">
        <?=substr ($sport['description'],0,80) ?> ...
        </p>
        <p class="card-text"><small class="text-muted"><?= $sport['date'] ?></small></p>
        <a href="?page=sport_detail&sport_id=<?= $sport['post_id'] ?>" class="btn btn-info text-white">Read More</a>
      </div>
 
    </div>
  </div>
  <?php endforeach; ?>
</div> -->
<!-- End start 2 start page -->

<!-- Start Detail info -->
<!-- <hr class="mt-5 mb-3 ml-3 mr-3"> -->
<div class="container mt-3 mb-3 justify-content-start">
      <div class="row">
        <div class="col-md-12 offset-2">
        <div class="_blogCard mt-3 bg-white rounded pl-4 pr-4 pb-4 pt-4">
          <div class="row">
          <?php
            require_once('inc/functions.php');
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
              $sports = searchSport($_POST);
            } else {
              $sports = getAllSport();
            }

            foreach($sports as $sport):
          ?>
            <div class="col-lg-7 col-md-12 col-sm-12 hvr-shrink">
              <div class="row">
                <div class="col-md-12">
                  <img src="assets/images/<?= $sport['image'] ?>" alt="" class="img-fluid shadow-lg rounded _moveTop">
                </div>
                <div class="col-md-12 d-inline-flex align-items-center justify-content-between">
                  <div class="_day d-inline-flex mt-2">
                    <span class="_date"><?= $sport['date'] ?></span>
                  </div>
                  
                  <div class="_shareIcons align-self-end">
                    <ul class="list-unstyled m-0 d-inline-flex">
                      <li class="ml-1 mr-1"><i class="fa fa-eye" aria-hidden="true"></i></li>
                      <li class="ml-1 mr-1"><i class="fa fa-heart" aria-hidden="true"></i></li>
                      <li class="ml-1 mr-1"><i class="fa fa-share" aria-hidden="true"></i></li>
                    </ul>
                </div>
                </div>
                
              </div>
            </div>
            <div class="col-lg-6 col-md-14 col-sm-14">
              <div class="row">
                <div class="col-md-12">
                  <div class="pd-2 mb-2 mt-2 border-bottom">
                    <div class="_blogTitle font-weight-bold h5 mt-3 mb-3 text-danger">
                    <?= $sport['title'] ?>
                    </div>
                    </div>
                </div>
                <div class="col-md-12 mb-5">
                  <div class="_content mt-2 text-muted">
                  <?= $sport['description'] ?>
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