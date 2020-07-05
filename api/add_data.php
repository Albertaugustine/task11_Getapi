<?php
include '../dbconfig.php';

$output=array();
$query="SELECT * FROM user";
$result = $conn -> query($query);
if(mysqli_num_rows($result)>0){
  while($row=$result -> fetch_assoc()){
    $output[]=$row;
  }
  
echo json_encode($output);
}
?>