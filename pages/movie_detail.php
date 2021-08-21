<div class="text-left mt-3 mb-3 ml-3 mr-3 shadow-lg">
  <?php
    require_once('inc/functions.php');
    $movie_id = $_GET['movie_id'];
    $detailMovie = getOneMovie($movie_id);
    foreach($detailMovie as $movie):
  ?>
  <div class="card-title rounded mx-auto d-block hvr-shrink mt-3 ml-3" style="width: 60%;">
   <img class="card-image-top rounded mt-3 mb-2" src="assets/images/<?= $movie['image'] ?>" alt="" width="95%" height="60%">
  </div>
  <div class="card-header rounded">
    <h5 class="card-title d-flex">Movie Title ▶️: 
      <p class="text-danger"><?= $movie['title'] ?></p>
    </h5>
    <p class="card-text"><?= $movie['description'] ?></p>
   
    <a href="http://localhost/basic-php-project-Lyhuoy/index.php?page=movie" class="btn btn-danger">Go to Movie <i class="fa fa-film" aria-hidden="true"></i> </a>
  </div>
  
  <div class="card-footer text-muted">
    <p class="card-text"><?= $movie['date'] ?></p>
    <a href="https://soap2day.to/" target="_blank" class="btn btn-info text-white">Watch Here🎥 </i> </a>
  </div>
  <?php endforeach; ?>
</div>