<?php
include("connections.php");

session_start();

//unset session variables
$_SESSION = array();

session_destroy();


exit(header("location: login.php"));
?>