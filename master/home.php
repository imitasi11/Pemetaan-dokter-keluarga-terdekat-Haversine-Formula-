<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Web dokter keluarga</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->


    <?php
    session_start();
    if(!empty($_SESSION['lat'])||isset($_SESSION['lat'])) {
    }else{
    header("location:index.php");
    }

        function getDistance($latitude1, $longitude1, $latitude2, $longitude2) {  
        $earth_radius = 6371;  
      
        $dLat = deg2rad($latitude2 - $latitude1);  
        $dLon = deg2rad($longitude2 - $longitude1);  
          
    $a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * sin($dLon/2) * sin($dLon/2);  
    $c = 2 * asin(sqrt($a));  
    $d = $earth_radius * $c;  
      
         return $d;  
        }  

    $lokasi1Lat = $_SESSION['lat']; //garis bujur lokasi 1
    $lokasi1Lon = $_SESSION['long']; //garis lintang lokasi 1

    include "koneksi.php";

    $query_mysql =  mysqli_query($connect,"SELECT * FROM tb_tempat")or die(mysql_error());
    
    $count = 0;

    while($data = mysqli_fetch_array($query_mysql)){
    
    $lokasi2Lat = $data['lat']; //garis bujur lokasi 2
    $lokasi2Lon = $data['lng']; //garis lintang lokasi 2
    $hasil = getDistance($lokasi1Lat,$lokasi1Lon, $lokasi2Lat, $lokasi2Lon);
    $tingkat = $data['kecamatan'];

//save ke array

    $bankdata[$count]=
    ["id" => $data['id_tempat'],
    "nama"=> $data['nama_tempat'],
    "alamat"=> $data['lokasi'],
    "lat"=> $data['lat'],
    "gambar"=> $data['gambar'],
    "long"=> $data['lng'],
    "hasil"=> $hasil,
    "tingkat"=> $tingkat];
    $count = $count+1;
    }

//array sort
function sorts($a, $b) {
    if ($a["hasil"]==$b["hasil"]) return 0;
  return ($a["hasil"]<$b["hasil"])?-1:1;
}


usort($bankdata, "sorts");




//ambil 5
    for($i=0;$i<6;$i++){
    

        $data1[$i][0]= $bankdata[$i]["id"];
        $data1[$i][1]= $bankdata[$i]["nama"];
        $data1[$i][2]= $bankdata[$i]["gambar"];
        $data1[$i][3]= $bankdata[$i]["alamat"];
        $data1[$i][4]= $bankdata[$i]["lat"];
        $data1[$i][5]= $bankdata[$i]["long"];
        $data1[$i][6]= number_format($bankdata[$i]["hasil"], 2);
    
    }
    ?>
</head>

<body>
   

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area" style="border-bottom: solid blue 3px;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                
                                    <div style="display: inline-block;margin-right: 5px;"><img src="img/logo.png" alt="Web Faskes"></div><div style="display: inline-block;"><h6> Dokter Keluarga</h6></div>
                                
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="home.php">Halaman Utama</a></li>
                                        <li><a href="daftar-faskes.php">Daftar Faskes</a></li>
                                        <li><a href="persyaratan-view.php">Persyaratan</a></li>
                                        <li><a href="tata-view.php">Tata Cara</a></li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a class="popup-with-form" href="#test-form">Login Admin</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block" style="margin-left: 400px;margin-top: 13px;">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a href="koordinat.php">Reset Koordinat</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- offers_area_start -->
    <div class="our_department_area">
        <div class="container" style="margin-top: -76px;">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-55">
                        <h3>Halaman Utama</h3>
                        <p>Rekomendasi dokter keluarga terdekat dari koordinat anda. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    foreach($data1 as $value){
                ?>
                <div class="col-xl-4 col-md-6 col-lg-4" style="height: 550px; ">
                    <div class="single_department" style="height: 540px; ">
                        <div class="department_thumb">
                            <?php 
                            if($value[2]=="Tidak ada"){
                                ?>
                            
                            <img src="upload/not found.jpg" alt="">
                            <?php 
                            }else{
                            ?>
                                <img style="height: 300px;" src="upload/<?php echo $value[1];?><?php echo $value[2];?>" alt="">
                            <?php }?>
                        </div>
                        <div class="department_content">
                            <h3><a href="profil.php?id=<?php echo $value[0]; ?>"><?php echo $value[1]; ?></a></h3>
                            <p><?php echo $value[3];?></p>
                            <p><?php echo $value[6];?> Km</p>
                            <a href="profil.php?id=<?php echo $value[0]; ?>" class="learn_more">Lebih Lanjut</a>
                        </div>
                    </div>
                </div>

                <?php 
                    }
                ?>
                
            </div>
        </div>
    </div>
    <!-- offers_area_end -->

   
<!-- footer start -->
    <footer class="footer">
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This web made by Fazjar Sekti Aji supported with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
<!-- footer end  -->
    <!-- link that opens popup -->

    <!-- form itself end-->
    <form id="test-form" action="login-aksi.php" method="post" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>Login Admin</h3>
                <form action="Login-admin.php" method="post">
                    <div class="row">
                       
                        <div class="col-xl-12">
                            <input type="text"  name="username" placeholder="Username">
                        </div>
                        <div class="col-xl-12">
                            <input type="Password" name="password" placeholder="Password">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed-btn3">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <!-- form itself end -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script>
</body>

</html>