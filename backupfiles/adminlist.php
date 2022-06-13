 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>home</title>
    <link rel="stylesheet" href="stylesheethome.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>    
<div>
		<ul>
  <li><a href="welcome.php">Home</a></li>
  <li><a href="#">STOCK</a></li>
  <li><a href="#">MAINTAINANCE</a></li>
   <li><a href="#">ANALYSIS</a></li>
   <li><a href="#">MACHINE</a></li>
    <li><a href="#">PRODUCTION</a></li>
  
  <li style="float:right"><a href="logout.php">LOGOUT</a></li>
  <li style="float:right"><a class="active" href="adminlist.php">USERS</a></li>
</ul>
<?php
require "config.php";
$sql="select * from admin_list";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Username</th>";
                                echo "<th>Phone</th>";
                echo "<th>Email</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Username'] . "</td>";
                              echo "<td>" . $row['Phone'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</div>
    <div class="page-header">
</div>
    
</body>
</html>