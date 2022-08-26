<?php 
header('Content-Type: application/json');
require_once "config.php";
$command='';
if(!empty($_POST['ACTION'])){
$command = mysqli_real_escape_string($link,$_POST['ACTION']);
} 

if ($command=='GET_ALL') {
	echo (all_data($link));
}
if ($command=='DELETE') {
	
}
if ($command=='UPDATE') {
	
}
if ($command=='GET_ID') {
	echo(get_id($link));
}


function all_data($link){
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
return json_encode($data);	
}

function get_id($link){
$code = mysqli_real_escape_string($link,$_POST['code']);
$data = array();
$sql = "SELECT * FROM stock_data WHERE Partnumber = '$code'";
$result = mysqli_query($link, $sql);	 
if (mysqli_num_rows($result) > 0) {
	while($row[] = mysqli_fetch_assoc($result)) {
 	$data['result'] =  $row;
 } 
} else {
 	$data['status'] = 'Error';
}
return json_encode($data);	
}




?>