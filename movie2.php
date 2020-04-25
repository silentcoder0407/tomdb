<?php
include ("connections.php");
include ("nav.php");
include ("global_variables.php");

$link_to_search = $_REQUEST['id'];

$sql = mysqli_query($conn,"SELECT * FROM ".$g_table." WHERE url = '$link_to_search' LIMIT 1");
$count = mysqli_num_rows($sql);

if($count > 0){
  while($result = mysqli_fetch_assoc($sql)){
    echo "
      <title>".$result['title']." (".$result['release_yr'].") ".$g_title."</title>
      <div class='form'>
        <div class='trailer'>
        <object width='640' height='480' data='".$result['trailer']."' type='application/x-shockwave-flash'><param name='src' value='".$result['trailer']."' /></object>

        </div>

        <div class='info'>
        <img height='200' src='".$result['img']."'><br><br>

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

        <h2>".$result['title']."</h2>
        <small>Released: ".$result['release_yr']." | Genre: ".ucfirst($result['genre'])."  | Rating: ".$result['rating']."</small><br>
        <small>Cast: ".$result['casts']."</small><br>
        <p class='descri'>".$result['descri']."</p><br>
        <i><small>".$result['notes']."</small></i><br>
        <button class='search-btn' onclick=\"window.location.href = '".$result['download_link']."';\">Download</button>
        </div>
        <div id='fb-root'></div>
        <script async defer crossorigin='anonymous' src='https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0'></script>
        <script async defer crossorigin='anonymous' src='https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0'></script>
        <div class='fb-comments' data-href='https://tomdb.000webhostapp.com/movie.php?id=$link_to_search' data-numposts='5' data-width=''></div>

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

  <div class="grid-container">
  <div class="trailer"></div>
  <div class="img"></div>
  <div class="basic-info"></div>
  <div class="plot"></div>
  <div class="comments"></div>
  <div class="ads"></div>
</div>
<?php include ("footer.php");?>
