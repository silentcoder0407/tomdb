<?php
include ("connections.php");
include ("nav.php");
include ("global_variables.php");

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
<div class='container text-light bg-dark pb-3'>
  <h1 align='left'>Delete</h1>
</div>
<div class="container bg-secondary text-white pb-2 pt-2">
  <div class="container shadow rounded bg-dark p-3">
    <div class="form">
      <form method="POST" action="delete.php">
        <div class="input-group mb-3">
          <label for="inputID" class="sr-only">ID</label>
          <input type="text" id="inputID" class="form-control" name="id" placeholder="ID" value="<?php echo $id; ?>" aria-label="ID" aria-describedby="basic-addon2" required>
            <div class="input-group-append">
              <button type="submit" class="btn  btn-warning btn-block font-weight-bold mb-2" name="delete">Delete</button>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include("footer.php");?>
