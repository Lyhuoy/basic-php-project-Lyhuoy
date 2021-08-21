<div class="text-left mt-3 mb-3 ml-3 mr-3 shadow-lg">
  <?php
    require_once('inc/functions.php');
    $tech_id = $_GET['tech_id'];
    $detailTech = getOneTech($tech_id);
    foreach($detailTech as $tech):
  ?>
  <div class="card-title rounded mx-auto d-block hvr-shrink mt-3 mb-3" style="width: 60%;">
   <img class="card-image-top rounded mt-3 mb-2" src="assets/images/<?= $tech['image'] ?>" alt="" width="95%" height="60%">
  </div>
  <div class="card-header rounded">
    <h5 class="card-title"><?= $tech['title'] ?></h5>
    <p class="card-text"><?= $tech['description'] ?></p>
    <a href="http://localhost/basic-php-project-Lyhuoy/index.php?page=technology" class="btn btn-danger">Go to Technology <i class="fa fa-wpexplorer" aria-hidden="true"></i></a>
  </div>
  <div class="card-footer text-muted">
    <p class="card-text"><?= $tech['date'] ?></p>
  </div>
  <?php endforeach; ?>
</div>