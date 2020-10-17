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

      while($row = mysqli_fetch_assoc($sql)){
	?>	  
	
	
			<?php 
			 $mtitle = $row['title'] .' ('. $row['release_yr'] . ')';
			?>
			<div  class='d-inline-flex  shadow m-2 bg-primary rounded ' >
				<div>
					<a class="" href='movie.php?id=<?php echo $row['url'];?>' >
						<div class="text-right p-1"><i class=" text-warning fa fa-star" aria-hidden="true"> <strong><?php echo $row['rating'];?></strong></i></div> 
						<div class="text-center " >
							<div class="p-1"><img  class='rounded shadow' style='height: 268px; width: 230px;'  src='<?php echo $row['img'];?>'  /></div>
							<div class='m-2'  >
								<p class="badge badge-pill badge-warning"><?php echo wordwrap($mtitle,30,"<br>\n");?></p>
							</div>
						</div>
					</a>
				</div>
			</div>
	<?php
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
