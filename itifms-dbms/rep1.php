<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="shortcut icon" href="rvce.ico">
<title>Report 1</title>
<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
  <link href="default.css" rel = "stylesheet" type="text/css" media="all">
  <meta name="keywords" content="" />
  <meta name="description" content="" />
</head>
<body background="rvtrans.jpg">
<?php
$conn=mysql_connect("localhost","root","");
if(!$conn)
echo "Connection Error!!!";
$res=mysql_select_db("it_infra");
$qry="select * from infrastructure AS I where I.Date_of_purchase>'2013-01-01' AND I.Current_status='In warranty';";
$val=mysql_query($qry);

?>
<center> <h2 style="color:orange;">Details of all equipment purchased after the year 2012, still in warranty</h2>

<center>
<table width="50%"  style="border:2px solid #8AB8E6; ">
<tr style="background-color:#2651A8">
	<th>Asset Number</th>
	<th>Name</th>
	<th>Department Name</th>
	<th>Date of purchase</th>
	<th>Current status</th>
</tr>
<?php
while($row = mysql_fetch_array($val))
  {
  echo "<tr >";
  echo "<td>" . $row['Model_no'] . "</td>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['Deptt_name'] . "</td>";
  echo "<td>" . $row['Date_of_purchase'] . "</td>";
  echo "<td>" . $row['Current_status'] . "</td>";
  echo "</tr>";
  }
  ?>
</table>
</center>
</div><br>

<center><a href="reports.php">Back</a>
<center><a href="index.php">Logout</a></center>
</body>
</html>