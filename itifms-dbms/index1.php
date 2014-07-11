

<?php

$conn=mysql_connect("localhost","root","");
if(!$conn)
echo "Connection Error!!!";
$res=mysql_select_db("it_infra");

if(isset($_POST['submit'])=='Submit')
{
$choice=$_POST['admin'];
if($choice=="admin")
{
$qry="select * from admins;";
$val=mysql_query($qry);
if(!$val)
{
echo "Error Querying";
}
else
{
$result=array();
while($res = mysql_fetch_assoc($val))
	array_push($result,$res);
	
}
$user = $_POST['username'];
$pass = $_POST['password'];

	for($i=0;$i<count($val); $i++)
		{	
echo $_POST['username'];
	
			if($_POST['username'] == $result[0]['Log_id'] && $_POST['password']== $result[0]['Password'] )
			{ 
				
				$_SESSION['admin'] = $val[$i]['Log_id'];
				header('location:admin1.php');	
			}
			else
			{
				$error = "Invalid User Name or Password. Please make sure you select a valid choice between admin and faculty";
			}
		}

}
}
else
{
if(isset($_POST['submit'])=='Submit')
{
$qry="select * from login_details;";
$val=mysql_query($qry);
if(!$val)
{
echo "Error Querying";
}
else
{
$result=array();
while($res = mysql_fetch_assoc($val))
	array_push($result,$res);
	
}
$user = $_POST['username'];
$pass = $_POST['password'];

	for($i=0;$i<count($val); $i++)
		{	
echo $_POST['username'];
	
			if($_POST['username'] == $result[0]['Login_ID'] && $_POST['password']== $result[0]['Password'] )
			{ 
				echo "inside";
				$_SESSION['admin'] = $val[$i]['Login_ID'];
				header('location:admin1.php');	
			}
			else
			{
				$error = "Invalid User Name or Password";
			}
		}

}

}


?>

<html>
<head>
<title> Welcome to IT Infrastructure Management</title>
<link rel="shortcut icon" href="rvce.ico">
</head>
<body background="rvtrans.jpg" font="Tahoma">
<center><h1>IT Infrastructure Management</h1>
<center><h3>RV College Of Engineering</h3>
<center><h4>Bangalore-59</h4><br><br><br><br><br><br><br><br><br>
<b><form method="POST" action="">
Login ID: <input type="text" name="username"/><br><br>
Password: <input type="password" name="password"/><br><br>
<input type="radio" name="admin" value="admin">Admin
<input type="radio" name="admin" value="Faculty">Faculty
<input type="submit" name="submit" value="Submit">

</form></b>

</body>
</html>