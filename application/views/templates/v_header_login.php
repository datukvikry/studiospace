<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Studiospace | Studio Photo Portal</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keyword" content="">
        <meta name="viewport" content="">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url(); ?>assets/favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontello.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">   

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.transitions.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/responsive.css">


        <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

      
    </head>

    <script src="https://maps.googleapis.com/maps/api/js?signed_in=true&libraries=places&language=en&key=AIzaSyBP3fEyxnCcyJXddZ9dCXuJsAYWf9iSYUQ"></script>
    <script type="text/javascript">
      google.maps.event.addDomListener(window,'load',intilize);
      function intilize(){

        var places, address, latlng;

        var autocomplete = new google.maps.places.Autocomplete(document.getElementById('txtautocomplete'));
        google.maps.event.addListener(autocomplete, 'place_changed', function(){
            places  = autocomplete.getPlace();
            
            lokasi = places.formatted_address;
            lat     = places.geometry.location.lat();
            lng     = places.geometry.location.lng();

            document.getElementById('lokasi').value = lokasi;
            document.getElementById('lat').value = lat;
            document.getElementById('lng').value = lng;

            latlng  = {lat: places.geometry.location.lat(), lng : places.geometry.location.lng()};

            var mapProp = {
              center:new google.maps.LatLng(latlng),
              zoom:15,
              mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("gmap"), mapProp);
            
            var marker = new google.maps.Marker({
              position: latlng,
              map: map
            });



        });

      };
    </script>


    <body>

    <!-- CSS -->   

        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              

              <ul class="main-nav nav navbar-nav navbar-right">
                <li class="wow fadeInDown" data-wow-delay="0s"><a  href="<?php echo base_url(); ?>">Home</a></li>          
                 <li class="wow fadeInDown" data-wow-delay="0.2s">
                  <a type="button" data-toggle="dropdown"><?php echo $email ?>
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url(); ?>studio">Dashboard</a></li>
                    <li><a href="<?php echo base_url(); ?>login/logout">Logout</a></li>
                  </ul>
                
                </li>



              </ul>

             
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <br><br>
    