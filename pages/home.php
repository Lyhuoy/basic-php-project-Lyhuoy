<!-- Start Page -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i.pinimg.com/originals/77/a6/fb/77a6fb092282f9aea1db74d6ee2b931b.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.pinimg.com/originals/77/a6/fb/77a6fb092282f9aea1db74d6ee2b931b.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.pinimg.com/originals/77/a6/fb/77a6fb092282f9aea1db74d6ee2b931b.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- End Start page -->

<!-- Start lastest news -->
<button type="button" class="btn btn-danger btn-lg text-uppercase mt-3 ml-3 mr-3">Lastest news</button>
<div class="row row-cols-1 row-cols-md-3 g-4 mt-0 ml-3 mr-3">
  <?php
    require_once('inc/functions.php');
    $sports = getLastestSport();
    foreach($sports as $sport):
  ?>
  <div class="col">
    <div class="card h-100 shadow-lg hvr-shrink">
      <img
        src="assets/images/<?= $sport['image'] ?>"
        class="card-img-top"
        alt="..."
      />
      <button type="button" class="btn btn-primary btn-lg text-uppercase mt-3 ml-3 mr-3">Sport</button>
      <div class="card-body">
        <h5 class="card-title"><?= $sport['title'] ?></h5>
        <p class="card-text">
        <!-- <?= $sport['description'] ?> -->
        </p>
        <p class="card-text"><small class="text-muted"><?= $sport['date'] ?></small></p>
        <a href="?page=sport_detail&sport_id=<?= $sport['post_id'] ?>" class="btn btn-info text-white">Read more</a>
      </div>
    </div>
  </div>
  <?php endforeach; ?>

  <?php
    require_once('inc/functions.php');
    $techs = getLastestTech();
    foreach($techs as $tech):
  ?>
  <div class="col">
    <div class="card h-100 shadow-lg hvr-shrink">
      <img
        src="assets/images/<?= $tech['image'] ?>"
        class="card-img-top"
        alt="..."
      />
      <button type="button" class="btn btn-primary btn-lg text-uppercase mt-3 ml-3 mr-3">Technology</button>
      <div class="card-body">
        <h5 class="card-title"><?= $tech['title'] ?></h5>
        <p class="card-text">
        <!-- <?= $tech['description'] ?> -->
        </p>
        <p class="card-text"><small class="text-muted"><?= $tech['date'] ?></small></p>
        <a href="?page=tech_detail&tech_id=<?= $tech['post_id'] ?>" class="btn btn-info text-white">Read more</a>
      </div>
    </div>
  </div>
  <?php endforeach; ?>

  <?php
    require_once('inc/functions.php');
    $movies = getLastestMovie();
    foreach($movies as $movie):
  ?>
  <div class="col">
    <div class="card h-100 shadow-lg hvr-shrink">
      <img
        src="assets/images/<?= $movie['image'] ?>"
        class="card-img-top"
        alt="..."
      />
      <button type="button" class="btn btn-primary btn-lg text-uppercase mt-3 ml-3 mr-3">Movie</button>
      <div class="card-body">
        <h5 class="card-title"><?= $movie['title'] ?></h5>
        <p class="card-text">
        <!-- <?= $movie['description'] ?> -->
        </p>
        <p class="card-text"><small class="text-muted"><?= $movie['date'] ?></small></p>
        <a href="?page=movie_detail&movie_id=<?= $movie['post_id'] ?>" class="btn btn-info text-white">Read more</a>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>
<!-- End lastest news -->

<!-- Start Image caps -->
<button type="button" class="btn btn-danger btn-lg text-uppercase mt-3 ml-3 mr-3">Sports</button>
<div class="row row-cols-1 row-cols-md-3 g-4 mt-0 ml-3 mr-3">
  <?php
    require_once('inc/functions.php');
    $sports = getAllSport();
    foreach($sports as $sport):
  ?>
  <div class="col">
    <div class="card h-100 shadow-lg hvr-shrink">
      <img
        src="assets/images/<?= $sport['image'] ?>"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body">
        <h5 class="card-title"><?= $sport['title'] ?></h5>
        <p class="card-text">
        <!-- <?= $sport['description'] ?> -->
        </p>
        <p class="card-text"><small class="text-muted"><?= $sport['date'] ?></small></p>
        <a href="?page=sport_detail&sport_id=<?= $sport['post_id'] ?>" class="btn btn-info text-white">Read more</a>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>
<!-- End line up -->

<!-- Start Image caps -->
<button type="button" class="btn btn-danger btn-lg text-uppercase mt-3 ml-3 mr-3">Technologies</button>
<div class="row row-cols-1 row-cols-md-3 g-4 mt-0 ml-3 mr-3">
  <?php
    require_once('inc/functions.php');
    $techs = getAllTech();
    foreach($techs as $tech):
  ?>
  <div class="col">
    <div class="card h-100 shadow-lg hvr-shrink">
      <img
        src="assets/images/<?= $tech['image'] ?>"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body">
        <h5 class="card-title"><?= $tech['title'] ?></h5>
        <p class="card-text">
        <!-- <?= $tech['description'] ?> -->
        </p>
        <p class="card-text"><small class="text-muted"><?= $tech['date'] ?></small></p>
        <a href="?page=tech_detail&tech_id=<?= $tech['post_id'] ?>" class="btn btn-info text-white">Read more</a>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>
<!-- End line up -->

<!-- Start Image caps -->
<button type="button" class="btn btn-danger btn-lg text-uppercase mt-3 ml-3 mr-3">Movies</button>
<div class="row row-cols-1 row-cols-md-3 g-4 mt-0 ml-3 mr-3 mb-3">
  <?php
    require_once('inc/functions.php');
    $movies = getAllMovie();
    foreach($movies as $movie):
  ?>
  <div class="col">
    <div class="card h-90 shadow-lg hvr-shrink mb-3">
      <img
        src="assets/images/<?= $movie['image'] ?>"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body">
        <h5 class="card-title"><?= $movie['title'] ?></h5>
        <p class="card-text">
        <!-- <?= $movie['description'] ?> -->
        </p>
        <p class="card-text"><small class="text-muted"><?= $movie['date'] ?></small></p>
        <a href="?page=movie_detail&movie_id=<?= $movie['post_id'] ?>" class="btn btn-info text-white">Read more</a>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>
<!-- End line up -->