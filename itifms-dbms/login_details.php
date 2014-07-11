<?php
error_reporting(0);
$conn=mysql_connect("localhost","root","");
if(!$conn)
echo "Connection Error!!!";
$res=mysql_select_db("it_infra");

if(isset($_POST['submit'])=='Submit')
{
	echo 'hahahah';

	if($_POST['username']=="")
	{
		$errorMsg2='Enter Valid Login Id';
	}
	$pas=$_POST['password'];
	if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/',$pas))
	{
		$errorMsg3='Enter Valid Password. Must contain atleast one letter, one number and of 8-12 characters';
	}
	if($pas=="")
	{
		$errorMsg3='Enter Valid Password';
	}
	
		
	
	if(!($errorMsg3 == "" && $errorMsg2 == "" ))
	{	
			$errorMsg="Both fields are required";

	}
	else
	{
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$sql="INSERT INTO login_details(Login_ID, Password) VALUES ('$user','$pass')";
	$res=mysql_query($sql);
		if($res)
	header('location:logdisplay.php');
	else
	$err_report = "Query Failed plz recheck the query";
	}
}
echo "";


if(isset($_POST['submita'])=='Submit')
{
	echo 'tjoo';
	
	if(empty($_POST['Staff_ID']))
	{
		$errorMsg5='Enter Valid Data';
	}
	else if(empty($_POST['Name']))
	{
		$errorMsg6='Enter Valid Data';
	}
	else if(empty($_POST['DOB']))
	{
		$errorMsg7='Enter Valid Data';
	}
	else if(empty($_POST['Designation']))
	{
		$errorMsg8='Enter Valid Data';
	}
	else if(empty($_POST['Department']))
	{
		$errorMsg9='Enter Valid Data';
	}
	else if(empty($_POST['e-mail']))
	{
		$errorMsg10='Enter Valid Data';
	}
	else if(empty($_POST['e-mail']))
	{
		$errorMsg11='Enter Valid Data';
	}
	
	{	echo '';
		$staff=$_POST['Staff_ID'];
		$name1=$_POST['Name'];
		$dob=$_POST['DOB'];
		$designation=$_POST['Designation'];
		$department=$_POST['Department'];
		$mobile=$_POST['Mobile'];
		$email=$_POST['e-mail'];
		echo $email;
		echo $staff;
		echo $name1;
		echo $dob;
		echo $designation;
		echo $department;
		echo $mobile;
		$from = new DateTime($dob);
		$to   = new DateTime('today');
		$age = $from->diff($to)->y;
		echo $age;

		$sql = "INSERT INTO faculty VALUES ('$staff','$name1','$dob','$age','$designation','$department')";
		$sql1 = "INSERT INTO contact_details VALUES ('$staff','$mobile','$email')";

		$res1=mysql_query($sql);

		if($res1)
		{
			$res2=mysql_query($sql1);
			if ($res2)
				header('location:faculty.php');
			else echo 'Invalid Details'.mysql_error($conn);
		}
		else echo 'Invalid Details!'.mysql_error($conn);
	}
	echo ''	;
}








if(isset($_POST['deleteb']) == 'Delete')
{
if($_POST['delete']=="")
{
$alert= "Enter appropriate Login ID to be deleted ";
} 
else
{
$user=$_POST['delete'];
	$qry="select * from login_details";
	$val=mysql_query($qry);
while($row = mysql_fetch_array($val))
  {
  if($row['Login_ID'] == $user)
	{$sql="delete from login_details where Login_ID='$user';";
	$res=mysql_query($sql);}
	}
	//$user=$_POST['delete'];
	//$sql="delete from login_details where Login_ID='$user';";
	//$res=mysql_query($sql);
	if($res)
	header('location:logdisplay.php');
	else
	$alert= "Invalid Entry";
}
	}
 ?>
<html>
<head>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <link rel="shortcut icon" href="rvce.ico">
<title> Login User Updation</title>
<link rel="shortcut icon" href="rvce.ico">
<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
<link href="default.css" rel = "stylesheet" type="text/css" media="all">
<meta name="keywords" content="" />
<meta name="description" content="" />
</head>
<body >
<div style="margin:0 auto 0 auto;height:auto;width:900px;">
<center><h1 style="color:orange;">Add Login User</h1>
<hr style="color:green; width:700px;"><br><br>




<b><form method="POST" action="login_details.php">
<table>
<tr>
<td>Login ID:</td> <td>	<input type="text" name="username"/><?php if($errorMsg2!=""){echo $errorMsg2;} ?><br><br></td>
</tr>
<tr>
<td>Password:</td>	<td><input type="password" name="password"/><?php if($errorMsg3!=""){echo $errorMsg3;} ?><br></td>
</tr>

</table><br><br>
<input class = "button"type="submit" name="submit" value="Submit"><br><br>
<?php if($errorMsg!="") {echo $errorMsg;}?>



</form>

<center><h1 style="color:orange;">Add faculty</h1>
<hr style="color:green; width:700px;">
<form action="login_details.php" method="post">
<table>
	<tr>
<td>Staff ID:</td> <td><input type="text" name="Staff_ID"/><br><br><?php if($errorMsg5!=""){echo $errorMsg5;} ?></td>
</tr>
<tr>
<td>Name:</td> <td><input type="text" name="Name"/><br><br><?php if($errorMsg6!=""){echo $errorMsg6;} ?></td>
</tr>

<tr>
<td>DOB:</td> <td><input type="date" name="DOB"/><br><br><?php if($errorMsg7!=""){echo $errorMsg7;} ?></td>
</tr>
<tr>
<td>Designation:</td> <td><input type="text" name="Designation"/><br><br><?php if($errorMsg8!=""){echo $errorMsg8;} ?></td>
</tr>

<tr>
<td>Department:</td> <td><select name="Department"><option value="Computer Science">CSE</option>
<option value="ECE">ECE</option>
<option value="Information Science">ISE</option>
</select><br><br><?php if($errorMsg9!=""){echo $errorMsg9;} ?></td>
</tr>
<tr>
	<td>Mobile:</td><td><center><input type='tel' pattern="[0-9]{10,10}" class="search" name="Mobile"  autocomplete="off"  maxlength="10" required><br><br><?php if($errorMsg10!=""){echo $errorMsg10;} ?></center></td>
</tr>
	<tr>
    <td>E-Mail Id:</td><td><input type="email" placeholder="Enter your email" name="e-mail"><br><br><?php if($errorMsg11!=""){echo $errorMsg11;} ?></td>
	</tr>

</table><br><br>
<input class="button" type="submit" name="submita" value="Submit"><br><br>
</form>








<center><h1 style="color:orange;">Delete User</h1>
<hr style="color:green; width:700px;">
<form action="delete.php" method="POST">
Delete User: <input type="text" name="delete" />
			<input class="button" type="submit" name="deleteb" value="Delete"/>
<?php if($_POST['delete']=="" ){echo $alert;} if(!$res) {echo $alert;} ?>
</form>
<br>
<br>
</center>
<a href="admin1.php" alt="Back">Back</a>
<center><a href="index.php">Logout</a></center>


</form></b>
</div>
</body>
</html>