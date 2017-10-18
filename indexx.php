<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Google Map Api</title>
<link rel="stylesheet" type="text/css" href="asset/css/index.css">
<link rel="stylesheet" type="text/css" href="asset/awesome/css/font-awesome.min.css">
<script type="text/javascript" src="asset/js/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#btn-login").click(function(){
      $("#loginbox").toggle();
    });
  });
</script>
  </head>
  <body>
<nav>
<div class="container">
  <ul class="left">
    <li><a href="index.php">Google Map API</a></li>
  </ul>
  <ul class="listaa">
    <li><a href="">Kategori <i class="fa fa-chevron-down"></i></a>
    <ul class="asd">
          <?php include "root.php"; 
          $root->view_category(); ?>  
    </ul>
    </li>
    <li>
      <form action="pencarian.php" method="get">
        <input type="search" name="nama" placeholder="Cari Lokasi...">
      </form>
    </li>
  </ul>
  <ul class="right">
    <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
    <li><a style="padding-left:10px;cursor:pointer" id="btn-login"><i class="fa fa-sign-in"></i> Tambah Lokasi</a></li>
    <li><a href="daftar.php" class="btn-dftr"><i class="fa fa-sign-in"></i> Dashboard</a></li>
    <div class="both"></div>
  </ul>
  <div class="both"></div>
</div>

</nav>

<div class="loginbox" id="loginbox">
  <table>
    <form action="#" method="post">
      <tr>
        <td><input type="text" name="username" placeholder="Username"></td>
      </tr>
      <tr>
        <td><input type="password" name="password" placeholder="Password"></td>
      </tr>
      <tr>
        <td><input type="submit"></td>
      </tr>
    </form>
  </table>
</div>
<div class="menu">
<div id="map" style="width:100%;height:570px; margin-top: 300px;"></div>
</div>
<script>
function myMap() {
<?php
$stavanger = array(-5.833142, 106.503365);
$amsterdam = array(-6.564341, 144.052819);
$london = array(4.541734, 96.897547);
?>

  var stavanger1 = <?php echo json_encode($stavanger)?>;
  var amsterdam1 = <?php echo json_encode($london) ?>;
  var london1 =  <?php echo json_encode($amsterdam)?>;

  var stavanger = new google.maps.LatLng(stavanger1[0],stavanger1[1]);
  var amsterdam = new google.maps.LatLng(amsterdam1[0],amsterdam1[1]);
  var london = new google.maps.LatLng(london1[0],london1[1]);
  
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: new google.maps.LatLng(-7.796616, 110.370553), zoom: 4};
  var map = new google.maps.Map(mapCanvas,mapOptions);

  var flightPath = new google.maps.Polyline({
    path: [stavanger, amsterdam, london],
    strokeColor: "#0000FF",
    strokeOpacity: 0.8,
    strokeWeight: 2
  });
  flightPath.setMap(map);
    
}



</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSllmlvjIXEZ1q8o_-VnWcNHmm-YD6WYI&callback=myMap"></script>
    
  </body>
  </html>  
