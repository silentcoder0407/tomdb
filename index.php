<?php
include("connections.php");
include("nav.php");
include("global_variables.php");
include("headers.php");
include("carousel.php");
?>

<title>Home of the Great Movies<?php echo $g_title;?></title>
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
	
			
		
			<div  class='d-inline-flex position-relative m-2 shadow' >
				<a href='movie.php?id=<?php echo $row['url'];?>' >
						<img  class='row col-sm  rounded img-fluid ' style='height: 268px; width: 258px;'  src='<?php echo $row['img'];?>'  />
							<div class='text-warning m-2 ' >
								<small><strong><?php echo $row['title'];?> (<?php echo $row['release_yr'];?>)</strong></small>
							</div>
					</a>
			</div>
<?php	
 };

echo "</div><div class=' bg-dark'><div class='container text-center pb-2 pt-2'>";
$sql_page = mysqli_query($conn,"SELECT COUNT(id_no) AS total FROM ".$g_table."");
$row = mysqli_fetch_assoc($sql_page);
$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results

for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
			
	echo "<b><a class='btn btn-warning font-weight-bold ' href='index.php?page=".$i."'";
            if ($i==$page)  echo " class='page-item'";
            echo ">".$i."</a></b>&nbsp;";
};
?>
</div></center>

<?php include ("footer.php");?>


