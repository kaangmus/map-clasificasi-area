<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Maps</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<script>
<?php include "root.php"; ?> 
    function myMap() {

      <?php
          $color=$_GET['color_name'];
          $buku=$root->view_category_by($_GET['id']); 
          $latitude_array=array();
          $longitude_array=array();
          foreach($buku as $r):        
          $latitude_arrayy=array_push($latitude_array,$r['latitude']);
          $longitude_arrayy=array_push($longitude_array,$r['longitude']);
          endforeach;
          $lat=  json_encode($latitude_array,JSON_NUMERIC_CHECK);
          $long=  json_encode($longitude_array,JSON_NUMERIC_CHECK);
      ?>

        var a = <?php echo $lat ?>;
        var b = <?php echo $long ?>;

        var coordinat = [];
        for(var i =0;i<a.length;i++){
            coordinat.push(new google.maps.LatLng(a[i],b[i]));

        }
      
      var mapCanvas = document.getElementById("map");
      var mapOptions = {center: new google.maps.LatLng(-7.796616, 110.370553), zoom: 8};
      var map = new google.maps.Map(mapCanvas,mapOptions);

      var flightPath = new google.maps.Polyline({
        path: coordinat,
        strokeColor: "#<?php echo $color; ?>",
        strokeOpacity: 0.8,
        strokeWeight: 2
      });
      flightPath.setMap(map);



} // close function 


    </script>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Google Map Api
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="index.php">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
            <li >
                    <a href="list_coordinat.php">
                        <i class="pe-7s-note2"></i>
                        <p>List Coordinat</p>
                    </a>
                </li>
                <li>
                    <a href="list_category.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>List Category</p>
                    </a>
                </li>
                <li>
                    <a href="add_coordinat.php">
                        <i class="pe-7s-cloud-upload"></i>
                        <p>Tambah Koordinat</p>
                    </a>
                </li>
                
                <li>
                    <a href="add_category.php">
                        <i class="pe-7s-angle-up-circle"></i>
                        <p>Tambah Category</p>
                    </a>
                </li>


            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Kategori Maps <b><?php echo  $_GET['id'] ?></b></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Ubah Titik Center</p>
                            </a>
                        </li>
                        <li>
                            
 <input type="text" class="form-control" placeholder="Masukkan kategory map " name="category_map" style="margin-top: 10px">
                                    


                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Kategory
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
          <?php $root->view_category(); ?>  
                                <li class="divider"></li>
                                <li><a href="#">Semua Category</a></li>

                              </ul>
                        </li>
<!--                         <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li> -->
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="map" class="map"></div>

    </div>
</div>


</body>

        <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSllmlvjIXEZ1q8o_-VnWcNHmm-YD6WYI&callback=myMap"></script>
        

</html>
