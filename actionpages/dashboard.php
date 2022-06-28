<?php
header('Content-Type: application/json');
require_once "config.php"; 

if(!empty($_POST['line'])){
$line = mysqli_real_escape_string($link,$_POST['line']);
$shift = mysqli_real_escape_string($link,$_POST['shift']);
$date = mysqli_real_escape_string($link,$_POST['date']);
 

//line 1
if($line=='line1'){
$data = array();
$sql = "SELECT * FROM line1  ORDER BY id DESC LIMIT 3";	
$result = mysqli_query($link, $sql);	 
if (mysqli_num_rows($result) > 0) {
	while($row[] = mysqli_fetch_assoc($result)) {
	$data['status'] = 'line1';
 	$data['result'] =  $row;
 } 
} else {
 $data['status'] = 'Error';
}
echo json_encode($data);;
}





//line 2
if($line=='line2'){
$data = array();
$sql = "SELECT * FROM line2  ORDER BY id DESC LIMIT 3";	
$result = mysqli_query($link, $sql);	 
if (mysqli_num_rows($result) > 0) {
	while($row[] = mysqli_fetch_assoc($result)) {
	$data['status'] = 'line2';
 	$data['result'] =  $row;
 } 
} else {
 $data['status'] = 'Error';
}
echo json_encode($data);;
}





//line 3
if($line=='line3'){
$data = array();
$sql = "SELECT * FROM line3  ORDER BY id DESC LIMIT 3";	
$result = mysqli_query($link, $sql);	 
if (mysqli_num_rows($result) > 0) {
	while($row[] = mysqli_fetch_assoc($result)) {
	$data['status'] = 'line3';
 	$data['result'] =  $row;
 } 
} else {
 $data['status'] = 'Error';
}
echo json_encode($data);;
}




//line 4
if($line=='line4'){
$data = array();
$sql = "SELECT * FROM line4  ORDER BY id DESC LIMIT 3";	
$result = mysqli_query($link, $sql);	 
if (mysqli_num_rows($result) > 0) {
	while($row[] = mysqli_fetch_assoc($result)) {
	$data['status'] = 'line4';
 	$data['result'] =  $row;
 } 
} else {
 $data['status'] = 'Error';
}
echo json_encode($data);;
}





//line 5
if($line=='line5'){
$data = array();
$sql = "SELECT * FROM line5  ORDER BY id DESC LIMIT 3";	
$result = mysqli_query($link, $sql);	 
if (mysqli_num_rows($result) > 0) {
	while($row[] = mysqli_fetch_assoc($result)) {
	$data['status'] = 'line5';
 	$data['result'] =  $row;
 } 
} else {
 $data['status'] = 'Error';
}
echo json_encode($data);;
}




//line 6
if($line=='line6'){
$data = array();
$sql = "SELECT * FROM line6  ORDER BY id DESC LIMIT 3";	
$result = mysqli_query($link, $sql);	 
if (mysqli_num_rows($result) > 0) {
	while($row[] = mysqli_fetch_assoc($result)) {
	$data['status'] = 'line6';
 	$data['result'] =  $row;
 } 
} else {
 $data['status'] = 'Error';
}
echo json_encode($data);;
}


}

?>