<?php
error_reporting(0);
$conn=mysql_connect("localhost","root","");
if(!$conn)
echo "Connection Error!!!";
$res=mysql_select_db("it_infra");
if(isset($_POST['deleteb']) == 'Delete')
{

	if($_POST['delete']=="")
	{
		$errorMsg = 'Enter Your Name';
	}
	$user=$_POST['delete'];
	echo $user;
	$sql="delete from login_details where Login_ID='$user';";
	$res=mysql_query($sql);
	if($res)
	header('location:logdisplay.php');
	else
	echo "Query Failed plz recheck the query";
}
 ?>