<?php 
header('Content-Type: application/json');
require_once "config.php";
if(!empty($_POST['command'])){
$line = mysqli_real_escape_string($link,$_POST['command']);
} 
$data = array();
$sql = "SELECT * FROM stock_data ORDER BY id DESC ";
$result = mysqli_query($link, $sql);	 
if (mysqli_num_rows($result) > 0) {
	while($row[] = mysqli_fetch_assoc($result)) {
	$data['stock'] = 'stock data';
 	$data['result'] =  $row;
 } 
} else {
 		$data['status'] = 'Error';
}
echo json_encode($data);;



?>