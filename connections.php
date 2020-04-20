<?php
error_reporting (E_ALL ^ E_NOTICE); //para no undefined error
// Create connection
$conn = new mysqli("localhost","root","1234","db_movie");
//$conn = new mysqli("localhost","id13211271_user_lorence","04072020Ldl!","id13211271_db_ldlexpress");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
