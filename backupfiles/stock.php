<?PHP
  include 'config.php';
  $sql="select count(1) from stock_data";
  $result=mysqli_query($link,$sql);
  $row = mysqli_fetch_array($result);
$total = $row[0];

$res = mysqli_query($link,'SELECT sum(Total_Received) FROM stock_data');
$row = mysqli_fetch_row($res);
$received= $row[0];

$res = mysqli_query($link,'SELECT sum(Stock_Out) FROM stock_data');
$row = mysqli_fetch_row($res);
$out= $row[0];

$res = mysqli_query($link,'SELECT sum(Quantity_Bal) FROM stock_data');
$row = mysqli_fetch_row($res);
$balance= $row[0];


mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stock</title>
    <link rel="stylesheet" type="text/css" href="stockstyle.css">
  </head>
<body>  
        <h2>SPARE MANAGEMENT</h2>
             
  <div>
	<table>
	<tr>
	<th>REGISTERED SPAREPARTS</th>
	<th>TOTAL ITEMS RECEIVED</th>
	<th>TOTAL ITEMS OUT</th>
	<th>TOTAL BALANCE</th>
	</tr>
	<tr>
	<td>
	<?php echo $total; ?></td>
	<td><?php echo $received; ?></td>
	<td><?php echo $out ?></td>
	<td><?php echo $balance ?></td>
	</tr>
	</table>
	</div>
   
</body>
</html>