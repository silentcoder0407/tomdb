<?php
error_reporting (E_ALL ^ E_NOTICE);
ob_start(); 
include("connections.php");
include("global_variables.php");
include("headers.php");

$username = $password = "";
$username = $_POST['username'];
$password = hash('sha256', $_POST['password']);

if(isset($_POST['signin'])){
	$query = mysqli_query($conn,"SELECT * FROM tblusers WHERE username = '$username' AND password = '$password' ");
	$check = mysqli_fetch_array($query);
		if(isset($check)){
			session_start();
			$_SESSION['s_username'] = $username;
			$_SESSION['s_password'] = $password;
			header("location: index.php");
		}else{
			echo "<script>alert('Login failed: Invalid username or password.')</script>";
		}
}


echo "<title>Sign in".$g_title."</title>"
?>
<body class="text-center">
	<div class="bg-secondary container rounded">
		<form action="login.php" method="post" class="form-signin">
			<img class="mb-4" src="img/logo.png" alt="" width="72" height="72">
			<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
			<label for="inputEmail" class="sr-only">Email address</label>
			<input type="username" name="username" id="inputEmail" class="form-control" placeholder="Email address" required autofocus><br>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
			<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Remember me
			</label>
			</div>
			<button name="signin" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			<p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
		</form>
	</div>
</body>



