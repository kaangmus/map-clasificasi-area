<?php 
include "root.php";
    $categeroy=$root->view_category();  
?>  


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
    <?php 
    $data = array();
    foreach($categeroy as $row): 
      $data []=array($row['latitude'],$row['longitude']);
    endforeach;
     ?> 


<script>
  var a = <?php echo json_encode($data) ?>;
  document.write(a);

</script>
</body>
</html>
