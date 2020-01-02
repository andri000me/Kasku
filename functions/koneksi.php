<?php 

$dbhost = "localhost";
$dbname = "dbkas";
$dbuser = "root";
$dbpass = "";

$koneksi = new PDO("mysql:host=".$dbhost.";
				    dbname=".$dbname."",$dbuser,$dbpass);

 ?>