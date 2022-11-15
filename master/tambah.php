<!doctype html>
<html>

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
                                        <li><a href="persyaratan.php">Info</a></li>
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
        <div class="container" style="margin-top: -76px;padding-left: 100px;">
            <div align="center" >
                <h3 style="color: #009DFF;">Tambah Data</h3>
            </div>
                <form action="tambah-aksi.php" method="post" enctype="multipart/form-data" style="margin-top: 20px;">
                <div class="row">
                    <div class="form-group">
                    <label>Nama faskes</label>
                    <input type="text" class="form-control" name="nama" placeholder="masukkan nama faskes">
                    </div>
                </div>
                <div class="row">


                    <div class="form-group" style="margin-right: 10px;">
                    <label>Telp Faskes</label>
                    <input type="text" class="form-control" name="telp"  placeholder="masukkan telp faskes">
                    </div>


                    <div class="form-group" style="margin-right: 10px;">
                    <label>Alamat Faskes</label>
                    <input type="text" class="form-control" name="alamat"  placeholder="masukkan alamat faskes">
                    </div>

                    <div class="form-group ">
                        <label style="margin-bottom: -10px;">Kecamatan</label>
                    <div class="input-group-icon mt-10" >
                                <div class="form-select" id="default-select" style="background-color: white">
                                <select style="height: 50px;overflow: scroll;" name="kecamatan">
                                    <option value="Boyolali">Kecamatan</option>
                                    <option value="Boyolali">Boyolali</option>
                                    <option value="Musuk">Musuk</option>
                                    <option value="Taman Sari">Taman Sari</option>
                                    <option value="Ampel">Ampel</option>
                                    <option value="Gladaksari">Gladaksari</option>
                                    <option value="Cepogo">Cepogo</option>
                                    <option value="Selo">Selo</option>
                                    <option value="Mojosongo">Mojosongo</option>
                                    <option value="Teras">Teras</option>
                                    <option value="Banyudono">Banyudono</option>
                                    <option value="Sawit">Sawit</option>
                                    <option value="Sambi">Sambi</option>
                                    <option value="Simo">Simo</option>
                                    <option value="Klego">Klego</option>
                                    <option value="Nogosari">Nogosari</option>
                                    <option value="Andong">Andong</option>
                                    <option value="Ngemplak">Ngemplak</option>
                                    <option value="Wonosegoro">Karanggede</option>
                                    <option value="Wonosamodro">Wonosamodro</option>
                                    <option value="Kemusu">Kemusu</option>
                                    <option value="Juwangi">Juwangi</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                 
                    
               
                 
                    
                </div>
                <div class="row">
                 
                    <div class="form-group" style="margin-right: 10px;">
                    <label>Latitude</label>
                    <input type="text" class="form-control" name="lat"  placeholder="masukkan Latitude faskes">
                    </div>
                
                 
                    <div class="form-group">
                    <label>Longitude</label>
                    <input type="text" class="form-control" name="lng"  placeholder="masukkan Longitude faskes">
                    </div>
                </div>
                <div class="row">
                    <label>Foto faskes</label>
                </div>
                <div class="row">
                    
                  <div class="form-group">
                    <input type="file" name="file" id="file" />
                  </div>
              </div>
                 <div class="row" style="margin-bottom: -20px;">
                 
                    <div class="form-group" style="margin-right: 10px;">
                    <label><h3>Jam Buka</h3></label>
                    </div>
                </div>
                 <div class="row">
                 
                    
                    <div class="form-group" style="margin-right: 10px;">
                    <label>Senin</label>
                    <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                        24 Jam
                       </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Pagi dan Sore
                       </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                        Custom
                       </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
                        Libur
                       </label>
                    </div>
                    <div id="option1" class="desc">24 Jam</div>
                    <div id="option2" class="desc">
                    Pagi <input type="time" name="11"> - <input type="time" name="12"><br>
                    Sore <input type="time" name="13"> - <input type="time" id="appt" name="14">
                    </div>
                    <div id="option3" class="desc">
                    Dari <input type="time" id="appt" name="15"> - <input type="time" id="appt" name="16">
                    </div>
                    <div id="option4" class="desc">Libur</div>
                    </div>




                    <div class="form-group" style="margin-right: 10px;">
                    <label>Selasa</label>
                    <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios1" id="optionsRadios1" value="option11">
                        24 Jam
                       </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios1" id="optionsRadios2" value="option12">
                        Pagi dan Sore
                       </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios1" id="optionsRadios3" value="option13">
                        Custom
                       </label>
                    </div>
                     <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios1" id="optionsRadios4" value="option14">
                        Libur
                       </label>
                    </div>
                    <div id="option11" class="desc">24 Jam</div>
                    <div id="option12" class="desc">
                    Pagi <input type="time" name="21"> sampai <input type="time" name="22"><br>
                    Sore <input type="time" name="23"> sampai <input type="time" id="appt" name="24">
                    </div>
                    <div id="option13" class="desc">
                    Dari <input type="time" id="appt" name="25"> sampai <input type="time" id="appt" name="26">
                    </div>
                    <div id="option14" class="desc">Libur</div>
                    </div>




                    <div class="form-group" style="margin-right: 10px;">
                    <label>Rabu</label>
                    <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios2" id="optionsRadios1" value="option21">
                        24 Jam
                       </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios2" id="optionsRadios2" value="option22">
                        Pagi dan Sore
                       </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios2" id="optionsRadios3" value="option23">
                        Custom
                       </label>
                    </div>
                     <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios2" id="optionsRadios4" value="option24">
                        Libur
                       </label>
                    </div>
                    <div id="option21" class="desc">24 Jam</div>
                    <div id="option22" class="desc">
                    Pagi <input type="time" name="31"> sampai <input type="time" name="32"><br>
                    Sore <input type="time" name="33"> sampai <input type="time" id="appt" name="34">
                    </div>
                    <div id="option23" class="desc">
                    Dari <input type="time" id="appt" name="35"> sampai <input type="time" id="appt" name="36">
                    </div>
                    <div id="option24" class="desc">Libur</div>
                    </div>
                    



                    <div class="form-group" style="margin-right: 10px;">
                    <label>Kamis</label>
                    <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios3" id="optionsRadios1" value="option31">
                        24 Jam
                       </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios3" id="optionsRadios2" value="option32">
                        Pagi dan Sore
                       </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios3" id="optionsRadios3" value="option33">
                        Custom
                       </label>
                    </div>
                     <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios3" id="optionsRadios4" value="option34">
                        Libur
                       </label>
                    </div>
                    <div id="option31" class="desc">24 Jam</div>
                    <div id="option32" class="desc">
                    Pagi <input type="time" name="41"> sampai <input type="time" name="42"><br>
                    Sore <input type="time" name="43"> sampai <input type="time" id="appt" name="44">
                    </div>
                    <div id="option33" class="desc">
                    Dari <input type="time" id="appt" name="45"> sampai <input type="time" id="appt" name="46">
                    </div>
                    <div id="option34" class="desc">Libur</div>
                    </div>


                    <div class="form-group" style="margin-right: 10px;">
                    <label>Jumat</label>
                    <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios4" id="optionsRadios1" value="option41">
                        24 Jam
                       </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios4" id="optionsRadios2" value="option42">
                        Pagi dan Sore
                       </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios4" id="optionsRadios3" value="option43">
                        Custom
                       </label>
                    </div>
                     <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios4" id="optionsRadios4" value="option44">
                        Libur
                       </label>
                    </div>
                    <div id="option41" class="desc">24 Jam</div>
                    <div id="option42" class="desc">
                    Pagi <input type="time" name="51"> sampai <input type="time" name="52"><br>
                    Sore <input type="time" name="53"> sampai <input type="time" id="appt" name="54">
                    </div>
                    <div id="option43" class="desc">
                    Dari <input type="time" id="appt" name="55"> sampai <input type="time" id="appt" name="56">
                    </div>
                    <div id="option44" class="desc">Libur</div>
                    </div>

                    <div class="form-group" style="margin-right: 10px;">
                    <label>Sabtu</label>
                    <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios5" id="optionsRadios1" value="option51">
                        24 Jam
                       </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios5" id="optionsRadios2" value="option52">
                        Pagi dan Sore
                       </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios5" id="optionsRadios3" value="option53">
                        Custom
                       </label>
                    </div>
                     <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios5" id="optionsRadios4" value="option54">
                        Libur
                       </label>
                    </div>
                    <div id="option51" class="desc">24 Jam</div>
                    <div id="option52" class="desc">
                    Pagi <input type="time" name="61"> sampai <input type="time" name="62"><br>
                    Sore <input type="time" name="63"> sampai <input type="time" id="appt" name="64">
                    </div>
                    <div id="option53" class="desc">
                    Dari <input type="time" id="appt" name="65"> sampai <input type="time" id="appt" name="66">
                    </div>
                    <div id="option54" class="desc">Libur</div>
                    </div>


                    <div class="form-group" style="margin-right: 10px;">
                    <label>Minggu</label>
                    <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios6" id="optionsRadios1" value="option61">
                        24 Jam
                       </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios6" id="optionsRadios2" value="option62">
                        Pagi dan Sore
                       </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios6" id="optionsRadios3" value="option63">
                        Custom
                       </label>
                    </div>
                     <div class="radio">
                        <label>
                        <input type="radio" name="optionsRadios6" id="optionsRadios4" value="option64">
                        Libur
                       </label>
                    </div>
                    <div id="option61" class="desc">24 Jam</div>
                    <div id="option62" class="desc">
                    Pagi <input type="time" name="71"> sampai <input type="time" name="72"><br>
                    Sore <input type="time" name="73"> sampai <input type="time" id="appt" name="74">
                    </div>
                    <div id="option63" class="desc">
                    Dari <input type="time" id="appt" name="75"> sampai <input type="time" id="appt" name="76">
                    </div>
                    <div id="option64" class="desc">Libur</div>
                    </div>



                 
                </div>
                <div align="center">
                    <input type="submit" name="upload" value="Upload" class="boxed-btn3" />
                </div>
                </form>
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
    <script src="j/jquery.1.8.3.min.js"></script>
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
    $("div.desc").hide();
    $("input[name$='optionsRadios']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#" + test).show();
    });
     $("input[name$='optionsRadios1']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#" + test).show();
    });
      $("input[name$='optionsRadios2']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#" + test).show();
    });
       $("input[name$='optionsRadios3']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#" + test).show();
    });
        $("input[name$='optionsRadios4']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#" + test).show();
    });
         $("input[name$='optionsRadios5']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#" + test).show();
    });
          $("input[name$='optionsRadios6']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#" + test).show();
    });

    $('.js-example-basic-multiple').select2();
});
    </script>
</body>

</html>