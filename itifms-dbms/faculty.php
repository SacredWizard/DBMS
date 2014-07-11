<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="rvce.ico">
<title>Faculty Details</title>
<link rel="shortcut icon" href="rvce.ico">
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
?>


<center> <h1 style="color:orange;"> Faculty Details</h1>

<center>
<table width="50%"  style="border:2px solid #8AB8E6; ">
<tr style="background-color:#2651A8">
	<th>Staff_ID</th>
	<th>Name</th>
	<th>DOB</th>
	<th>AGE</th>
	<th>Designation</th>
	<th>Depart_name</th>
</tr>
<?php
$qry="select * from faculty;";
$val=mysql_query($qry);

while($row = mysql_fetch_array($val))
  {
  echo "<tr>";
  echo "<td><center>" . $row['Staff_ID'] . "</center></td>";
    echo "<td><center>" . $row['Name'] . "</center></td>";
  echo "<td><center>" . $row['DOB'] . "</center></td>";
   echo "<td><center>" . $row['Age'] . "</center></td>";
  echo "<td><center>" . $row['Designation'] . "</center></td>";
   echo "<td><center>" . $row['Depart_name'] . "</center></td>";
  echo "</tr>";
  }
  ?>
</table>
</center>
</center><br><br>
<center><a href="admin1.php">Back</a></center>
<center><a href="index.php">Logout</a></center>
</body>
</html>