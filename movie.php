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
    
  <div>
    <div class='container text-light bg-dark pb-3'>
      <h1 style='display:inline'>".$result['title']."</h1><h2 style='display:inline' class='text-muted'> (".$result['release_yr'].")</h2>
      <div class='fb-share-button' data-href='https://tomdb.info/movie.php?id=$link_to_search' data-layout='button_count'></div>
      <div class='fb-like' data-href='https://tomdb.info/movie.php?id=$link_to_search' data-layout='standard' data-action='like' data-show-faces='true'></div>
      <br>
      <small>Released: ".$result['release_yr']." | Genre: ".ucfirst($result['genre'])."  | Rating: ".$result['rating']."</small>
    </div>

    

    <div class='container bg-secondary'>
        <div class='media '>
          <img class='align-self-center mr-3 rounded' style='height: 268px; width: 200px;' src='".$result['img']."' alt='".$result['title']." (".$result['release_yr'].")'>
          <div class='media-body '>
            <div class='embed-responsive embed-responsive-16by9'>
              <iframe class='align-middle align-self-center embed-responsive-item' src='https://www.youtube.com/embed/".$result['trailer']."' allowfullscreen></iframe>
            </div>
          </div>
        </div>
    </div>

    <div class='container text-dark bg-white mb-3 pt-3'>
      <div class='container'>
        <p class=''>
          ".$result['descri']."<br>
          <small>Stars: </small><small class='text-primary'> ".$result['casts']."</small>
        </p>
      </div>

      <div class='container mt-3 mb-3'>
        <button class='btn btn-primary  btn-lg mb-2 btn-block' onclick=\"window.location.href = '".$result['download_link']."';\">Download <span class='badge badge-light'>".$result['notes']."</span></button>		
      
	  
	  <div class='text-center'>
		<script type='text/javascript' src='https://uprimp.com/bnr.php?section=General&pub=429868&format=728x90&ga=g'></script>
		<noscript><a class='justify-content-center' href='https://yllix.com/publishers/429868' target='_blank'><img src='//ylx-aff.advertica-cdn.com/pub/728x90.png' style='border:none;margin:0;padding:0;vertical-align:baseline;' alt='ylliX - Online Advertising Network' /></a></noscript>
	  </div>
	  
	<!-- Button trigger modal -->
	<button type='button' class='btn btn-primary  btn-lg mb-2 btn-block' data-toggle='modal' data-target='#exampleModal'>
		Watch it online!<span class='badge badge-danger'>NEW</span>
	</button>
	</div>
      
      <meta property='og:title'              content='".$result['title']." (".$result['release_yr'].") ".$g_title."'/>
      <meta property='og:description'        content='".$result['descri']."' />
      <meta property='og:image'              content='".$result['img']."' />
      <meta property='og:url'                content='https://tomdb.info/movie.php?id=$link_to_search' />
      <meta property='og:type'               content='article' />

      <hr>

      <div id='fb-root'></div>
      <script async defer crossorigin='anonymous' src='https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0'></script>
      <script async defer crossorigin='anonymous' src='https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0'></script>
      <div class='fb-comments' data-href='https://tomdb.info/movie.php?id=$link_to_search' data-numposts='5' data-width=''></div>
    </div>


  </div>
  </div>
  

<!-- Modal -->
<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
	<div class='modal-dialog ' role='document'>
		<div class='modal-content '>
		  <div class='modal-header'>
			<h5 class='modal-title' id='exampleModalLabel'>".$result['title']." (".$result['release_yr'].") ".$g_title."</h5>
			<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
			  <span aria-hidden='true'>&times;</span>
			</button>
		  </div>
		  <div class='modal-body'>
			<div class='embed-responsive embed-responsive-16by9'>
				<iframe class='embed-responsive-item' src='".$result['watch']."' allowfullscreen></iframe>
			</div>
		  </div>
		  <div class='modal-footer'>
			<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
			<button type='button' class='btn btn-primary' onclick=\"window.location.href = '".$result['download_link']."';\">Download</button>
		  </div>
		</div>
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
  }(document, 'script', 'facebook-jssdk'));
  </script>
<?php include ("footer.php");?>
