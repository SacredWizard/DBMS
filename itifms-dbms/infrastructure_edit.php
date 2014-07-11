<?php
error_reporting(0);
$conn=mysql_connect("localhost","root","");
if(!$conn)
echo "Connection Error!!!";
$res=mysql_select_db("it_infra");

if(isset($_POST['submit']) == 'Submit')
{
	$modelname=$_POST['modelno'];
	$pattern='/^RVCE[C,I]S[0-9]{4}$/';
	if($modelname=="" )				
	{
		$errorMsg0='Enter a valid Model number';
	}	 
	if((!preg_match($pattern,$modelname)))		
	{
		$errorMsg0='Enter a valid Model number in the format RVCECS**** or RVCEIS****';
	}
	if($_POST['mname']=="")
	{
		$errorMsg1='Enter equipment name';
	}
	if($_POST['deptname']=="")
	{
		$errorMsg2='Enter Department name';
	}
		$date=$_POST['dop'];
	if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date))
	{
		$errorMsg3='Enter a valid Date of Purchase in the format YYYY-MM-DD';
	}
	if($_POST['dop']=="")
	{
		$errorMsg3='Enter Date of Purchase';
	}

	if($_POST['status']=="")
	{
		$errorMsg4='Enter Status';
	}
	$modelno=$_POST['modelno'];
	$mname=$_POST['mname'];
	$deptname=$_POST['deptname'];
	$dop=$_POST['dop'];
	$status=$_POST['status'];
  if($errorMsg0=="" && $errorMsg1=="" && $errorMsg2=="" && $errorMsg3=="" && $errorMsg4=="")
  {
	$sql="INSERT INTO infrastructure(Model_no, Name, Deptt_name,Date_of_purchase,Current_status)VALUES('$modelno','$mname','$deptname','$dop','$status');";
	$res=mysql_query($sql);
	if($res)
	header('location:infrastructure.php');
	else
	$alert1= "Please enter the correct and complete values";
}
else
{
		$warning="Missing Field(s)";
}
	}
if(isset($_POST['deleteb']) == 'Delete')
{
if($_POST['delete']=="")
{
$alert= "Enter the correct model number ";
} 
else
{
	$user=$_POST['delete'];
	$qry="select * from infrastructure";
	$val=mysql_query($qry);
	
while($row = mysql_fetch_array($val))
  {
  if($row['Model_no'] == $user)

	$sql="delete from infrastructure where Model_no='$user'";
	$res=mysql_query($sql);
	}
	if($res)
	{
	header('location:infrastructure.php');
	}
	else
	{
	$alert="Invalid Entry";
	}
}
	}
 ?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<title>Infrastructure Update</title>
<link rel="shortcut icon" href="rvce.ico">
<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
<link href="default.css" rel = "stylesheet" type="text/css" media="all">
<meta name="keywords" content="" />
<meta name="description" content="" />
</head>
<body background="rvtrans.jpg" font="Tahoma">
<div style="">
<center><h1 style="color:orange;">Infrastructure Modification</h1>
<hr style="color:green; width:700px;">
<b> 
<form action="" method="post">
<table>
<tr>
<td>Model Number:</td> <td>	<input type="text" name="modelno"/><?php if($errorMsg0!=""){echo $errorMsg0;} ?><br></td>
</tr>
<tr>
<td>Name:</td>	<td><input type="text" name="mname"/><?php if($errorMsg1!=""){echo $errorMsg1;} ?><br></td>
</tr>
<tr>
<td>Department Name:</td>	<td><select name="deptname">
<option value='default' selected='selected' enabled='false'>Please select one</option>
<?php 
$qry ="select * from department;";
$val=mysql_query($qry);
while($row = mysql_fetch_array($val))
  {
  echo "<option>" . $row['Dept_name'] . "</option>";

  }?>
</select><?php if($errorMsg2!=""){echo $errorMsg2;} ?></td></tr>
<tr>
	<td>Date of Purchase:</td>	<td><input type="text" name="dop"/><?php if($errorMsg3!=""){echo $errorMsg3;} ?><br></td>
	</tr>
<tr>
<td>Current Status:</td> 	<td><input type="text" name="status"/><?php if($errorMsg4!=""){echo $errorMsg4;} ?><br></td>
</tr>

</table>
<input class="button" type="submit" name="submit" value="Submit">
<?php if($errorMsg0!="" || $errorMsg1!="" || $errorMsg2!="" || $errorMsg3!="" || $errorMsg4=!"") {echo $warning;}?>

</form></b>
<center><h1 style="color:orange;">Delete Eqipment Record</h1>
<hr style="color:green; width:700px;"></center>
<form action="" method="POST">
Delete Equipment Record: <input type="text" name="delete" />
			<input class="button" type="submit" name="deleteb" value="Delete"/>
<?php if($_POST['deleteb']=="" || $alert!=""){echo $alert;} ?>
</form>
</div>
</center><br><br>
<center><a href="admin1.php">Back</a></center>
<center><a href="index.php">Logout</a></center>
</body>
</html>