<?php 
include 'koneksi.php';
$tata = $_POST['tata'];
	$query=mysqli_query($connect,"INSERT INTO tata_cara VALUES(NULL,'$tata')");
			
			if($query){
			header("Location: persyaratan.php");
		}
		?>