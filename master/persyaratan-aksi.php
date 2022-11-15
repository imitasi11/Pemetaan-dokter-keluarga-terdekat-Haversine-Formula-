<?php 
include 'koneksi.php';
$persyaratan = $_POST['persyaratan'];
	$query=mysqli_query($connect,"INSERT INTO persyaratan VALUES(NULL,'$persyaratan')");
			
			if($query){
			header("Location: persyaratan.php");
		}
		?>