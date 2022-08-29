<?php 
require_once "config.php"; 
$spareName = mysqli_real_escape_string($link, $_POST['name']);
$spareCode = mysqli_real_escape_string($link, $_POST['code']);
$spareDescription = mysqli_real_escape_string($link, $_POST['description']);
$spareCategory = mysqli_real_escape_string($link, $_POST['category']);
$spareQty = mysqli_real_escape_string($link, $_POST['qty']);
$spareCost = mysqli_real_escape_string($link, $_POST['cost']);
$spareType = mysqli_real_escape_string($link, $_POST['type']);
$spareOlevel = mysqli_real_escape_string($link, $_POST['level']);
$spareDate = mysqli_real_escape_string($link, $_POST['date']);
$spareFile = mysqli_real_escape_string($link, $_POST['file']);
$spareRemark = mysqli_real_escape_string($link, $_POST['remark']);
$spareManufact = mysqli_real_escape_string($link, $_POST['manufact']);

insert_code($link,$spareName,$spareCode,$spareDescription,$spareQty,$spareType,$spareCost,$spareOlevel,$spareDate,$spareFile,$spareRemark,$spareManufact);


function insert_code($link,$name,$code,$desc,$qty,$type,$cost,$level,$date,$file,$remark,$spareManufact){
$sql = "INSERT INTO stock_data(Partname, Partnumber,Material_Description,Type,File,Total_Received,Date_IN,Cost,Order_Level,Remark,Manufacturer) 
     VALUES ('".$name."','".$code."','".$desc."','".$type."','".$file."','".$qty."','".$date."','".$cost."','".$level."','".$remark."','".$spareManufact."')";
if (mysqli_query($link, $sql)) {
   echo ("success");
    } 
    else {
	echo ("error: ".mysqli_error($link));
    }
}

?>