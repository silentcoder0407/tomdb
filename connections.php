<?php

// Create connection
$conn = new mysqli("localhost","id13360783_root","f3yX7Oouvw&^!tv_","id13360783_db_movie");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
error_reporting (E_ALL ^ E_NOTICE); //para no undefined error
?>
