<?php
error_reporting(0);
$conn=mysql_connect('localhost','root','');
if(!$conn)
echo "Connection Error!!!";
$res=mysql_select_db("it_infra");
$error="";

        
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

        for($i=0;$i<count($result); $i++)
                {       

        
                        if($_POST['username'] == $result[$i]['Log_id'] && $_POST['password']== $result[$i]['Password'] )
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
else if($choice=="Faculty")
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

        for($i=0;$i<count($result); $i++)
                {       

        
                        if($_POST['username'] == $result[$i]['Login_ID'] && $_POST['password']== $result[$i]['Password'] )
                        { 
                                
                                $_SESSION['admin'] = $val[$i]['Login_ID'];
                                header('location:feedback.php');        
                        }
                        else
                        {
                                $error = "Invalid User Name or Password. Please make sure you select a valid choice between admin and faculty";
                        }
                }

}
else
{$error="Enter a valid choice";
}

}





?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>"Welcome to IT Infrastructure Feedback Management</title>
<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
<link href="default.css" rel = "stylesheet" type="text/css" media="all">
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="shortcut icon" href="rvce.ico">

</head>
<div id="header-wrapper">
        <div id="banner" class="container">
                <div class="title">
                        <h2>Welcome to IT infrastructure Feedback Management System</h2>
                        <span class="byline">RV College Of Engineering</span>
                </div>
        </div>
        <div id="header" class="container">
                <div id="menu">
                        <ul><center>
                                <b><form method="POST" action="">
                                Login ID: <input type="text" name="username"/><br><br>
                                Password: <input type="password" name="password"/><br><br>
                                <input type="radio" name="admin" value="admin">Admin
                                <input type="radio" name="admin" value="Faculty">Faculty
                                <input type="submit" class = "button" name="submit" value="Submit">
                                <?php if($error!=""){   echo $error;}?>
                                </form></b>  
                        </center>
                        </ul>
                </div>
        </div>

        
</div>

<!-- <center><h1>IT Infrastructure Feedback Management</h1>
<center><h3>RV College Of Engineering</h3>
<center><h4>Bangalore-59</h4><br><br><br><br><br><br><br><br><br>-->


</body>
</html>
