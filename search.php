<?php
include ("connections.php");
include ("nav.php");
include ("global_variables.php");
include ("headers.php");

echo "<center><div class='container bg-secondary text-white'>";
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_page;
$movie_keyword = $_GET['movie_keyword'];

$sql = mysqli_query($conn,"SELECT * FROM ".$g_table." WHERE (`title` LIKE '%".$movie_keyword."%') OR (`url` LIKE '%".$movie_keyword."%') OR (`img` LIKE '%".$movie_keyword."%') ORDER BY id_no DESC LIMIT $start_from, ".$results_per_page);
$count = mysqli_num_rows($sql);

  if($movie_keyword == null){
    echo "<div class='alert alert-warning fade in alert-dismissible show'>
  <strong>Empty!</strong> Please enter movie title.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true' style='font-size:20px'>×</span>
  </button>
  </div>";
  }else{
    echo "<div class='alert alert-success fade in alert-dismissible show'>$count movie(s) found.
	<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true' style='font-size:20px'>×</span>
  </button>
	</div>";
    if($count == 0){
      echo "<div class='alert alert-warning fade in alert-dismissible show'>
  <strong>Sorry!</strong> Movie not found.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true' style='font-size:20px'>×</span>
  </button>
  </div>";
    }else{

      while($movie_results = mysqli_fetch_assoc($sql)){
	
	
		echo "
			
		
			<div  class='card-group d-inline-flex position-relative p-3 ' >
				<a href='movie.php?id=".$movie_results['url']."' >
					<div class='row col-sm bg-white shadow rounded' style='height: 268px; width: 200px;'>
						<img  class='card-img-top rounded img-fluid'  src='".$movie_results['img']."'  />
							<div class='card-img-overlay' >
								<h4>".$movie_results['title']." (".$movie_results['release_yr'].")</h4>
								<p class='card-text text-left '  ><small>".mb_strimwidth($movie_results['descri'], 0, 75, '...')."</small></p>
							</div>
					</div>
				</a>
			</div>
    ";

	
	
      }

      echo "<br><center><div class='page'>";
      $sql_page = mysqli_query($conn,"SELECT COUNT(id_no) AS total FROM ".$g_table." WHERE (`title` LIKE '%".$movie_keyword."%') OR (`url` LIKE '%".$movie_keyword."%') OR (`img` LIKE '%".$movie_keyword."%')");
      $row = mysqli_fetch_assoc($sql_page);
      $total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results

      for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
                  echo "<b><a class='border px-2 border-warning' href='index.php?page=".$i."'";
                  if ($i==$page)  echo " class='page-item'";
                  echo ">".$i."</a></b>";
      };
      echo "</div></div></center>";
    }
  }
?>
<title>Search results <?php echo $g_title;?></title>
<?php include ("footer.php");?>
