<?php
	

	include "connection.php";

	$id_kontak = isset($_POST['id_kontak']) ? $_POST['id_kontak']    : "";
	$nama  = isset($_POST['nama'])  ? $_POST['nama']    : "";
	$email = isset($_POST['email']) ? $_POST['email'] : "";
	$pesan = isset($_POST['pesan']) ? $_POST['pesan'] : "";


	$kontak_query = ' select * from  wp_form_kontak  a where a.id_kontak="'.$id_kontak.'" or a.email="'.$email.'" ';
	$kontak_query_execution = mysqli_query($kon , $kontak_query);
	$has_kontak = mysqli_num_rows($kontak_query_execution);


	if($has_kontak > 0 ){

	}else{



		$insert_kontak_query  = ' insert into wp_form_kontak (nama , email, pesan) values  ("'.$nama.'" , "'.$email.'" , "'.$pesan.'") ';
		$creation_kontak = mysqli_query($kon ,$insert_kontak_query);

		if($creation_kontak){

			include "sending_email.php";

		}


	}




?>