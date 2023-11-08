<?php

	$hostname = "127.0.0.1";
	$database = "test-wp";
	$username = "root";
	$password = "";

 
	 

	$kon = mysqli_connect($hostname, $username, $password, $database);
	mysqli_set_charset($kon, 'utf8mb4');
	// script cek koneksi
	if (!$kon) {
	    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
	} 	 

?>