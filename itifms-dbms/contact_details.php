<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="rvce.ico">
	<title>Contact Details</title>
	<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
	<link href="default.css" rel = "stylesheet" type="text/css" media="all">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
</head>
<body background = "rvtrans.jpg">
	<?php
	 $conn=mysql_connect('localhost','root','');
	 if(!$conn)
	 	echo "Connection Error!!";
	 $res=mysql_select_db("it_infra");
	 $qry="SELECT * FROM contact_details";
	 $val = mysql_query($qry);
	?>
<center><h2 style="color:orange;">Faculty Contact Details<center><br><br>
<table width="70%" style="border:2px solid #8AB8E6;">
	<tr style="background-color:#2651A8">
		<th>Staff_ID</th>
		<th>Mobile Number</th>
		<th>Mail ID</th>
	</tr>
	<?php
	while ($row=mysql_fetch_array($val)) 
	{
		echo "<tr>";
		echo "<td><center>".$row['Staff_ID']."</center></td>";
		echo "<td><center>".$row['Mobile']."</center></td>";
		echo "<td><center>".$row['e-mail']."</center></td>";
		echo "</tr>";
	}
	?>
</table>	
</center><br>
<center><a href="admin1.php">Back</center>
<center><a href="index.php">Logout</center>
</body>
</html>