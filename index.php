<?php
include("connections.php");
include("nav.php");
include("global_variables.php");
include("headers.php");
include("carousel.php");
?>


<title>Stream and Download Free Movies<?php echo $g_title;?></title>
	<div class='bg-dark text-white p-3'>
		<h1 align='left'>What to watch</h1>
	</div>
<center><div class=' bg-dark text-white pt-3 pb-3'>
<?php
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_page;

$ewan = mysqli_query($conn,"SELECT * FROM $g_table ORDER BY id_no DESC LIMIT $start_from, ".$results_per_page);
 while($row = mysqli_fetch_assoc($ewan)) {
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
 };

echo "</div><div class=' bg-dark'><div class='container text-center pb-2 pt-2'>";
$sql_page = mysqli_query($conn,"SELECT COUNT(id_no) AS total FROM ".$g_table."");
$row = mysqli_fetch_assoc($sql_page);
$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results

for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
			
	echo "<b><a class='btn btn-warning  font-weight-bold ' href='index.php?page=".$i."'";
            if ($i==$page)  echo " class='page-item'";
            echo ">".$i."</a></b>&nbsp;";
};
?>
</div></center>

<?php include ("footer.php");?>


