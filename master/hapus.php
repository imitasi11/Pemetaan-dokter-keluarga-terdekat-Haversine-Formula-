<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($connect,"DELETE FROM tb_tempat WHERE nama_tempat='$id'")or die(mysql_error());
mysqli_query($connect,"DELETE FROM jadwal WHERE nama_tempat='$id'")or die(mysql_error());
header("location:admin.php");
?>