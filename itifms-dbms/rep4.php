<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="rvce.ico">
<title>Report 4</title>
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
$qry="select Staff_ID, Name from faculty as F where F.Staff_ID IN (select Feedback_ID from feedback as G where G.Q1='Excellent' AND G.Q2='Excellent' AND G.Q3='Excellent' AND G.Q4='Excellent');";
$val=mysql_query($qry);

?>
<center> <h2 style="color:orange;">Names and ID of faculty who have provided the choice "Excellent" to questions Q1 through Q4</h2>

<center>
<table width="50%"  style="border:2px solid #8AB8E6; ">
<tr style="background-color:#2651A8">
	<th>Staff ID</th>
	<th>Name</th>
	</tr>
<?php
while($row = mysql_fetch_array($val))
  {
  echo "<tr >";
  echo "<td>" . $row['Staff_ID'] . "</td>";
  echo "<td>" . $row['Name'] . "</td>";
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