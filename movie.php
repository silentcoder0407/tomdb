<?php
include ("connections.php");
include ("nav.php");
include ("global_variables.php");
include ("headers.php");

$link_to_search = $_REQUEST['id'];


$sql = mysqli_query($conn,"SELECT * FROM ".$g_table." WHERE url = '$link_to_search' LIMIT 1");
$count = mysqli_num_rows($sql);


if($count > 0){
  while($result = mysqli_fetch_assoc($sql)){
    $db_trailer = $result['trailer'];
    $db_img = $result['img'];
    $db_watch = $result['watch'];
    $db_title = $result['title'];
    $db_year = $result['release_yr'];
    $db_genre = $result['genre'];
    $db_rating = $result['rating'];
    $db_casts = $result['casts'];
    $db_descri = $result['descri'];
    $db_dllink = $result['download_link'];
    $db_altlink = $result['alt_link'];
  }
}
?>
<title><?php echo $db_title;?> (<?php echo $db_year;?>) <?php echo $g_title;?></title>

<meta property="og:title"              content="<?php echo $db_title;?> (<?php echo $db_year;?>) Stream and Download <?php echo $g_title;?>"/>
<meta property="og:description"        content="<?php echo $db_descri;?>" />
<meta property="og:image"              content="<?php echo $db_img;?>" />
<meta property="og:url"                content="https://tomdb.info/movie.php?id=<?php echo $link_to_search;?>" />
<meta property="og:type"               content="article" />


<div class="bg-dark ">
  <div class="row">
    <div class="col-sm">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="<?php echo $db_watch;?>"  allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

<div class=" bg-white">
  <div class="row p-3">
    <div class="col-sm text-left ">
      <h1 style="display:inline"><?php echo $db_title;?></h1><h2 style="display:inline" class="text-muted"> (<?php echo $db_year;?>)</h2>
      <br>
      <small><i class="text-warning fa fa-calendar" aria-hidden="true"></i> <?php echo $db_year;?> | <i class="text-warning fa fa-film" aria-hidden="true"></i> <?php echo ucfirst($db_genre);?>  | <i class="text-warning fa fa-star" aria-hidden="true"></i> <?php echo $db_rating;?></small>
    </div>
    
    <div class="col-sm text-right text-dark text-light pt-2 pb-3">
      <a class="btn  btn-lg btn-warning" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-youtube-play" aria-hidden="true"></i> Trailer</a>&nbsp;<a class="btn btn-lg btn-warning" data-toggle="modal" data-target="#exampleModal2" ><i class="fa fa-download" aria-hidden="true"></i> Download</a>&nbsp;<a class="btn btn-lg btn-warning" href="https://www.facebook.com/sharer/sharer.php?u=https://tomdb.info/movie.php?id=<?php echo $link_to_search;?>" target="_blank"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</a>
    </div>
  </div>

  <div class='dropdown-divider'></div>

  <div class="row p-3">
    <div class="col-sm">
      <p class=''>
        <?php echo $db_descri;?><br>
        <img src='<?php echo $db_img;?>' style="display: none;">
        <small>Stars: </small><small class='text-primary'> <?php echo $db_casts;?></small>
      </p>
    </div>
  </div>

  <div class="row p-3">
    <div class="col-sm">
      <div class="text-center">
      <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=429868&format=728x90&ga=g"></script>
      <noscript><a class="justify-content-center" href="https://yllix.com/publishers/429868" target="_blank"><img src="//ylx-aff.advertica-cdn.com/pub/728x90.png" style="border:none;margin:0;padding:0;vertical-align:baseline;" alt="ylliX - Online Advertising Network" /></a></noscript>
      </div>
    </div>
  </div>


<!-- Modal Trailer -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog " role="document">
		<div class="modal-content ">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel"><?php echo $db_title;?> (<?php echo $db_year;?>) <?php echo $g_title;?></h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $db_trailer;?>" allowfullscreen></iframe>
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  </div>
		</div>
	</div>
</div>

<!-- Modal Download -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog " role="document">
		<div class="modal-content ">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Download Servers</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body ">
        <a class="btn btn-block btn-success" target="_blank" href="<?php echo $db_dllink;?>"><i class="fa fa-download" aria-hidden="true"></i> Server 1</a>
        <div class="container pt-2 pb-3">
          <script type="text/javascript" src="https://uprimp.com/bnr.php?section=General&pub=429868&format=468x60&ga=g&mbtodb=1"></script>
          <noscript><a href="https://yllix.com/publishers/429868" target="_blank"><img src="//ylx-aff.advertica-cdn.com/pub/468x60.png" style="border:none;margin:0;padding:0;vertical-align:baseline;" alt="ylliX - Online Advertising Network" /></a></noscript>
      </div>
        <a class="btn btn-block btn-primary" target="_blank" href="<?php echo $db_altlink;?>"><i class="fa fa-download" aria-hidden="true"></i> Server 2</a>
        <a class="btn btn-block btn-danger" target="_blank" href="<?php echo $notes;?>" ><i class="fa fa-download" aria-hidden="true"></i> Server 3</a>
		  </div>

      
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  </div>
		</div>
	</div>
</div>

<?php include ("footer.php");?>
