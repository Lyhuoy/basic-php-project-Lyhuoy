<div class="text-left mt-3 mb-3 ml-3 mr-3 shadow-lg">
  <?php
    require_once('inc/functions.php');
    $sport_id = $_GET['sport_id'];
    $detailSport = getOneSport($sport_id);
    foreach($detailSport as $sport):
  ?>
  <div class="card-title rounded mx-auto d-block hvr-shrink mt-3 mb-3" style="width: 60%;">
   <img class="card-image-top rounded mt-3 mb-2" src="assets/images/<?= $sport['image'] ?>" alt="" width="95%" height="60%">
  </div>
  <div class="card-header rounded">
    <h5 class="card-title"><?= $sport['title'] ?></h5>
    <p class="card-text"><?= $sport['description'] ?></p>
    <a href="http://localhost/basic-php-project-Lyhuoy/index.php?page=sport" class="btn btn-danger">Go to Sport <i class="fa fa-futbol-o" aria-hidden="true"></i></a>
  </div>
  <div class="card-footer text-muted">
    <p class="card-text"><?= $sport['date'] ?></p>
  </div>
  <?php endforeach; ?>
</div>