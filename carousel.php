<center>
<div class="bs-example">
    <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner ">
<?php

$result = mysqli_query($conn,"SELECT * FROM ".$g_table." ");
    $counter = 1;
    while($row = mysqli_fetch_array($result)){
?>
            <div class="carousel-item<?php if($counter <= 1){echo " active"; } ?>">
                <a href="movie.php?id=<?php echo $row['url'];?>">
                    <img class="d-block w-50  " data-src="holder.js/900x800/auto/#777:#777" style="height: 400px; width: 400px;" alt="First slide image" src="<?php echo $row['img'] ?>"/>
                    <div class="carousel-caption d-none d-md-block">
                        <a class=" btn btn-warning btn-lg m-3 p-3" href="movie.php?id=<?php echo $row['url'];?>"><i class="fa fa-play-circle" aria-hidden="true"></i> Play</a>
                    </div>
                </a>
            </div>
            <a class="carousel-control-prev " style="filter: invert(100%); href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon text-warning" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next  " style="filter: invert(100%);" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
<?php
    $counter++;
    }
?>

    </div>
</div>
</center>
