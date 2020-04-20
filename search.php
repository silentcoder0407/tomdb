<?php
include ("connections.php");
include ("nav.php");
include ("global_variables.php");
echo "<div class='form'>";
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_page;
$movie_keyword = $_GET['movie_keyword'];

$sql = mysqli_query($conn,"SELECT * FROM ".$g_table." WHERE (`title` LIKE '%".$movie_keyword."%') OR (`url` LIKE '%".$movie_keyword."%') OR (`img` LIKE '%".$movie_keyword."%') ORDER BY id_no DESC LIMIT $start_from, ".$results_per_page);
$count = mysqli_num_rows($sql);

  if($movie_keyword == null){
    echo "<div class='notification'>Please type the movie title you're looking for.</div>";
  }else{
    echo "<div class='notification'>$count found.</div>";
    if($count == 0){
      echo "<div class='notification'>Cant find movie</div>";
    }else{

      while($movie_results = mysqli_fetch_assoc($sql)){
        echo "

            <div class='catalog'>
              <center><a href='movie.php?id=".$movie_results['url']."'><img src='".$movie_results['img']."' class='browse-logo'><br>".$movie_results['title']." ".$movie_results['release_yr']."</a></center>
            </div>
        ";
      }

      echo "<br><center><div class='page'>";
      $sql_page = mysqli_query($conn,"SELECT COUNT(id_no) AS total FROM ".$g_table." WHERE (`title` LIKE '%".$movie_keyword."%') OR (`url` LIKE '%".$movie_keyword."%') OR (`img` LIKE '%".$movie_keyword."%')");
      $row = mysqli_fetch_assoc($sql_page);
      $total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results

      for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
                  echo "<a href='index.php?page=".$i."'";
                  if ($i==$page)  echo " class='curPage'";
                  echo ">".$i."</a>";
      };
      echo "</div></center></div>";
    }
  }
?>
<title>Search results <?php echo $g_title;?></title>
<?php include ("footer.php");?>
