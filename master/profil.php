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


  $id = $_GET['id'];
    $_SESSION['id']=$id;
  $query_mysql = mysqli_query($connect,"SELECT * FROM tb_tempat WHERE id_tempat='$id'")or die(mysql_error());
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
    <?php 
     while($data = mysqli_fetch_array($query_mysql)){ 
    ?>
    <hr></hr>
     <div class="container">
            <div class="border_bottom">
                    <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
                                    <div class="row align-items-center">
                                            <div class="col-xl-6 col-md-6">
                                                <div class="business_info">
                                                   
                                                    <h3><?php echo $data['nama_tempat'] ?></h3>
                                                    <p><?php echo $data['lokasi'] ?>.</p>
                                                    <p><?php if(!empty($data['telp'])){
                                                      echo "Nomor Telp : ".$data['telp'];}?></p>
                                                      <hr>
                                                    <?php 
                                                    $nama=$data['nama_tempat'];
                                                    $querys_mysql = mysqli_query($connect,"SELECT * FROM jadwal WHERE nama_tempat='$nama'")or die(mysql_error());
                                                    while($jadwal = mysqli_fetch_array($querys_mysql)){ ?>
                                                    <div>
                                                    <p><h4> Jadwal Buka </h4>
                                                  <table>
                                                     <tr><td width="50px;">Senin</td><td> <?php echo $jadwal['Senin'] ?></td></tr>
                                                     <tr><td>Selasa</td><td> <?php echo $jadwal['Selasa'] ?></td></tr>
                                                     <tr><td>Rabu</td><td> <?php echo $jadwal['Rabu'] ?></td></tr>
                                                     <tr><td>Kamis </td><td><?php echo $jadwal['Kamis'] ?></td></tr>
                                                     <tr><td>Jumat </td><td><?php echo $jadwal['Jumat'] ?></td></tr>
                                                     <tr><td>Sabtu </td><td><?php echo $jadwal['Sabtu'] ?></td></tr>
                                                     <tr><td>Minggu </td><td><?php echo $jadwal['Minggu'] ?></td></tr>
                                                    </table>
                                                  </div>
                                                  <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6" align="center">
                                                <div class="business_thumb">
                                                    <?php 
                                                    if($data['gambar']=="Tidak ada"){
                                                        ?>
                            
                                                    <img style="width: 100%;" src="upload/not found.jpg" alt="">
                                                    <?php 
                                                    }else{
                                                    ?>
                                                        <img  style="width: 100%;" src="upload/<?php echo $data['nama_tempat'];?><?php echo $data['gambar'];?>" alt="">
                                                    <?php }?>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                          </div>
            </div>
        </div>
        <div class="testmonial_area">
        
            <div class="single-testmonial testmonial_bg_2 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                              <section class="main-section alabaster" style="min-height: 520px;">
    <div class="container wow fadeInUp delay-04s" align="center" style="margin-top: -80px" >
       <style>
      #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

      #right-panel select, #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 100%;
      }

      #right-panel i {
        font-size: 12px;
      }
      
      #map {
        height: 500px;
        float: left;
        width: 63%;
      }
      #right-panel {
        float: right;
        width: 34%;
        height: 500px;
        overflow: auto;
      }
      .panel {
        height: 500px;
        overflow: auto;
      }
    </style>
    
<div class="page-header">
</div>
<div class="clearfix" style="background: white;">
    <div id="map"></div>
    <div id="right-panel">
      <p>Total Jarak: <span id="total"></span><br />
    </div>
</div>
<p style="color: white;" class="help-block">Geser marker atau garis untuk mengubah rute.</p>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCjviEPPRZvBG-PZnoFQ2JhVyTIlfXS4k"></script>
<script>
        var default_lat = -7.347022; 
        var default_lng = 110.493244;
        var default_zoom = 14;
    </script>
<script>


$(function(){
    initMap();
})

var markerArray = [];

  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 4,
      center: {lat: default_lat, lng: default_lng}  // Australia.
    });

    var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer({
      draggable: true,
      map: map,
      panel: document.getElementById('right-panel')
    });
    
    var stepDisplay = new google.maps.InfoWindow;
    
    
    directionsDisplay.addListener('directions_changed', function() {
        //calculateAndDisplayRoute()
      computeTotalDistance(directionsDisplay.getDirections());
          for (var i = 0; i < markerArray.length; i++) {
            markerArray[i].setMap(null);
        }
        
        showSteps(directionsDisplay.getDirections(), markerArray, stepDisplay, map);
      //calculateAndDisplayRoute(pos, {lat: <?php echo $data['lat']?>, lng: <?php echo $data['lng']?>}, directionsService, directionsDisplay, stepDisplay, map);
    });
    
    // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
      
         var coords = new google.maps.LatLng(<?php echo $_SESSION['lat'];?>,<?php echo $_SESSION['long'];?>);

            //infoWindow.setPosition(pos);
            //infoWindow.setContent('Location found.');
            //infoWindow.open(map);
            //map.setCenter(pos);
            calculateAndDisplayRoute(coords, {lat: <?php echo $data['lat']?>, lng: <?php echo $data['lng']?>}, directionsService, directionsDisplay, stepDisplay, map);
          }, function() {
                calculateAndDisplayRoute(getCurLocation(), {lat: <?php echo $data['lat']?>, lng: <?php echo $data['lng']?>}, directionsService, directionsDisplay, stepDisplay, map);
          });
        } else {
          // Browser doesn't support Geolocation
          calculateAndDisplayRoute(getCurLocation(), {lat: <?php echo $data['lat']?>, lng: <?php echo $data['lng']?>}, directionsService, directionsDisplay, stepDisplay, map);
        }            
  }

  function calculateAndDisplayRoute(origin, destination, directionsService, directionsDisplay, stepDisplay, map) {
    
    for (var i = 0; i < markerArray.length; i++) {
        markerArray[i].setMap(null);
    }
        
    directionsService.route({
      origin: origin,
      destination: destination,
      //waypoints: [{location: 'Adelaide, SA'}, {location: 'Broken Hill, NSW'}],
      travelMode: 'DRIVING',
      avoidTolls: true
    }, function(response, status) {
      if (status === 'OK') {
        //console.log(response);
        directionsDisplay.setDirections(response);
        showSteps(response, markerArray, stepDisplay, map);
      } else {
        alert('Could not display directions due to: ' + status);
      }
    });
  }
  
  function showSteps(directionResult, markerArray, stepDisplay, map) {
    // For each step, place a marker, and add the text to the marker's infowindow.
    // Also attach the marker to an array so we can keep track of it and remove it
    // when calculating new routes.
    var myRoute = directionResult.routes[0].legs[0];
    
    //console.log(directionResult.routes[0].legs[0]);
    
    for (var i = 0; i < myRoute.steps.length; i++) {
      var marker = markerArray[i] = markerArray[i] || new google.maps.Marker();
      //marker.setMap(map);
      //marker.setPosition(myRoute.steps[i].start_location);
      //marker.setIcon('http://maps.google.com/mapfiles/ms/icons/blue-dot.png');
      attachInstructionText(
          stepDisplay, marker, myRoute.steps[i].instructions, map);
    }
  }
  
  function attachInstructionText(stepDisplay, marker, text, map) {
        google.maps.event.addListener(marker, 'click', function() {
          // Open an info window when the marker is clicked on, containing the text
          // of the step.
          stepDisplay.setContent(text);
          stepDisplay.open(map, marker);
        });
      }

  function computeTotalDistance(result) {
    var total = 0;
    var myroute = result.routes[0];
    var terdekat = 0;
    
    terdekat = myroute.legs[0].steps[0].distance.value;
    
    //console.log(result);
    for (var i = 0; i < myroute.legs.length; i++) {
      total += myroute.legs[i].distance.value;      
    }
    total = total / 1000;
    document.getElementById('total').innerHTML = total + ' km';
    document.getElementById('terdekat').innerHTML = (terdekat / 1000) + ' km';// + terdekat + ' m';
  }
</script>
 
      
    </div>
    </div>
    </section>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    
         <?php } ?>
    <!-- business_expert_area_end  -->
    <!-- offers_area_end -->

   
<!-- footer start -->
    <footer class="footer" >
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
    <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>Login Admin</h3>
                <form action="Login-admin.php" method="post">
                    <div class="row">
                       
                        <div class="col-xl-12">
                            <input type="text"  placeholder="Username">
                        </div>
                        <div class="col-xl-12">
                            <input type="Password"  placeholder="Password">
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