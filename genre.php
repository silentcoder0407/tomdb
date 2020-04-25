<?php
error_reporting (E_ALL ^ E_NOTICE); //para no undefined error
include ("connections.php");
include ("nav.php");
include ("global_variables.php");
include ("headers.php");


echo "
<title>Search results ".$g_title."</title>
<center><div class='container bg-secondary text-white'>
<br>
<h1 align='left'>".ucfirst($_REQUEST['genre'])."</h1>
";
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_page;
$genre = $_REQUEST['genre'];

$sql = mysqli_query($conn,"SELECT * FROM ".$g_table." WHERE genre = '$genre' ORDER BY id_no DESC LIMIT $start_from, ".$results_per_page);
$count = mysqli_num_rows($sql);

  if($count == 0){
      echo "<div class='alert alert-warning fade in alert-dismissible show'>No ".$genre." movies found.
	  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true' style='font-size:20px'>×</span>
  </button>
	  </div>";
    }else{

      while($genre_results = mysqli_fetch_assoc($sql)){
        echo "

            <div style='display: inline-block;'  class='card card-body d-inline-flex p-2'>
              <center><a href='movie.php?id=".$genre_results['url']."'><img width='182' height='268' src='".$genre_results['img']."' class='rounded'><br><b>".$genre_results['title']." (".$genre_results['release_yr'].")</b></a></center>
            </div>
        ";
      }

      echo "<br><div class='container text-center'>";
      $sql_page = mysqli_query($conn,"SELECT COUNT(id_no) AS total FROM ".$g_table." WHERE genre='$genre')");
      $row = mysqli_fetch_assoc($sql_page);
      if($row > 0){
        $total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results

        for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
                    echo "<b><a class='border px-2 border-warning' href='index.php?page=".$i."'";
                    if ($i==$page)  echo " class='page-item'";
                    echo ">".$i."</a>";
        };
      }
      echo "</div></div></center>";
    }

?>

<?php include ("footer.php");?>
