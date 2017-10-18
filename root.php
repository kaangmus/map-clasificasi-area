<?php
error_reporting(0);
class user
{
	
	public function __construct(){
		$this->dbc = new mysqli('localhost', 'root', '', 'googleapi');
	}
	
	function view_category(){
		$query=$this->dbc->query("select *from category");
		while ($r=mysqli_fetch_array($query)) {
			echo "<li><a href='index.php?id=$r[category_map]&color_name=$r[color_name]'> Kategori $r[category_map]</a></li>";
		}
	}


	function listCategory(){
		$query=$this->dbc->query("select *from category");
		while ($r=mysqli_fetch_array($query)) {
			$hasil[]=$r;
		}
			return $hasil;
	}


	function view_category_by($id){
		$query=$this->dbc->query("select * from map_point where category_map='$id'");
		while ($r=mysqli_fetch_array($query)) {
			$hasil[]=$r;
		}
		return $hasil;
	}


function addCoordinat($city,$latitude,$longitude,$category_map){
		$query=$this->dbc->query("INSERT INTO map_point (city,latitude,longitude,category_map)VALUES('$city','$latitude','$longitude','$category_map')");
			if ($query) { ?>
		            <script type="text/javascript">
		            alert("Coordinat berhasil di tambahkan");
		            window.location.href="list_coordinat.php";
		            </script>
		            <?php
            }else{
            		echo mysqli_error();
            }
				}

function addCategory($category_map,$category_name,$color_name){
		$query=$this->dbc->query( "INSERT INTO category SET category_map='$category_map',category_name='$category_name',color_name='$color_name'");
			if ($query) { ?>
		            <script type="text/javascript">
		            alert("category berhasil di tambahkan");
		            window.location.href="list_category.php";
		            </script>
		            <?php
            }else{
            		echo mysqli_error();
            }
				}

function list_coordinat(){
		$query=$this->dbc->query("select * from map_point");
		while ($r=mysqli_fetch_array($query)) {
			$hasil[]=$r;
		}
		return $hasil;
	}

function list_category(){
		$query=$this->dbc->query("select * from category");
		while ($r=mysqli_fetch_array($query)) {
			$hasil[]=$r;
		}
		return $hasil;
	}



function editCoordinat($city,$latitude,$longitude,$category_map,$id){
	$query=$this->dbc->query("UPDATE map_point  set id='$id',city='$city',latitude='$latitude',longitude='$longitude',category_map='$category_map' where id='$id'");
		    if ($query) { ?>
		            <script type="text/javascript">
		            alert("Data coordinat Berhasil Di Update");
		            window.location.href="list_coordinat.php";
		            </script>
		            <?php
            }else{
            		echo mysqli_error();
            }   

}

function editCategory($category_map,$category_name,$color_name,$id_category){
	$query=$this->dbc->query("UPDATE category  set id_category='$id_category',category_map='$category_map',category_name='$category_name',color_name='$color_name' WHERE id_category='$id_category' ");
		    if ($query) { ?>
		            <script type="text/javascript">
		            alert("Data category  Berhasil Di Update");
		            window.location.href="list_category.php";
		            </script>
		            <?php
            }else{
            		echo mysqli_error();
            }   

}


	function delete_coordinat($id){
		$query=$this->dbc->query("delete from map_point where id='$id'");
			if ($query) {
			?>
			<script>
				alert("Data mobil Berhasil Dihapus");
				window.location.href="list_coordinat.php";
			</script>
			<?php
		}
		else{
			?>
			<script>
				alert("Data mobil Gagal Dihapus");
				window.location.href="daftar_mobil.php";
			</script>
			<?php
		}

	}

	function delete_category($id_category){
		$query=$this->dbc->query("delete from category where id_category='$id_category'");
			if ($query) {
			?>
			<script>
				alert("Data mobil Berhasil Dihapus");
				window.location.href="list_category.php";
			</script>
			<?php
		}
		else{
			?>
			<script>
				alert("Data mobil Gagal Dihapus");
				window.location.href="daftar_mobil.php";
			</script>
			<?php
		}

	}



	function select_coordinat(){
		$query=$this->dbc->query("select * from map_point ");
		while ($r=mysqli_fetch_array($query)) {
			$hasil[]=$r;
		}
		return $hasil;
	}


	function viewcategory(){
		$query=$this->dbc->query("select *from category");
		while ($r=mysqli_fetch_array($query)) {
			$hasil[]=$r;
		}
		return $hasil;
	}


// function categoryAll(){	
// 	$hasil = array();
// 		$getCategory = $this->dbc->query("SELECT category_map from category");
// 		     while ($r = mysqli_fetch_array($getCategory)) {
// 		     		$hasil[]=$r;
// 		   		}
// 		   		 }		   		 
// 		   			echo json_encode($hasil);
// 		   		}

		   		

// function getAll(){
// 		   		$getData1= $this->dbc->query("SELECT category,latitude,longitude from map_point ");
// 		   	 	while ($r = mysqli_fetch_array($getData1)){ 
// 		   	 		$hasil[]=$r;
// 		   	 	}
// 		   		return $hasil;
// 		   	}


 // getAll






		   	//  $length=sizeof($data);
		   	// for($i=0;$i<$length;$i++){
		   	// 	 echo $data[$i]['category_map'];
		   	// 	// $getData1= $this->dbc->query("SELECT latitude from map_point where category_map=$data[$i]['category_map]");
		   	// 	// while ($getData = mysqli_fetch_array($getData1)){ 
		   	// 	// 	echo $getData['latitude'];}
		   	// }

      // $lat=  json_encode($latitude_array,JSON_NUMERIC_CHECK);
      // $long=  json_encode($longitude_array,JSON_NUMERIC_CHECK);


// 		   	for($i=0;$i<$length;$i++){
// 		   		if($r['category_map']==$data[$i]['category_map']){
// 		   			echo $;
// 		   		}

// }
			// for($i=0;$i<$length;$i++){
			// 					// $getData1= $this->dbc->query("SELECT latitude, longitude, color_name, city, category_name from map_point, category WHERE category.category_map=$i and map_point.category_map=$i");
			// 	$getData1=$this->dbc->query("SELECT latitude from map_point where category_map=$data[$i]['category_map]");
		 //        while ($getData = mysqli_fetch_array($getData1)) {
		 //        	    echo $getData['latitude'];
		 //        }
				
			// }       	    
  		
          // https://stackoverflow.com/questions/3351882/convert-mysqli-result-to-json

} // class 
$root=new user();
?>