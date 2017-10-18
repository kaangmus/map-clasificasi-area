<?php include "root.php"; ?> 

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
          <?php $root->view_category(); ?>  
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
<div id="map" style="width:100%;height:570px; margin-top: 150px;"></div>
</div>
<script>



function myMap() {

  <?php
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



