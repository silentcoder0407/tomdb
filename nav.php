<?php
error_reporting (E_ALL ^ E_NOTICE); //para no undefined error
include ("global_variables.php");
?>
<nav class=" bg-white text-secondary navbar navbar-expand-lg navbar-white shadow  ">
  <a  href="index.php" class="btn btn-warning font-weight-bold" data-toggle="tooltip" data-placement="right" title=""><i class="fa fa-play-circle fa-2x" ></i></a>
  <!--<a class="navbar-brand" href="index.php"><img src="img/logo.png" class="rounded" style="width:40px;"></a>-->
  <button class="navbar-toggler navbar-toggler-right " type="button" data-toggle="collapse" data-target="#navb">
    <span class="navbar-toggler-icon" ></span>
  </button>

  <div class="collapse navbar-collapse " id="navb">
    <ul class="navbar-nav mr-auto">
<!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
        Genre
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="genre.php?genre=action">Action</a>
        <a class="dropdown-item" href="genre.php?genre=horror">Horror</a>
        <a class="dropdown-item" href="genre.php?genre=drama">Drama</a>
        <a class="dropdown-item" href="genre.php?genre=scifi">Sci-Fi</a>
        <a class="dropdown-item" href="genre.php?genre=adventure">Adventure</a>
        <a class="dropdown-item" href="genre.php?genre=comedy">Comedy</a>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link" href="request.php">Request</a>
    </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
      


      



      <div class="input-group">
      <input type="text" class="text-warning form-control  bg-dark" placeholder="Search <?php echo $g_gtitle;?>..." name="movie_keyword">
        <div class="input-group-prepend">
          <button class="input-group-text bg-dark" id="basic-addon1"><i class="text-warning fa fa-search" aria-hidden="true"></i></button>
        </div>
      </div>

    </form>
  </div>
</nav>