<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($connect,"DELETE FROM tata_cara WHERE id_tata_cara='$id'")or die(mysql_error);
header("location:persyaratan.php");
?>