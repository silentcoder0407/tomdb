<?php
error_reporting (E_ALL ^ E_NOTICE); //para no undefined error
include ("connections.php");
include ("nav.php");
include ("global_variables.php");

echo "<div class='form'>";
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_page;
$genre = $_REQUEST['genre'];

$sql = mysqli_query($conn,"SELECT * FROM ".$g_table." WHERE genre = '$genre' ORDER BY id_no DESC LIMIT $start_from, ".$results_per_page);
$count = mysqli_num_rows($sql);

  if($count == 0){
      echo "<div class='notification'>No ".$genre." movies found.</div>";
    }else{

      while($genre_results = mysqli_fetch_assoc($sql)){
        echo "

            <div class='catalog'>
              <center><a href='movie.php?id=".$genre_results['url']."'><img src='".$genre_results['img']."' class='browse-logo'><br>".$genre_results['title']." ".$genre_results['release_yr']."</a></center>
            </div>
        ";
      }

      echo "<br><center><div class='page'>";
      $sql_page = mysqli_query($conn,"SELECT COUNT(id_no) AS total FROM ".$g_table." WHERE genre='$genre')");
      $row = mysqli_fetch_assoc($sql_page);
      if($row > 0){
        $total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results

        for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
                    echo "<a class='LinkButton' href='index.php?page=".$i."'";
                    if ($i==$page)  echo " class='curPage'";
                    echo ">".$i."</a>";
        };
      }
      echo "</div></center></div>";
    }

?>
<title>Search results <?php echo $g_title;?></title>
<?php include ("footer.php");?>
