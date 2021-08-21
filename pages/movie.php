<!-- Search and Sort -->
<div class="d-flex justify-content-start">
  <div>
    <select class="form-select mt-4 ml-4 mr-3" aria-label="Default select example">
      <option selected>Sort by</option>
      <option value="name">Name</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
  </select>
  </div>
  <nav class="navbar navbar-light mt-3 ml-3" style="width: 50%;">
    <div class="container-fluid">
      <form action="" method="post" class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="movieName">
        <button class="btn btn-outline-info" type="submit">Search</button>
      </form>
    </div>
  </nav>
</div>
<!-- End search and Sort -->

<!-- Start Page -->
<div class="card text-white mt-4 mr-3 ml-3 shadow-lg  hvr-shrink">
    <?php
        require_once('inc/functions.php');
        $movies = getLastestMovie();
        foreach($movies as $movie):
    ?>
    <div class="mx-auto d-block" style="width: 100%;">
    <img class="card-image-top rounded" src="assets/images/<?= $movie['image'] ?>" alt="" width="100%" height="50%">
    </div>
    <div class="card-img-overlay">
      <h1 class="card-title text-success text-uppercase font-weight-bold h1"><?= $movie['title'] ?></h1>
      <strong class="card-text text-white font-weight-bold h6"><?= $movie['description'] ?></strong>
      <p class="card-text">Last updated 3 mins ago</p>
    </div>
  <?php endforeach; ?>
</div>
<!-- End page -->

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
              $movies = searchMovie($_POST);
            } else {
              $movies = getAllMovie();
            }
            foreach($movies as $movie):
          ?>
            <div class="col-lg-7 col-md-12 col-sm-12 hvr-shrink">
              <div class="row">
                <div class="col-md-12">
                  <img src="assets//images/<?=$movie['image'] ?>" alt="" class="img-fluid shadow-lg rounded _moveTop">
                </div>
                <div class="col-md-12 d-inline-flex align-items-center justify-content-between">
                  <div class="_day d-inline-flex mt-2">
                    <span class="_date"><?= $movie['date'] ?></span>
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
                    <div class="_blogTitle font-weight-bold h5 mt-3">
                    <?= $movie['title'] ?>
                    </div>
                    </div>
                </div>
                <div class="col-md-12 text-start mb-5">
                  <div class="_content mt-2 text-muted">
                  <?= $movie['description'] ?>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        </div>
      </div>
      <hr class="my-4">
</div>
<!-- End Detail info -->