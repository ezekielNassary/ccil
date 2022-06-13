<?php
    require_once "config.php";
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $pass = mysqli_real_escape_string($link, $_POST['pass']);
    $sql="SELECT * FROM admin_list where Email='$email' and Password='$pass'";
    $result = mysqli_query($link,$sql);
if($row = mysqli_fetch_array($result)) {
   session_start(); 
   $_SESSION["loggedin"]=$email;
  echo (1);
    }  
else {
    echo (0);
    }
  
 
?>


