<?php
$conn=mysql_connect("localhost","root","");
if(!$conn)
echo "Connection Error!!!";
$res=mysql_select_db("it_infra");
?>
<html>
<style>
h1
{
color:orange;
text-align:center;
}
</style>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="rvce.ico">
	<title>Administrator Home</title>
	<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
	<link href="default.css" rel = "stylesheet" type="text/css" media="all">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
</head>
<body >
	<center><h1>IT Infrastructure Feedback Management System</h1></center>
	<center><h3>RV College Of Engineering</h3></center>
	<center><h4>Bangalore-59</h4></center>

	<center><h2>Welcome Administrator</h2></center>
	<center>
	<div align="center"  style="border:1px solid blue;width:400px;	">
	<h3 class="r" style="color:blue;">View Database</h3> 
	<a class="r" href="logdisplay.php"> Login Details </a>  
	<a class="r" href="contact_details.php"> Contact Faculty</a>
	</br></br>
	<a class="r" href="infrastructure.php"> Infrastructure</a>
	<a class="r" href="feedbackdata.php">Feedback</a>
	<a class="r" href="faculty.php">Faculty</a>
	<br/>
	<h3 style="color:blue;">Update Database</h3>
	<a class="r" href="login_details.php"> Login Details</a>
	<a class="r" href="infrastructure_edit.php"> Infrastructure</a>
	<pre></pre>
	</div><br/>
	<div align="center"  style="border:1px solid blue;width:400px;height:72px;	"></br>
	<a class="r" href="reports.php" >View Reports</a>
	</div></center><br>
	<center><a href="index.php"><b>Logout</b></a>
</body>
</html>