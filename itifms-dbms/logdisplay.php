<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="rvce.ico">
<title>Login Details</title>
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
$qry="select * from login_details;";
$val=mysql_query($qry);

?>
<center> <h2 style="color:orange;">Faculty Login Details</h2>

<center>
<table width="50%"  style="border:2px solid #8AB8E6; ">
<tr style="background-color:#2651A8">
	<th>Username</th>
	<th>Password</th>
</tr>
<?php
while($row = mysql_fetch_array($val))
  {
  echo "<tr >";
  echo "<td><center>" . $row['Login_ID'] . "</center></td>";
  echo "<td><center>" . $row['Password'] . "</center></td>";
  echo "</tr>";
  }
  ?>
</table>
</center>
</div>
<center> <h2 style="color:orange;"> Admin Details </h2>

<center>
<table width="50%"  style="border:2px solid #8AB8E6; "></center>
<tr style="background-color:#2651A8">
	<th>Login_ID</th>
	<th>Password</th>
</tr>
<?php
$qry="select * from admins;";
$val=mysql_query($qry);

while($row = mysql_fetch_array($val))
  {
  echo "<tr>";
  echo "<td><center>" . $row['Log_id'] . "</center></td>";
  echo "<td><center>" . $row['Password'] . "</center></td>";
  echo "</tr>";
  }
  ?>
</table>
<br><br>
<center><a href="admin1.php"><b>Back</b></a></center>
<center><a href="index.php"><b>Logout</b></a></center>
</body>
</html>