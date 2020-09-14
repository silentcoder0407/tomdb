<?php
include ("connections.php");
include ("nav.php");
include ("global_variables.php");



$url = date("Ymdhis");
$trailer = $_POST['trailer'];
$img = $_POST['img'];
$title = $_POST['title'];
$release_yr = $_POST['release_yr'];
$rating = $_POST['rating'];
$genre= $_POST['genre'];
$casts = $_POST['casts'];
$descri = $_POST['descri'];
$download_link = $_POST['download_link'];
$notes = $_POST['notes'];




if(isset($_POST['submit'])){
  $sql = mysqli_query($conn,"INSERT INTO $g_table (url, trailer, img, title, release_yr, rating, genre, casts, descri, download_link, notes) VALUES('$url', '$trailer', '$img', '$title', '$release_yr', '$rating', '$genre', '$casts', '$descri', '$download_link', '$notes')");
}

?>
<title>New <?php echo $g_title;?></title>
<div class='container text-light bg-dark pb-3'>
  <h1 align='left'>New</h1>
</div>

<div class="container bg-secondary text-white pb-2 pt-2">
  <div class="container rounded bg-dark p-3">
    <div class="form">
      <form method="POST" action="new.php">
        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Trailer</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="trailer" placeholder="Trailer" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Image</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="img" placeholder="Image" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Title</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="title" placeholder="Title" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Year</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="release_yr" placeholder="Year" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Rating</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="rating" placeholder="Rating" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Genre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="genre" placeholder="Genre" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Casts</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="casts" placeholder="Casts" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Description</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="descri" placeholder="Description" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Link</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="download_link" placeholder="Link" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Notes</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="notes" placeholder="Notes" required>
          </div>
        </div>

        <input type="submit" class="btn btn-lg btn-warning btn-block font-weight-bold" value="Submit" name="submit">
      </form>
    </div>
  </div>
</div>
<?php include("footer.php");?>
