<?php
include("connections.php");
include("nav.php");
include("global_variables.php");
include("headers.php");
echo "<title>Request".$g_title."</title>
		
";
?>
	<div class='container text-light bg-dark pb-3'>
		<h1 align='left'>Request</h1>
	</div>
<div class='container bg-secondary text-white pt-3 pb-3'>
	<img class="mb-4" src="img/logo.png" alt="" width="72" height="72">	
	<div class="container bg-dark rounded pb-2 pt-2 ">
		<body class="text-center">
			<form class="form-signin" action="https://formspree.io/mvovpokv" method="POST">
				<h1 class="h3 mb-3 font-weight-normal">Please enter movie details</h1>

				<div class="form-group">
				<input type="email" name="_replyto" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email" required autofocus>
				<small id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</small>
				</div>

				<div class="form-group">
				<textarea name="message" class="form-control" placeholder="Movie Details: Title, Year" required></textarea>
				</div>
				<button class="btn btn-lg btn-warning btn-block" type="submit">Send Request</button>
			</form>
		</body>
	</div>
</div>
<?php include ("footer.php");?>
