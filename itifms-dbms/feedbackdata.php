<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="rvce.ico">
<title>Feedback Data</title>
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


<center> <h1 style="color:orange;"> Feedback Data</h1>

<center>
<table width="90%"  style="border:2px solid #8AB8E6; ">
<tr style="background-color:#2651A8">
	<th>Feedback_ID</th>
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
$qry="select * from feedback;";
$val=mysql_query($qry);

while($row = mysql_fetch_array($val))
  {
  echo "<tr >";
  echo "<td><center>" . $row['Feedback_ID'] . "</center></td>";
    echo "<td><center>" . $row['Q1'] . "</center></td>";
  echo "<td><center>" . $row['Q2'] . "</center></td>";
   echo "<td><center>" . $row['Q3'] . "</center></td>";
  echo "<td><center>" . $row['Q4'] . "</center></td>";
   echo "<td><center>" . $row['Q5'] . "<center></td>";
      echo "<td><center>" . $row['Q6'] . "</center></td>";
  echo "<td><center>" . $row['Q7'] . "</center></td>";
   echo "<td><center>" . $row['Q8'] . "</center></td>";
      echo "<td><center>" . $row['Q9'] . "</center></td>";
  echo "<td><center>" . $row['Q10'] . "</center></td>";
   echo "</tr>";
  }
  ?>
</table>
</center><br><br>
<center><a href="admin1.php">Back</a></center>
<center><a href="index.php">Logout</a></center>
</body>
</html>