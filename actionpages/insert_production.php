<?php
require_once "config.php"; 

//create all tables
line1($link);
line2($link);
line3($link);
line4($link);
line5($link);
line6($link);

$err='';

$sku1 = mysqli_real_escape_string($link, $_POST['sku1']);
$speed1 = mysqli_real_escape_string($link, $_POST['speed1']);
$time1 = mysqli_real_escape_string($link, $_POST['time1']);
$target1 = mysqli_real_escape_string($link, $_POST['target1']);
$actual1 = mysqli_real_escape_string($link, $_POST['actual1']);
$effi1 = mysqli_real_escape_string($link, $_POST['effi1']);
$shift = mysqli_real_escape_string($link, $_POST['shift']);
$date = mysqli_real_escape_string($link, $_POST['date']);

$sku2 = mysqli_real_escape_string($link, $_POST['sku2']);
$speed2 = mysqli_real_escape_string($link, $_POST['speed2']);
$time2 = mysqli_real_escape_string($link, $_POST['time2']);
$target2 = mysqli_real_escape_string($link, $_POST['target2']);
$actual2 = mysqli_real_escape_string($link, $_POST['actual2']);
$effi2 = mysqli_real_escape_string($link, $_POST['effi2']);

$sku3 = mysqli_real_escape_string($link, $_POST['sku3']);
$speed3 = mysqli_real_escape_string($link, $_POST['speed3']);
$time3 = mysqli_real_escape_string($link, $_POST['time3']);
$target3 = mysqli_real_escape_string($link, $_POST['target3']);
$actual3 = mysqli_real_escape_string($link, $_POST['actual3']);
$effi3 = mysqli_real_escape_string($link, $_POST['effi3']);


$sku4 = mysqli_real_escape_string($link, $_POST['sku4']);
$speed4 = mysqli_real_escape_string($link, $_POST['speed4']);
$time4 = mysqli_real_escape_string($link, $_POST['time4']);
$target4 = mysqli_real_escape_string($link, $_POST['target4']);
$actual4 = mysqli_real_escape_string($link, $_POST['actual4']);
$effi4 = mysqli_real_escape_string($link, $_POST['effi4']);


$sku5 = mysqli_real_escape_string($link, $_POST['sku5']);
$speed5 = mysqli_real_escape_string($link, $_POST['speed5']);
$time5 = mysqli_real_escape_string($link, $_POST['time5']);
$target5 = mysqli_real_escape_string($link, $_POST['target5']);
$actual5 = mysqli_real_escape_string($link, $_POST['actual5']);
$effi5 = mysqli_real_escape_string($link, $_POST['effi5']);

$sku6 = mysqli_real_escape_string($link, $_POST['sku6']);
$speed6 = mysqli_real_escape_string($link, $_POST['speed6']);
$time6 = mysqli_real_escape_string($link, $_POST['time6']);
$target6 = mysqli_real_escape_string($link, $_POST['target6']);
$actual6 = mysqli_real_escape_string($link, $_POST['actual6']);
$effi6 = mysqli_real_escape_string($link, $_POST['effi6']);

function checkifshiftexist($link,$shift,$date){
    $sql="SELECT * FROM line1 where shift='$shift' and date='$date'";
    $result=mysqli_query($link,$sql);
    if($row = mysqli_fetch_array($result)) {
      $err= "Shift Data Alredy Submited";
        } else {
     $err='ok'; 

    }
    return $err;
}

if (isset($actual1) &&  isset($actual2) && isset($actual3) && isset($actual4) && isset($actual5) && isset($actual6))  {
   $err=checkifshiftexist($link,$shift,$date);
   if ($err=='ok') {
   insert_line1($link,$sku1,$speed1,$time1,$actual1,$target1,$effi1,$shift,$date);
   insert_line2($link,$sku2,$speed2,$time2,$actual2,$target2,$effi2,$shift,$date);
   insert_line3($link,$sku3,$speed3,$time3,$actual3,$target3,$effi3,$shift,$date);
   insert_line4($link,$sku4,$speed4,$time4,$actual4,$target4,$effi4,$shift,$date);
   insert_line5($link,$sku5,$speed5,$time5,$actual5,$target5,$effi5,$shift,$date);
   insert_line6($link,$sku6,$speed6,$time6,$actual6,$target6,$effi6,$shift,$date);
   echo "success";
       }else{
        echo $err;
       }
}else{
  $err ="Actual production must not be empty"; 
  echo $err;
}


function insert_line1($link,$sku1,$speed1,$time1,$actual1,$target1,$effi1,$shift,$date){
$sql = "INSERT INTO line1(sku, speed,production_time,target,actual,efficiency,shift,date) 
     VALUES ('".$sku1."','".$speed1."','".$time1."','".$target1."','".$actual1."','".$effi1."','".$shift."','$date')";
if (mysqli_query($link, $sql)) {
   //echo ("success1");
    } 
    else {
         echo ("Error: Check line 1 data");
// echo ("error: ".mysqli_error($link));
    }
}

function insert_line2($link,$sku2,$speed2,$time2,$actual2,$target2,$effi2,$shift,$date){
$sql = "INSERT INTO line2(sku, speed,production_time,target,actual,efficiency,shift,date) 
     VALUES ('".$sku2."','".$speed2."','".$time2."','".$target2."','".$actual2."','".$effi2."','".$shift."','$date')";
if (mysqli_query($link, $sql)) {
   //     echo ("success2");
    } 
    else {
    echo ("Error: Check line 2 data");
    }
}

function insert_line3($link,$sku3,$speed3,$time3,$actual3,$target3,$effi3,$shift,$date){
$sql = "INSERT INTO line3(sku, speed,production_time,target,actual,efficiency,shift,date) 
     VALUES ('".$sku3."','".$speed3."','".$time3."','".$target3."','".$actual3."','".$effi3."','".$shift."','$date')";
if (mysqli_query($link, $sql)) {
     //   echo ("success3");
    } 
    else {
  echo ("Error: Check line 3 data");
    }
}

function insert_line4($link,$sku4,$speed4,$time4,$actual4,$target4,$effi4,$shift,$date){
$sql = "INSERT INTO line4(sku, speed,production_time,target,actual,efficiency,shift,date) 
     VALUES ('".$sku4."','".$speed4."','".$time4."','".$target4."','".$actual4."','".$effi4."','".$shift."','$date')";
if (mysqli_query($link, $sql)) {
     //  echo ("success4");
    } 
    else {
      echo ("Error: Check line 4 data");
    }
}

function insert_line5($link,$sku5,$speed5,$time5,$actual5,$target5,$effi5,$shift,$date){
$sql = "INSERT INTO line5(sku, speed,production_time,target,actual,efficiency,shift,date) 
     VALUES ('".$sku5."','".$speed5."','".$time5."','".$target5."','".$actual5."','".$effi5."','".$shift."','$date')";
if (mysqli_query($link, $sql)) {
       // echo ("success5");
    } 
    else {
      echo ("Error: Check line 5 data");
    }
}

function insert_line6($link,$sku6,$speed6,$time6,$actual6,$target6,$effi6,$shift,$date){
$sql = "INSERT INTO line6(sku, speed,production_time,target,actual,efficiency,shift,date) 
     VALUES ('".$sku6."','".$speed6."','".$time6."','".$target6."','".$actual6."','".$effi6."','".$shift."','$date')";
if (mysqli_query($link, $sql)) {
        //echo ("success5");
    } 
    else {
     echo ("Error: Check line 6 data");
    }
}

function line1($link){
$sql=" CREATE TABLE line1 (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
sku varchar(255),
speed varchar(255),
production_time varchar(255),
target varchar(255),
actual varchar(255),
efficiency varchar(255),
shift varchar(50),
date varchar(200) )";
$result= mysqli_query($link,$sql);

if ($result) {
    // echo "table 1 created";
    }else{
    // echo "Error: " . mysqli_error($link);
    }

}
function line2($link){
$sql=" CREATE TABLE line2 (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
sku varchar(255),
speed varchar(255),
production_time varchar(255),
target varchar(255),
actual varchar(255),
efficiency varchar(255),
shift varchar(50),
date varchar(200) )";
$result= mysqli_query($link,$sql);

if ($result) {
     // echo "table 2 created";
    }else{
     // echo "Error: " . mysqli_error($link);
    }

}
function line3($link){
$sql=" CREATE TABLE line3(
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
sku varchar(255),
speed varchar(255),
production_time varchar(255),
target varchar(255),
actual varchar(255),
efficiency varchar(255),
shift varchar(50),
date varchar(200) )";
$result= mysqli_query($link,$sql);

if ($result) {
      //echo "table created";
    }else{
      //echo "Error: " . mysqli_error($link);
    }

}
function line4($link){
$sql=" CREATE TABLE line4 (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
sku varchar(255),
speed varchar(255),
production_time varchar(255),
target varchar(255),
actual varchar(255),
efficiency varchar(255),
shift varchar(50),
date varchar(200) )";
$result= mysqli_query($link,$sql);

if ($result) {
      //echo "table created";
    }else{
      //echo "Error: " . mysqli_error($link);
    }

}
function line5($link){
$sql=" CREATE TABLE line5 (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
sku varchar(255),
speed varchar(255),
production_time varchar(255),
target varchar(255),
actual varchar(255),
efficiency varchar(255),
shift varchar(50),
date varchar(200) )";
$result= mysqli_query($link,$sql);

if ($result) {
      //echo "table created";
    }else{
      //echo "Error: " . mysqli_error($link);
    }

}
function line6($link){
$sql=" CREATE TABLE line6 (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
sku varchar(255),
speed varchar(255),
production_time varchar(255),
target varchar(255),
actual varchar(255),
efficiency varchar(255),
shift varchar(50),
date varchar(200) )";
$result= mysqli_query($link,$sql);

if ($result) {
      //echo "table created";
    }else{
      //echo "Error: " . mysqli_error($link);
    }

}


?>