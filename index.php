<?php
include("connections.php");
include("nav.php");
include("global_variables.php");
include("headers.php");


echo "
<title>Home".$g_title."</title>

<center><div class='container bg-secondary text-white '>
<br>
<h1 align='left'>What to watch</h1>
";
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_page;

$ewan = mysqli_query($conn,"SELECT * FROM ".$g_table." ORDER BY id_no DESC LIMIT $start_from, ".$results_per_page);
 while($row = mysqli_fetch_assoc($ewan)) {
    echo "
		<div style='display: inline-block; '  class='card card-body d-inline-flex p-2'>
			<center><a href='movie.php?id=".$row['url']."' ><img style='word-wrap: break-word;' width='182' height='268' src='".$row['img']."' class='rounded'/><br><b>".$row['title']." (".$row['release_yr'].")</b></a></center>
		</div>
    ";
 };

echo "<div class='container text-center'>";
$sql_page = mysqli_query($conn,"SELECT COUNT(id_no) AS total FROM ".$g_table."");
$row = mysqli_fetch_assoc($sql_page);
$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results

for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
            echo "<b><a class='border px-2 border-warning' href='index.php?page=".$i."'";
            if ($i==$page)  echo " class='page-item'";
            echo ">".$i."</a></b>&nbsp;";
};
echo "</div>
</div></center>";
?>


<?php include ("footer.php");?>


