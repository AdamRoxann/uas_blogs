<?php 

	$engi = "mysql";
	$host = "localhost";
	$dbse = "blogs_01";
	$user = "root";
	$pass = "";

	$koneksi = new PDO($engi.':dbname='.$dbse.";host=".$host,$user,$pass)
 ?>