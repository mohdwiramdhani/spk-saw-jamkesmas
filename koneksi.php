<?php
//buat variabel untuk masing-masing point, server-user-database-password
	$servername = "localhost";
	$username = "root"; 
	$password = "";
	$dbname = "spk-saw-jamkesmas"; 

//buat koneksi ke database 
	$conn = new mysqli($servername, $username, $password, $dbname);

//cek koneksi
	if ($conn->connect_error){
		die("koneksi gagal :".$conn->connect_error);
	}

	