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
    echo "
      <title>".$result['title']." (".$result['release_yr'].") ".$g_title."</title>
      <div class='container bg-secondary text-white pt-3 pb-3'>
		<div class='row'>
		<div class='col mx-auto'>
			<div class='text-center'>
				<object style='width:100%;height:100%;' data='".$result['trailer']."' type='application/x-shockwave-flash'><param name='src' value='".$result['trailer']."' /></object>
			</div>
		</div>
		
		<div class='col'>
			<img height='200' class='rounded' src='".$result['img']."'><br><br>

          <div class='fb-share-button'
            data-href='https://tomdb.000webhostapp.com/movie.php?id=$link_to_search'
            data-layout='button_count'>
          </div>

          <div class='fb-like'
            data-href='https://tomdb.000webhostapp.com/movie.php?id=$link_to_search'
            data-layout='standard'
            data-action='like'
            data-show-faces='true'>
          </div>

        <h2>".$result['title']." (".$result['release_yr'].")</h2>
        <small>Released: ".$result['release_yr']." | Genre: ".ucfirst($result['genre'])."  | Rating: ".$result['rating']."</small><br>
        <small>Cast: ".$result['casts']."</small><br>
        <p class='descri'>".$result['descri']."</p><br>
        <i><small>".$result['notes']."</small></i><br>
        <button class='btn btn-warning my-2 my-sm-0' onclick=\"window.location.href = '".$result['download_link']."';\">Download</button>
        </div>
        
		</div>
		
		<div id='fb-root'></div>
        <script async defer crossorigin='anonymous' src='https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0'></script>
        <script async defer crossorigin='anonymous' src='https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0'></script>
        <div class='fb-comments' data-href='https://tomdb.000webhostapp.com/movie.php?id=$link_to_search' data-numposts='5' data-width=''></div>
		
		
	  </div>
	  </div>
    ";
  }
}

?>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<?php include ("footer.php");?>
