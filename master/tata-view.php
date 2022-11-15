<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Docmed</title>
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

  <script type="text/javascript" src="j/jquery.1.8.3.min.js"></script>
  <script type="text/javascript" src="j/bootstrap.js"></script>
  <script type="text/javascript" src="j/jquery-scrolltofixed.js"></script>
  <script type="text/javascript" src="j/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="j/jquery.isotope.js"></script>
  <script type="text/javascript" src="j/wow.js"></script>
  <script type="text/javascript" src="j/classie.js"></script>
  <script type="text/javascript" src="j/magnific-popup.js"></script>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
<script> 
    $(function(){
      $("#rute").load("rute.php"); 
    });
    </script> 
<?php 
  include "koneksi.php";
  session_start();

  $query_mysql = mysqli_query($connect,"SELECT * FROM tata_cara")or die(mysql_error());
  $nomor = 1;
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
    
    <hr></hr>
     <div class="container">
            <div class="border_bottom">
                    <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
                                    <div class="row align-items-center">
                                            <div class="col-xl-6 col-md-6">
                                                <div class="business_info">
                                                   <h3>Tata Cara</h3>
                                                    <p><ul>
                                                    <?php 
                                                     while($data = mysqli_fetch_array($query_mysql)){ 
                                                    ?>
                                                    <li> <i class="flaticon-right"></i> <?php echo $data['tata_cara'] ?>.</li>
                                                   <?php }?>
                                                   </p></ul>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6" align="right">
                                                <div class="business_thumb" >
                                                        <img style="width: 100%;" src="img/about/rujukan bpjs.jpg" alt="">
                                                    
                                                </div>
                                            </div>
                                        </div>
                            </div>
                          </div>
            </div>
        </div>

    <!-- business_expert_area_end  -->
    <!-- offers_area_end -->

   
<!-- footer start -->
    <footer class="footer" style="margin-top: 100px;">
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
                <form action="login-aksi.php" method="post">
                    <div class="row">
                       <div class="col-xl-12">
                            <input type="text" name="username" placeholder="Username">
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
    <script type="text/javascript" src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script type="text/javascript" src="js/vendor/jquery.1.8.3.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
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

    <script type="text/javascript" src="js/main.js"></script>
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
       $("#rute").load("rute.php"); 
    $('.js-example-basic-multiple').select2();
});
    </script>
</body>

</html>