<?php
include ("connections.php");
include ("nav.php");
include ("global_variables.php");
include ("headers.php");


echo "
<title>Search results ".$g_title."</title>
	<div class=' p-3'>
    	<h1 align='left'>".ucfirst($_REQUEST['genre'])."</h1>
  	</div>
<center><div class=' bg-dark text-white pb-3'>
<br>

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
			
		
			<div  class='card-group d-inline-flex position-relative p-2 ' >
				<a href='movie.php?id=".$genre_results['url']."' >
					<div class='row col-sm bg-secondary shadow rounded' >
						<img  class='card-img-top rounded img-fluid shadow' style='height: 268px; width: 200px;' src='".$genre_results['img']."'  />
							<div class='card-img-overlay  btn-outline-secondary'  >
								<h4>".$genre_results['title']." (".$genre_results['release_yr'].")</h4>
								<p class='card-text text-left '  ><small>".mb_strimwidth($genre_results['descri'], 0, 75, '...')."</small></p>
							</div>
					</div>
				</a>
			</div>
    ";
      }
     echo "</div><div class=' bg-dark'><div class='container text-center pb-2 pt-2'>";
$sql_page = mysqli_query($conn,"SELECT COUNT(id_no) AS total FROM ".$g_table." WHERE genre='$genre'");
$row = mysqli_fetch_assoc($sql_page);
$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results

for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
            echo "<b><a class='btn btn-warning font-weight-bold' href='genre.php?page=".$i."'";
            if ($i==$page)  echo " class='page-item'";
            echo ">".$i."</a></b>&nbsp;";
};
echo "</div>
</div></center>";
    }

?>

<?php include ("footer.php");?>
