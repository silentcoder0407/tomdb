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

<div class="form">
  <form method="POST" action="new.php">
    Trailer:&nbsp;<input type="text" name="trailer" required><br>
    Image:&nbsp;<input type="text" name="img" required><br>
    Title:&nbsp;<input type="text" name="title" required><br>
    Released Year:&nbsp;<input type="text" name="release_yr" required><br>
    Rating:&nbsp;<input type="text" name="rating" required><br>
    Genre:&nbsp;<input type="text" name="genre" required><br>
    Casts:&nbsp;<input type="text" name="casts" required><br>
    Description:&nbsp;<input type="text" name="descri" required><br>
    Download Link:&nbsp;<input type="text" name="download_link" required><br>
    Notes:&nbsp;<input type="text" name="notes" required><br>
    <input type="submit" value="Submit" name="submit">
  </form>
</div>
<?php include("footer.php");?>
