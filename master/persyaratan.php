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
if(!empty($_SESSION['username'])) {
    
}else{
header("location:index.php");

}
     include "koneksi.php";

    $query_mysql =  mysqli_query($connect,"SELECT * FROM persyaratan");
    $count = 1;

    ?>
</head>

<body>
   

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
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
                                        <li><a class="active" href="admin.php">Data Faskes</a></li>
                                        <li><a href="#">Info</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a href="home.php">Logout</a>
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
        <h3 align="center">Persyaratan</h3>
            <div align="right"><a class="popup-with-form btn btn-success" href="#test-form" style="margin-right: 100px;margin-bottom: 10px;width: 150px;">tambah</a></div>
        <div class="container" style="height: 300px;overflow-y: auto;">
            
             <table class="table table-striped">
                 
                <thead>
                  <tr>
                    <th>No</th>
                    <th>persyaratan</th>
                    <th colspan="2" align="center" style="text-align:center;">aksi</th>
                </tr>
                </thead>
                   <tbody>
                    <?php 
                while($data = mysqli_fetch_array($query_mysql)){
                ?>
                    <td><?php echo $count?></td>
                    <td><?php echo $data['persyaratan']?></td>
                    
                    <td align="center" style="text-align:center"><a class="btn btn-primary" href="persyaratan-edit.php?id=<?php echo $data['id_persyaratan']; ?>">edit</a></td>
                    <td align="center" style="text-align:center"><a class="btn btn-danger" href="persyaratan-hapus.php?id=<?php echo $data['id_persyaratan']; ?>">delete</a></td>
                </tr>
                <?php
                $count=$count+1;
                }
                ?>
                </tbody>
              </table>
        </div>
        <h3 align="center" style="margin-top: 13px;">Tata Cara</h3>
        <div align="right"><a class="popup-with-form btn btn-success" href="#tambah" style="margin-right: 110px;margin-bottom: 10px;width: 150px;">tambah</a></div>
        <div class="container" style="height: 300px;overflow-y: auto;margin-top: 20px;">
             <table class="table table-striped">
                 
                <thead>
                  <tr>
                    <th>No</th>
                    <th>tata cara</th>
                    <th colspan="2" align="center" style="text-align:center">aksi</th>
                </tr>
                </thead>
                   <tbody>
                    <?php 
                     $querys_mysql =  mysqli_query($connect,"SELECT * FROM tata_cara");
                $count = 1;
                while($datas = mysqli_fetch_array($querys_mysql)){
                ?>
                    <td><?php echo $count?></td>
                    <td><?php echo $datas['tata_cara']?></td>
                    
                    <td align="center" style="text-align:center"><a class="btn btn-primary" href="tata-edit.php?id=<?php echo $datas['id_tata_cara']; ?>">edit</a></td>
                    <td align="center" style="text-align:center"><a class="btn btn-danger" href="tata-hapus.php?id=<?php echo $datas['id_tata_cara']; ?>">delete</a></td>
                </tr>
                <?php
                $count=$count+1;
                }
                ?>
                </tbody>
              </table>
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
    <form id="test-form" action="persyaratan-aksi.php" method="post" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>Tambah Persyaratan</h3>
                <form action="Login-admin.php" method="post">
                    <div class="row">
                       
                        <div class="col-xl-12">
                            <input type="text"  name="persyaratan" placeholder="Persyaratan">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed-btn3">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <!-- form itself end -->

    <!-- form itself end-->
    <form align="center" id="tambah" action="tata-aksi.php" method="post" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>Tambah Tata Cara</h3>
                <form action="Login-admin.php" method="post">
                    <div class="row">
                        <div class="col-xl-12">
                            <input type="text"  name="tata" placeholder="Tata Cara">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed-btn3">Upload</button>
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