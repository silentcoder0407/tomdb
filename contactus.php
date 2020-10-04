<?php
include("nav.php");
include("global_variables.php");
include("headers.php");
echo "<title>Contact Us".$g_title."</title>
		
";
?>
	<div class='p-3'>
		<h1 align='left'>Contact Us</h1>
	</div>
<div class=' bg-dark text-white pt-3 pb-3'>
	<img class="mb-4" src="img/logo.png" alt="" width="72" height="72">	
	<div class="container bg-dark rounded pb-2 pt-2 ">
		<body class="text-center">
			<form class="form-signin" action="https://formspree.io/mvovpokv" method="POST">
				<h1 class="h3 mb-3 font-weight-normal">Comments / Suggestions / Reactions</h1>

				<div class="form-group">
					<input type="email" name="_replyto" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email" required autofocus>
					<small id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</small>
				</div>

				<div class="form-group">
				<textarea name="message" class="form-control" placeholder="Comments / Suggestions / Reactions" required></textarea>
				</div>
				<button class="btn btn-lg btn-warning btn-block" type="submit">Submit</button>
			</form>
		</body>
	</div>
</div>
<?php include("footer.php");?>
