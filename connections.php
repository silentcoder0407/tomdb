<?php

// Create connection
$conn = new mysqli("localhost","root","1234","id13360783_db_movie");
//$conn = new mysqli("localhost","id13360783_root","f3yX7Oouvw&^!tv_","id13360783_db_movie");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
