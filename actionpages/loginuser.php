<?php
    require_once "config.php";
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $pass = mysqli_real_escape_string($link, $_POST['pass']);
    $useremail="";
    $userlevel="";
    $sql="SELECT email, log_level FROM admin_list where Email='$email' and Password='$pass'";
    $result = mysqli_query($link,$sql);
    $login="";
    $email="";
    $status='0';
if(mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_assoc($result)) {
      $useremail=$row['email'];
      $userlevel=$row['log_level'];
      $status='1';       
  }
  }  
else {
   $status= "error: ".mysqli_error($link);
    }
  if ($status=='1') {
   session_start(); 
   $_SESSION["email"]=$useremail;
   $_SESSION["login"]=$userlevel;
   echo($status);
  }else{
echo($status);
  }
 
?>


