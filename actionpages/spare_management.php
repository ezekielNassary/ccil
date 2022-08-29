<?php 
header('Content-Type: application/json');
require_once "config.php";
$command='';
if(!empty($_POST['ACTION'])){
$command = mysqli_real_escape_string($link,$_POST['ACTION']);
} 

if ($command == 'GET_ALL') {
	echo (all_data($link));
	}
if ($command == 'DELETE') {
	echo (delete_spare($link));
	}
if ($command == 'UPDATE') {
	
	}
if ($command == 'GET_ID') {
	echo(get_id($link));
	}
if ($command == 'FIND_SUM') {
	echo(find_sum($link));
}
if ($command == 'INSERT'){
	echo(insert_code($link));
	}

function find_sum($link){
	$data = array();
	$sql = "SELECT COUNT(id), SUM(Total_Received),SUM(Stock_Out),SUM(Cost),SUM(Quantity_Bal) FROM stock_data";
        $result = mysqli_query($link,$sql);
	if (mysqli_num_rows($result) >0) {
      while($row = mysqli_fetch_assoc($result)) {
      	$data['registered'] = $row['COUNT(id)'];
        $data['stockin'] = $row['SUM(Total_Received)'];
        $data['stockout'] = $row['SUM(Stock_Out)'];
        $data['cost'] = $row['SUM(Cost)'];
        $data['balance'] = $row['SUM(Quantity_Bal)'];
            }
		}else {
		 $data['status']="No Results Found.";
		 }	
		 return json_encode($data);	
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

function delete_spare($link){
	$data = array();
	$code = mysqli_real_escape_string($link,$_POST['code']);
	$sql="DELETE FROM stock_data WHERE Partnumber = '$code'";
	$result = mysqli_query($link, $sql);
	if($result){
	$data['status'] = 'deleted';

	}else{
	$data['status'] = 'Error';
	}
	return json_encode($data);
}



function insert_code($link){
	$data = array();
	$name = mysqli_real_escape_string($link, $_POST['name']);
	$code = mysqli_real_escape_string($link, $_POST['code']);
	$desc = mysqli_real_escape_string($link, $_POST['description']);
	$qty = mysqli_real_escape_string($link, $_POST['qty']);
	$cost = mysqli_real_escape_string($link, $_POST['cost']);
	$type = mysqli_real_escape_string($link, $_POST['type']);
	$level = mysqli_real_escape_string($link, $_POST['level']);
	$date = mysqli_real_escape_string($link, $_POST['date']);
	$file = mysqli_real_escape_string($link, $_POST['file']);
	$remark = mysqli_real_escape_string($link, $_POST['remark']);
	$spareManufact = mysqli_real_escape_string($link, $_POST['manufact']);

	$sql = "INSERT INTO stock_data(Partname, Partnumber,Material_Description,Type,File,Total_Received,Date_IN,Cost,Order_Level,Remark,Manufacturer) 
	VALUES ('".$name."','".$code."','".$desc."','".$type."','".$file."','".$qty."','".$date."','".$cost."','".$level."','".$remark."','".$spareManufact."')";
	if (mysqli_query($link, $sql)) {
		$data['status'] = 'success';
	} 
	else {
		
		$data['status'] = "error: ".mysqli_error($link);
	}
	return json_encode($data);
}


?>