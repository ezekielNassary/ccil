<?php
require_once "config.php"; 
$request=$_REQUEST;
$email=$request['email'];
$CheckSQL = "SELECT Username, Email, Phone FROM admin_list WHERE email='$email'";
$result = mysqli_query($link,$CheckSQL);
if (mysqli_num_rows($result) >0) {
  while($row = mysqli_fetch_assoc($result)) {
 $Item = $row;
 $json = json_encode($Item, JSON_NUMERIC_CHECK);
 }
 
}else {
  
 echo "Error: " . $CheckSQL . "" . mysqli_error($link);
}
 
echo $json;



// $CheckSQL = "SELECT * FROM admin_list where Email='nassaryezekiel@gmail.com'";
// $result = mysqli_query($link,$CheckSQL);
// $fetchdata=mysqli_fetch_array($result);

// if ($fetchdata) {
//    echo json_encode($fetchdata);
// }else{
// echo "Error: " . $CheckSQL . "" . mysqli_error($link);
// }

mysqli_close($link)
?>

