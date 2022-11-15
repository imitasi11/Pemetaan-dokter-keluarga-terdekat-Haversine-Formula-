
<?php 
include 'koneksi.php';
include "include/SimpleImage.php";

$senins="";$senin1="";$senin2="";$senin3="";$senin4="";$senin5="";$senin6="";
$selasas="";$selasa1="";$selasa2="";$selasa3="";$selasa4="";$selasa5="";$selasa6="";
$rabus="";$rabu1="";$rabu2="";$rabu3="";$rabu4="";$rabu5="";$rabu6="";
$kamiss="";$kamis1="";$kamis2="";$kamis3="";$kamis4="";$kamis5="";$kamis6="";
$jumats="";$jumat1="";$jumat2="";$jumat3="";$jumat4="";$jumat5="";$jumat6="";
$sabtus="";$sabtu1="";$sabtu2="";$sabtu3="";$sabtu4="";$sabtu5="";$sabtu6="";
$minggus="";$minggu1="";$minggu2="";$minggu3="";$minggu4="";$minggu5="";$minggu6="";
$nama = $_POST['nama'];
$kecamatan = $_POST['kecamatan'];
$alamat = $_POST['alamat'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$telp = $_POST['telp'];
$senin = $_POST['optionsRadios'];
$selasa = $_POST['optionsRadios1'];
$rabu = $_POST['optionsRadios2'];
$kamis = $_POST['optionsRadios3'];
$jumat = $_POST['optionsRadios4'];
$sabtu = $_POST['optionsRadios5'];
$minggu = $_POST['optionsRadios6'];
if($senin=="option2"){
	$senin1 = $_POST['11'];
	$senin2 = $_POST['12'];
	$senin3 = $_POST['13'];
	$senin4 = $_POST['14'];
	$senins = 'Pagi '.$_POST['11'].'-'.$_POST['12'].' Sore '.$_POST['13'].'-'.$_POST['14'];
}elseif ($senin=="option3") {
	$senin5 = $_POST['15'];
	$senin6 = $_POST['16'];
	$senins = $_POST['15'].'-'.$_POST['16'];
}elseif ($senin == "option4"){
	$senins = "Libur";
}else{
	$senins = "24 jam";
}
if($selasa=="option12"){
	$selasa1 = $_POST['21'];
	$selasa2 = $_POST['22'];
	$selasa3 = $_POST['23'];
	$selasa4 = $_POST['24'];
	$selasas = 'Pagi '.$_POST['21'].'-'.$_POST['22'].' Sore '.$_POST['23'].'-'.$_POST['24'];
}elseif ($selasa=="option13") {
	$selasa5 = $_POST['25'];
	$selasa6 = $_POST['26'];
	$selasas = $_POST['25'].'-'.$_POST['26'];
}elseif ($selasa == "option14"){
	$selasas = "Libur";
}else{
	$selasas = "24 jam";
}
if($rabu=="option22"){
	$rabu1 = $_POST['31'];
	$rabu2 = $_POST['32'];
	$rabu3 = $_POST['33'];
	$rabu4 = $_POST['34'];
	$rabus = 'Pagi '.$_POST['31'].'-'.$_POST['32'].' Sore '.$_POST['33'].'-'.$_POST['34'];
}elseif ($rabu=="option23") {
	$rabu5 = $_POST['35'];
	$rabu6 = $_POST['36'];
	$rabus = $_POST['35'].'-'.$_POST['36'];
}elseif ($rabu == "option24"){
	$rabus = "Libur";
}else{
	$rabus = "24 jam";
}
if($kamis=="option32"){
	$kamis1 = $_POST['41'];
	$kamis2 = $_POST['42'];
	$kamis3 = $_POST['43'];
	$kamis4 = $_POST['44'];
	$kamiss = 'Pagi '.$_POST['41'].'-'.$_POST['42'].' Sore '.$_POST['43'].'-'.$_POST['44'];
}elseif ($kamis=="option33") {
	$kamis5 = $_POST['45'];
	$kamis6 = $_POST['46'];
	$kamiss = $_POST['45'].'-'.$_POST['46'];
}elseif ($kamis == "option34"){
	$kamiss = "Libur";
}else{
	$kamiss = "24 jam";
}
if($jumat=="option42"){
	$jumat1 = $_POST['51'];
	$jumat2 = $_POST['52'];
	$jumat3 = $_POST['53'];
	$jumat4 = $_POST['54'];
	$jumats = 'Pagi '.$_POST['51'].'-'.$_POST['52'].' Sore '.$_POST['53'].'-'.$_POST['54'];
}elseif ($jumat=="option43") {
	$jumat5 = $_POST['55'];
	$jumat6 = $_POST['56'];
	$jumats = $_POST['55'].'-'.$_POST['56'];
}elseif ($jumat == "option44"){
	$jumats = "Libur";
}else{
	$jumats = "24 jam";
}
if($sabtu=="option52"){
	$sabtu1 = $_POST['61'];
	$sabtu2 = $_POST['62'];
	$sabtu3 = $_POST['63'];
	$sabtu4 = $_POST['64'];
	$sabtus = 'Pagi '.$_POST['61'].'-'.$_POST['62'].' Sore '.$_POST['63'].'-'.$_POST['64'];
}elseif ($sabtu=="option53") {
	$sabtu5 = $_POST['65'];
	$sabtu6 = $_POST['66'];
	$sabtus = $_POST['65'].'-'.$_POST['66'];
}elseif ($sabtu == "option54"){
	$sabtus = "Libur";
}else{
	$sabtus = "24 jam";
}
if($minggu=="option62"){
	$minggu1 = $_POST['71'];
	$minggu2 = $_POST['72'];
	$minggu3 = $_POST['73'];
	$minggu4 = $_POST['74'];
	$minggus = 'Pagi '.$_POST['71'].'-'.$_POST['72'].' Sore '.$_POST['73'].'-'.$_POST['74'];
}elseif ($minggu=="option63") {
	$minggu5 = $_POST['75'];
	$minggu6 = $_POST['76'];
	$minggus = $_POST['75'].'-'.$_POST['76'];
}elseif ($minggu == "option64"){
	$minggus = "Libur";
}else{
	$minggus = "24 jam";
}

if($_POST['upload']){
	$ekstensi_diperbolehkan	= array('png','jpg');
	echo $_FILES['file']['name'];
	if(!empty($_FILES) && isset($_FILES['file'])){
    echo $_FILES['file']['name'];
}
	print_r($_FILES);
	$nama_file = $_FILES['file']['name'];
	$x = explode('.', $nama_file);
	$titik = '.';
	$ekstensi = strtolower(end($x));
	$ex = $titik.$ekstensi;
	$ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];	
		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		    if($ukuran < 2044070){		
			$query=mysqli_query($connect,"INSERT INTO tb_tempat VALUES(NULL,'$nama', '$ex','$lat','$lng','$alamat','$telp','$kecamatan')");
			
			if($query){

			$img = new SimpleImage($file_tmp);
           	$img->resize(300, 350);

			$img->save('upload/' .$nama.$titik.$ekstensi);  
			$query=mysqli_query($connect,"INSERT INTO jadwal VALUES(NULL,'$nama', '$senins','$selasas','$rabus','$kamiss','$jumats','$sabtus','$minggus')");
			
			if($query){

			header("Location: admin.php");
			}else{
				echo 'GAGAL MENGUPLOAD jadwal';
			}          
            
			}else{
				echo 'GAGAL MENGUPLOAD GAMBAR';
			}
		    }else{
			echo 'UKURAN FILE TERLALU BESAR';
		    }
	       }else{
		$query=mysqli_query($connect,"INSERT INTO tb_tempat VALUES(NULL,'$nama', 'Tidak ada','$lat','$lng','$alamat','$telp','$kecamatan')");
			
			if($query){
			$query=mysqli_query($connect,"INSERT INTO jadwal VALUES(NULL,'$nama', '$senins','$selasas','$rabus','$kamiss','$jumats','$sabtus','$minggus')");
			if($query){

			header("Location: admin.php");
			}else{
				echo 'GAGAL MENGUPLOAD jadwal';
			}          
			}else{
				echo 'GAGAL MENGUPLOAD DATA';
			}
		
	       }

    }

		
?>