
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">
  <img src="images/logo.png" alt="Logo" class="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <!-- <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true){ ?>

      <li class="nav-item">
        <a class="nav-link" href="#"><?= $_SESSION['role']?></a>
      </li>
    <?php }?> -->
      </ul>
      <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true){ ?>

      <ul class="navbar-nav  mt-2 mt-lg-0">
      <li class="nav-item form-inline my-2 my-lg-0">
        <a class="nav-link" href="logout.php">Log out</a>
      </li>
      </ul>
<?php } else {?>
    <ul class="navbar-nav  mt-2 mt-lg-0">
    <li class="nav-item form-inline my-2 my-lg-0">
        <a class="nav-link" href="signup.php">Signup</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
    </ul>
    <?php }?>
  </div>
</nav>    