<?php
ob_start();
session_start();
include ("connections.php");
include ("nav.php");
include ("global_variables.php");
include ("headers.php");

if(!isset($_SESSION['s_username']) || empty($_SESSION['s_password'])){
	header("location: login.php");
}

$url = date("Ymdhis");
$id = $_POST['id'];
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
$watch = $_POST['watch'];







//update
if(isset($_POST['update'])){	
$sql = mysqli_query($conn,"UPDATE $g_table SET trailer='$trailer', img='$img', title='$title', release_yr='$release_yr', rating='$rating', genre='$genre', casts='$casts', descri='$descri', download_link='$download_link', notes='$notes', watch='$watch' WHERE url = '$id'");
  echo '<center><div class="alert alert-info fade in alert-dismissible show">' . $id. ' record updated!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true" style="font-size:20px">×</span>
        </button>
        </div></center>';

}

if(isset($_POST['logout'])){
  header("location: login.php");
}

//search
if(isset($_POST['search'])){
	
$sql="SELECT * FROM $g_table WHERE url = '$id'";
$result=mysqli_query($conn,$sql) or die( mysqli_error($conn));
    if($result == "0"){
      echo '<center><div class="alert alert-info fade in alert-dismissible show">' . $id. ' was not found!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" style="font-size:20px">×</span>
            </button>
            </div></center>';
    }else{		
      while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $db_trailer = $row['trailer'];
        $db_img = $row['img'];
        $db_title = $row['title'];
        $db_release_yr = $row['release_yr'];
        $db_rating = $row['rating'];
        $db_genre = $row['genre'];
        $db_casts = $row['casts'];
        $db_descri = $row['descri'];
        $db_download_link = $row['download_link'];
        $db_notes = $row['notes'];
        $db_watch = $row['watch'];
    }
  }

}

?>
<title>Edit <?php echo $g_title;?></title>
<div class='container text-light bg-dark pb-3'>
  <h1 align='left'>Edit</h1>
</div>
<div class="container bg-secondary text-white pt-2 pb-2 ">
  <div class="container bg-dark rounded p-3">
    <div class="form">
      <form method="POST" action="edit.php">
        <div class="input-group mb-3">
          <label for="inputID" class="sr-only">ID</label>
          <input type="text" id="inputID" class="form-control" name="id" placeholder="ID" value="<?php echo $id; ?>" aria-label="ID" aria-describedby="basic-addon2" required>
            <div class="input-group-append">
              <button type="submit" class="btn btn-warning font-weight-bold mb-2" name="search">Search</button>
            </div>
        </div>


        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Trailer</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="trailer" value="<?php echo $db_trailer; ?>" placeholder="Trailer" >
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Image</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="img" value="<?php echo $db_img; ?>" placeholder="Image" >
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Title</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="title" value="<?php echo $db_title; ?>" placeholder="Title" >
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Year</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="release_yr" value="<?php echo $db_release_yr; ?>" placeholder="Year" >
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Rating</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="rating" value="<?php echo $db_rating; ?>" placeholder="Rating" >
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Genre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="genre" value="<?php echo $db_genre; ?>" placeholder="Genre" >
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Casts</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="casts" value="<?php echo $db_casts; ?>" placeholder="Casts" >
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Description</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="descri" value="<?php echo $db_descri; ?>" placeholder="Description" >
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Link</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="download_link" value="<?php echo $db_download_link; ?>" placeholder="Link" >
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Notes</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="notes" value="<?php echo $db_notes; ?>" placeholder="Notes" >
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Watch</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="watch" value="<?php echo $db_watch; ?>" placeholder="Watch" >
          </div>
        </div>

        <input type="submit" class="btn btn-lg btn-warning btn-block font-weight-bold" value="Update" name="update">
      </form>
      <a href="logout.php" class="btn btn-lg btn-danger btn-block font-weight-bold" >Logout</a>
    </div>
  </div>
</div>
<?php include("footer.php");?>
