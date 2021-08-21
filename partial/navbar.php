<?php
  require_once('inc/functions.php');
  $users = getAllUsers();
  session_start();
  foreach($users as $user):
    if($user['username'] == $_SESSION['admin']):
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-info sticky-top rounded-right">
  <a class="navbar-brand" href="http://localhost/basic-php-project-Lyhuoy/index.php?page=home">
  <img src="" style="width:80px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="?page=home"><i class="fa fa-home" aria-hidden="true"> Home</i><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="?page=sport"><i class="fa fa-futbol-o" aria-hidden="true"> Sport</i><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="?page=technology"><i class="fa fa-wpexplorer" aria-hidden="true"> Technology</i><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="?page=movie"><i class="fa fa-film" aria-hidden="true"> Movie Entertainment</i><span class="sr-only">(current)</span></a>
      </li>
      <?php 
        if($user['role'] == 'admin'):
      ?>
      <li class="nav-item active">
        <a class="nav-link" href="?page=usermanager"><i class="fa fa-user" aria-hidden="true"></i> Admin</i><span class="sr-only">(current)</span></a>
      </li>
      <?php endif; ?>
    </ul>
    <?php 
      if(!isset($user['username'])):
    ?>
    <form class="form-inline my-2 my-lg-0">
      <div class="d-flex justify-content-end p-2">
          <a href="log/sign_in.php" class="btn btn-danger">Login</a>
      </div>
    </form>
    <?php endif; ?>
    <form class="form-inline my-2 my-lg-0">
      <div class="d-flex justify-content-end p-2">
          <a href="log/sign_in.php" class="btn btn-danger">Logout</a>
      </div>
    </form>
  </div>
</nav>

<?php endif; endforeach; ?>