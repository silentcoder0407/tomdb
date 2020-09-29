<?php
include("connections.php");
include("nav.php");
include("global_variables.php");
include("headers.php");


echo "
<title>Home of the Great Movies".$g_title."</title>
	<div class='container text-light bg-dark pb-3'>
		<h1 align='left'>What to watch</h1>
	</div>
<center><div class='container bg-secondary text-white pt-3 pb-3'>
";
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_page;

$ewan = mysqli_query($conn,"SELECT * FROM ".$g_table." ORDER BY id_no DESC LIMIT $start_from, ".$results_per_page);
 while($row = mysqli_fetch_assoc($ewan)) {
	
	
	
	
	
	
	echo "
			
		
			<div  class='card-group d-inline-flex position-relative p-2' >
				<img src='img/logo.png' style='position:absolute; top:10px; left:10px;'>
				<a href='movie.php?id=".$row['url']."' >
					<div class='row col-sm bg-secondary shadow rounded ' >
						<img  class='card-img-top rounded img-fluid ' style='height: 268px; width: 200px;'  src='".$row['img']."'  />
							<div class='card-img-overlay btn-outline-secondary' >
								<h4>".$row['title']." (".$row['release_yr'].")</h4>
								<p class='card-text text-left '  ><small>".mb_strimwidth($row['descri'], 0, 100, '...')."</small></p>
							</div>
					</div>
				</a>
			</div>
    ";
	
	
	
	
 };

echo "</div><div class='container bg-dark'><div class='container text-center pb-2 pt-2'>";
$sql_page = mysqli_query($conn,"SELECT COUNT(id_no) AS total FROM ".$g_table."");
$row = mysqli_fetch_assoc($sql_page);
$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results

for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
			
	echo "<b><a class='btn btn-warning font-weight-bold ' href='index.php?page=".$i."'";
            if ($i==$page)  echo " class='page-item'";
            echo ">".$i."</a></b>&nbsp;";
};
echo "
</div></center>";
?>


<?php include ("footer.php");?>


