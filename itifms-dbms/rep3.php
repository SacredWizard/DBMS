<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="rvce.ico">
<title>Report 3</title>
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
$qry="select DOB, Depart_name from faculty as F where F.Staff_ID IN (select Login_ID from login_details);";
$val=mysql_query($qry);

?>
<center> <h2 style="color:orange;">DOB and department of all faculty who are allowed login for feedback</h2>

<center>
<table width="50%"  style="border:2px solid #8AB8E6; ">
<tr style="background-color:#2651A8">
	<th>Date of Birth</th>
	<th>Department</th>
	</tr>
<?php
while($row = mysql_fetch_array($val))
  {
  echo "<tr >";
  echo "<td>" . $row['DOB'] . "</td>";
  echo "<td>" . $row['Depart_name'] . "</td>";
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