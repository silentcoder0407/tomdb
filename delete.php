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

$id = $_POST['id'];



//update
if(isset($_POST['delete'])){	
$sql = mysqli_query($conn,"DELETE FROM $g_table WHERE url = '$id'");
  echo '
        <center><div class="alert alert-info fade in alert-dismissible show">' . $id. ' deleted!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true" style="font-size:20px">×</span>
        </button>
        </div></center>';

}


?>
<title>Delete <?php echo $g_title;?></title>
<div class='p-3'>
  <h1 align='left'>Delete</h1>
</div>
<div class=" bg-secondary text-white pb-2 pt-2">
  <div class="container  rounded bg-dark p-3">
    <div class="form">
      <form method="POST" action="delete.php">
        <div class="input-group mb-3">
          <label for="inputID" class="sr-only">ID</label>
          <input type="text" id="inputID" class="form-control" name="id" placeholder="ID" value="<?php echo $id; ?>" aria-label="ID" aria-describedby="basic-addon2" required>
            <div class="input-group-append">
              <button type="submit" class="btn  btn-warning btn-block font-weight-bold mb-2" name="delete">Delete</button>              
            </div>
            <a href="logout.php" class="btn btn-lg btn-danger btn-block font-weight-bold" >Logout</a>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include("footer.php");?>
