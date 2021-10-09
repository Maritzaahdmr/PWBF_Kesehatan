<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  
		<meta name="description" content="My Site description" />
		<meta name="author" content="Me" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Posyandu | ASIPS</title>
  {{-- <link rel="" href="" type=""/>
  <link rel="" href="" type=""/> --}}

  <!-- css -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link href="assets/medicio/css/bootstrap.min.css" rel="stylesheet" type="text/css"> --}}
  {{-- <link href="https://posyandu.bandungkab.go.id/assets/medicio/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> --}}
  <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet">        

  <link rel="stylesheet" href="https://posyandu.bandungkab.go.id/assets/bower_components/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" type="text/css" href="https://posyandu.bandungkab.go.id/assets/medicio/plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="https://posyandu.bandungkab.go.id/assets/medicio/css/nivo-lightbox.css" rel="stylesheet" />
  <link href="https://posyandu.bandungkab.go.id/assets/medicio/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="https://posyandu.bandungkab.go.id/assets/medicio/css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="https://posyandu.bandungkab.go.id/assets/medicio/css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="https://posyandu.bandungkab.go.id/assets/medicio/css/animate.css" rel="stylesheet" />
  <link href="https://posyandu.bandungkab.go.id/assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://posyandu.bandungkab.go.id/assets/medicio/css/style.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
  
  

<!-- jQuery -->
<script src="https://posyandu.bandungkab.go.id/assets/bower_components/jquery/dist/jquery.min.js" ></script>
<script src="https://posyandu.bandungkab.go.id/assets/bower_components/datatables.net/js/jquery.dataTables.min.js" ></script>


<script src="https://posyandu.bandungkab.go.id/assets/js/core/app.js" ></script>



  <!-- boxed bg -->
  <link id="bodybg" href="https://posyandu.bandungkab.go.id/assets/medicio/bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="https://posyandu.bandungkab.go.id/assets/medicio/color/default.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Medicio
    Theme URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
   <script>
          // var base_url = 'https://posyandu.bandungkab.go.id/' + "/"; // get base url without index.php
          // var site_url = 'https://posyandu.bandungkab.go.id/' + "/"; // get site url with index.php
          var id = '';
    </script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area" style="background-color: gold">
        <div class="container ">
          <div class="row ">
            <div class="col-sm-6 col-md-6 ">
              <p class="bold text-left" style="color :midnightblue">Senin - Jumat, 08:00 - 16.00 WIB </p>
            </div>
            <div class="col-sm-6 col-md-6">
              <p class="bold text-right" style="color :midnightblue">Hub (031) 73734521</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                <img src="img/unair.jpg" alt="" width="50" height="40" />
                </a>
                <a class="navbar-brand" href="index.html">
                  <img src="img/logo.png" alt="" width="150" height="40" />
              </a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/index">Home</a></li>
            <li><a href="/agenda">Agenda</a></li>
            <li><a href="/">Statistik</a></li>
            <li><a href="/login">Login Posyandu</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
    @yield('nav')
