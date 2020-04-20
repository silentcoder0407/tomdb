<!--<link rel="icon" href="favicon.ico" type="image/x-icon">-->
<!--<h1 style="text-align: center;"><span style="color: #0000ff;"><strong><a href="index.php"><img src="logo3.png"></a></strong></span></h1>-->
<?php
include ("global_variables.php");
//include ("connections.php");
?>

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="shortcut icon" type="image/png" href="<?php echo $g_logo;?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<a href="index.php" ><img class="home-logo" src="<?php echo $g_logo;?>"><label class="ldl-logo"><?php echo $g_gtitle;?></label></a><br>
	<small><i><div class="under_logo"><?php echo $g_tagline;?></div></i></small>
<br>

<div class="nav3">
	<div class="dropdown float:left" >

		<a href="index.php" class="dropbtn">Home</a>

	</div>


		<div class="dropdown">
		<button class="dropbtn">Category</button>
			<div class="dropdown-content">
				<a href="genre.php?genre=action">Action</a>
				<a href="genre.php?genre=horror">Horror</a>
				<a href="genre.php?genre=drama">Drama</a>
				<a href="genre.php?genre=scifi">Sci-Fi</a>
				<a href="genre.php?genre=adventure">Adventure</a>
				<a href="genre.php?genre=comedy">Comedy</a>
			</div>
		</div>

		<div class="dropdown">
			<a href="contactus.php" class="dropbtn">Contact Us</a>
		</div>

		<div class="dropdown">
			<a href="disclaimer.php" class="dropbtn">Disclaimer</a>
		</div>

			<div class="dropdown" style="float:right ">
				<form action="search.php" method="GET">
							<input type="text" class="inputtextsearch" name="movie_keyword" placeholder="Search <?php echo $g_gtitle;?>..." value="<?php echo $_POST['$movie_keyword'];?>">
							<input type="submit"  value="Search" class="search-btn">
					</form>
				</div>
</div>



<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c792e72a726ff2eea5a1cb3/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
