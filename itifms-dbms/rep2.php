<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="rvce.ico">
<title>Report 2</title>
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
$qry="select Name, Designation from faculty AS f where f.Designation NOT IN (select Designation from faculty where Designation='Professor' OR Designation='Associate Professor');";
$val=mysql_query($qry);

?>
<center> <h2 style="color:orange;">Names and designations of all faculty who are not Professor or Associate Professor</h2>

<center>
<table width="50%"  style="border:2px solid #8AB8E6; ">
<tr style="background-color:#2651A8">
	<th>Name</th>
	<th>Designation</th>
	</tr>
<?php
while($row = mysql_fetch_array($val))
  {
  echo "<tr >";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['Designation'] . "</td>";
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