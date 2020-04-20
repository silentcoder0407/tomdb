<?php
include ("connections.php");
include ("nav.php");
include ("global_variables.php");

$link_to_search = $_REQUEST['id'];

$sql = mysqli_query($conn,"SELECT * FROM ".$g_table." WHERE url = '$link_to_search' LIMIT 1");
$count = mysqli_num_rows($sql);

if($count > 0){
  while($result = mysqli_fetch_assoc($sql)){
    echo "
      <div class='form'>
        <div style='display: inline-block;'>
        <iframe src='".$result['trailer']."' allowfullscreen=''frameborder='1'  width='640' height='480'></iframe>
        </div>

        <div class='info'>
        <img height='200' src='".$result['img']."'>
        <h2>".$result['title']."</h2>
        <small>Released: ".$result['release_yr']." | Genre: ".ucfirst($result['genre'])."  | Rating: ".$result['rating']."</small><br>
        <small>Cast: ".$result['casts']."</small><br>
        <p>".$result['descri']."</p><br>
        <br>
        <a href='".$result['download_link']."'>Download</a>
        </div>
      </div>
    ";
  }
}
?>
<title>Search results <?php echo $g_title;?></title>

<?php include ("footer.php");?>
