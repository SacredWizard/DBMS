<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="rvce.ico">
<title>Report 5</title>
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
$qry="select * from feedback where Feedback_ID ='CS005' or Feedback_ID='CS002';";
$val=mysql_query($qry);

?>
<center> <h2 style="color:orange;">Feedback by faculty ID CS002 and CS005</h2>

<center>
<table width="50%"  style="border:2px solid #8AB8E6; ">
<tr style="background-color:#2651A8">
	<th>Feedback ID</th>
	<th>Q1</th>
	<th>Q2</th>
	<th>Q3</th>
	<th>Q4</th>
	<th>Q5</th>
	<th>Q6</th>
	<th>Q7</th>
	<th>Q8</th>
	<th>Q9</th>
	<th>Q10</th>
	</tr>
<?php
while($row = mysql_fetch_array($val))
  {
  echo "<tr >";
  echo "<td>" . $row['Feedback_ID'] . "</td>";
  echo "<td>" . $row['Q1'] . "</td>";
  echo "<td>" . $row['Q2'] . "</td>";
  echo "<td>" . $row['Q3'] . "</td>";
  echo "<td>" . $row['Q4'] . "</td>";
  echo "<td>" . $row['Q5'] . "</td>";
  echo "<td>" . $row['Q6'] . "</td>";
  echo "<td>" . $row['Q7'] . "</td>";
  echo "<td>" . $row['Q8'] . "</td>";
  echo "<td>" . $row['Q9'] . "</td>";
  echo "<td>" . $row['Q10'] . "</td>";
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