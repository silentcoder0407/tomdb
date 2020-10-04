<?php
include("connections.php");

global $g_title;
global $g_gtitle;
global $g_tagline;
global $g_logo;
global $g_date_time;
global $results_per_page;
global $g_table;
global $g_earn;


$g_gtitle = "TOMDB";
$g_title = " | ".$g_gtitle;
$g_tagline = "Watch and Download FREE Movies!";
$g_logo = "img/logo.png";
$g_date_time = date("Y-m-d h:i:s");
$results_per_page = 10;
$g_table = "tbl_movie";
?>
