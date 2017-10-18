<?php 
 include "root.php";

          
  $result=$root->select_coordinat(); 
		  $latitude=array();
          $longitude=array();
          $category=array();
		  foreach($result as $r):    
		  array_push($latitude,$r['latitude']);
		  array_push($longitude,$r['longitude']);
          array_push($category,$r['category_map']);
          endforeach;


    	  $lat=  json_encode($latitude,JSON_NUMERIC_CHECK);
          $long=  json_encode($longitude,JSON_NUMERIC_CHECK);
          $categoryy=  json_encode($category,JSON_NUMERIC_CHECK);
   		

  $buku=$root->viewcategory(); 
          $color_array=array();
          $category_array=array();
          foreach($buku as $r):        
          array_push($category_array,$r['category_map']);
          array_push($color_array,$r['color_name']);
          endforeach;
          $category=  json_encode($category_array,JSON_NUMERIC_CHECK);
          $color=  json_encode($color_array,JSON_NUMERIC_CHECK);

?>
<script type="text/javascript">
	var latitude = <?php echo $lat ?>;
	var longitude = <?php echo $long ?>;
	var category = <?php echo $categoryy ?>;

	var category2 = <?php echo $category ?>;
	var color = <?php echo $color ?>;


// var simpang =[];
// for (var i=0;i<category.lenght;++i)
// {
//     for (var j=0;j<category2.lenght;++j)
//     {
//         if (category[i] == category2[j])
//         {
//  				simpang.push(category[i]);
//  				console.log(simpang);
//         }
//     }
// }

</script>