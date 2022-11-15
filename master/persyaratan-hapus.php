<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($connect,"DELETE FROM persyaratan WHERE id_persyaratan='$id'")or die(mysql_error());
header("location:persyaratan.php");
?>