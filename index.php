<?php
include("connections.php");
include("nav.php");
include("global_variables.php");

echo "
<title>Home".$g_title."</title>

<div class='form'>";
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_page;

$ewan = mysqli_query($conn,"SELECT * FROM ".$g_table." ORDER BY id_no DESC LIMIT $start_from, ".$results_per_page);
 while($row = mysqli_fetch_assoc($ewan)) {
    echo "
    <div class='catalog'>
    <center><a href='movie.php?id=".$row['url']."' ><img src='".$row['img']."' class='browse-logo'/><br><b>".$row['title']." ".$row['release_yr']."</b></a></center>
    </div>
    ";
 };

echo "<br><center><div class='page'>";
$sql_page = mysqli_query($conn,"SELECT COUNT(id_no) AS total FROM ".$g_table."");
$row = mysqli_fetch_assoc($sql_page);
$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results

for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
            echo "<a href='index.php?page=".$i."'";
            if ($i==$page)  echo " class='curPage'";
            echo ">".$i."</a>";
};
echo "</div></center></div>";
?>



<?php include ("footer.php");?>
