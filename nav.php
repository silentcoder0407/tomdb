<?php
error_reporting (E_ALL ^ E_NOTICE); //para no undefined error
include ("global_variables.php");
include ("headers.php");
?>
<nav class="container bg-secondary text-white navbar navbar-expand-lg navbar-dark bg-dark" ">
  <a class="navbar-brand" href="index.php"><img src="img/logo.png" class="rounded" style="width:40px;"></a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navb">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
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
        <a class="nav-link" href="disclaimer.php">Disclaimer</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
      <input class="form-control mr-sm-2" type="text" name="movie_keyword" placeholder="Search <?php echo $g_gtitle;?>...">
      <input class="btn btn-warning my-2 my-sm-0" value="Search" type="submit">
    </form>
  </div>
</nav>