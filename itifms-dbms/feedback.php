<?php
error_reporting(0);
$conn=mysql_connect("localhost","root","");
if(!$conn)
echo "Connection Error!!!";
$error1=$error2=$error3=$error4=$error5=$error6=$error7=$error8=$error9=$error10="";
$res=mysql_select_db("it_infra");
if(isset($_POST['submit'])=='click')
{
$id=$_POST['staff'];
$q1=$_POST['q1'];if($q1==NULL){$error1= "Please select a choice";};
$q2=$_POST['q2'];if($q2==NULL){$error2="Please select a choice";};
$q3=$_POST['q3'];if($q3==NULL){$error3="Please select a choice";};
$q4=$_POST['q4'];if($q4==NULL){$error4="Please select a choice";};
$q5=$_POST['q5'];if($q5==NULL){$error5="Please select a choice";};
$q6=$_POST['q6'];if($q6==NULL){$error6="Please select a choice";};
$q7=$_POST['q7'];if($q7==NULL){$error7="Please select a choice";};
$q8=$_POST['q8'];if($q8==NULL){$error8="Please select a choice";};
$q9=$_POST['q9'];if($q9==NULL){$error9="Please select a choice";};
$q10=$_POST['q10'];if($q10==NULL){$error10="Please select a choice";};
if(!($q1==NULL OR $q2==NULL OR $q3==NULL OR $q4==NULL OR $q5==NULL OR $q6==NULL OR $q7==NULL OR $q8==NULL OR $q9==NULL OR $q10==NULL))
{$sql="INSERT INTO feedback(Feedback_ID,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10) VALUES( '$id','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10')";
$val= mysql_query($sql);
if($val)
header('location:thanks.php');
else
$error= "Enter YOUR Staff ID! Make sure you are not re-entering your feedback!";
}
}	
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Staff Feedback</title>
<link rel="shortcut icon" href="rvce.ico">
<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
<link href="default.css" rel = "stylesheet" type="text/css" media="all">
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="shortcut icon" href="rvce.ico">
</head>
<body >
<center><h1 style="color:orange">IT Infrastructure Feedback Management System</h1></center>
<center><h3>RV College Of Engineering</h3></center>
<center><h4>Bangalore-59</h4><br><br></center>
<b><form method="POST" action="">
&nbsp&nbsp&nbsp&nbsp&nbsp Staff ID: <input type="text" name="staff"> <?php if($error!=""){echo $error;} ?> <br><br>
</b><ol>

<b><li>How would you rate the performance of HP Inkjet Printer in your department?</b><br><br>


&nbsp&nbsp&nbsp <input type="radio" name="q1" value="Excellent" <?php echo(isset($_POST['q1'])&& ($_POST['q1']=='Excellent'))?"checked":"";?>/>Excellent
&nbsp <input type="radio" name="q1" value="Good" <?php echo(isset($_POST['q1'])&& ($_POST['q1']=='Good'))?"checked":"";?>/>Good
&nbsp <input type="radio" name="q1" value="Average" <?php echo(isset($_POST['q1'])&& ($_POST['q1']=='Average'))?"checked":"";?>/>Average
&nbsp <input type="radio" name="q1" value="Below Average" <?php echo(isset($_POST['q1'])&& ($_POST['q1']=='Below Average'))?"checked":"";?>/>Below Average
&nbsp <input type="radio" name="q1" value="Not applicable" <?php echo(isset($_POST['q1'])&& ($_POST['q1']=='Not applicable'))?"checked":"";?>/>Not Applicable
&nbsp &nbsp &nbsp <?php echo"<font color = 'red'>". $error1."</font>";?><br><br>


<b><li>Is the device mentioned above of frequent use in the department?</b><br><br>


&nbsp&nbsp&nbsp <input type="radio" name="q2" value="Excellent" <?php echo(isset($_POST['q2'])&& ($_POST['q2']=='Excellent'))?"checked":"";?>/>Excellent
&nbsp <input type="radio" name="q2" value="Good" <?php echo(isset($_POST['q2'])&& ($_POST['q2']=='Good'))?"checked":"";?>/>Good
&nbsp <input type="radio" name="q2" value="Average" <?php echo(isset($_POST['q2'])&& ($_POST['q2']=='Average'))?"checked":"";?>/>Average
&nbsp <input type="radio" name="q2" value="Below Average" <?php echo(isset($_POST['q2'])&& ($_POST['q2']=='Below Average'))?"checked":"";?>/>Below Average
&nbsp <input type="radio" name="q2" value="Not applicable" <?php echo(isset($_POST['q2'])&& ($_POST['q2']=='Not applicable'))?"checked":"";?>/>Not Applicable
&nbsp &nbsp &nbsp <?php echo"<font color = 'red'>". $error2."</font>";?><br><br>

<b><li>How does the CISCO 8400 router used perform on low bandwidth?</b><br><br>


&nbsp&nbsp&nbsp <input type="radio" name="q3" value="Excellent" <?php echo(isset($_POST['q3'])&& ($_POST['q3']=='Excellent'))?"checked":"";?>/>Excellent
&nbsp <input type="radio" name="q3" value="Good" <?php echo(isset($_POST['q3'])&& ($_POST['q3']=='Good'))?"checked":"";?>/>Good
&nbsp <input type="radio" name="q3" value="Average" <?php echo(isset($_POST['q3'])&& ($_POST['q3']=='Average'))?"checked":"";?>/>Average
&nbsp <input type="radio" name="q3" value="Below Average" <?php echo(isset($_POST['q3'])&& ($_POST['q3']=='Below Average'))?"checked":"";?>/>Below Average
&nbsp <input type="radio" name="q3" value="Not applicable" <?php echo(isset($_POST['q3'])&& ($_POST['q3']=='Not applicable'))?"checked":"";?>/>Not Applicable
&nbsp &nbsp &nbsp <?php echo"<font color = 'red'>". $error3."</font>";?><br><br>

<b><li>Does the above mentioned device experience any failure during power outages?</b><br><br>


&nbsp&nbsp&nbsp <input type="radio" name="q4" value="Excellent" <?php echo(isset($_POST['q4'])&& ($_POST['q4']=='Excellent'))?"checked":"";?>/>Excellent
&nbsp <input type="radio" name="q4" value="Good" <?php echo(isset($_POST['q4'])&& ($_POST['q4']=='Good'))?"checked":"";?>/>Good
&nbsp <input type="radio" name="q4" value="Average" <?php echo(isset($_POST['q4'])&& ($_POST['q4']=='Average'))?"checked":"";?>/>Average
&nbsp <input type="radio" name="q4" value="Below Average" <?php echo(isset($_POST['q4'])&& ($_POST['q4']=='Below Average'))?"checked":"";?>/>Below Average
&nbsp <input type="radio" name="q4" value="Not applicable"  <?php echo(isset($_POST['q4'])&& ($_POST['q4']=='Not applicable'))?"checked":"";?>/>Not Applicable
&nbsp &nbsp &nbsp <?php echo "<font color = 'red'>". $error4."</font>";?><br><br>


<b><li>Is the HP Laserjet printer efficient in terms of printer ink usage?</b><br><br>


&nbsp&nbsp&nbsp <input type="radio" name="q5" value="Excellent" <?php echo(isset($_POST['q5'])&& ($_POST['q5']=='Excellent'))?"checked":"";?>/>Excellent
&nbsp <input type="radio" name="q5" value="Good" <?php echo(isset($_POST['q5'])&& ($_POST['q5']=='Good'))?"checked":"";?>/>Good
&nbsp <input type="radio" name="q5" value="Average" <?php echo(isset($_POST['q5'])&& ($_POST['q5']=='Average'))?"checked":"";?>/>Average
&nbsp <input type="radio" name="q5" value="Below Average" <?php echo(isset($_POST['q5'])&& ($_POST['q5']=='Below Average'))?"checked":"";?>/>Below Average
&nbsp <input type="radio" name="q5" value="Not applicable" <?php echo(isset($_POST['q5'])&& ($_POST['q5']=='Not applicable'))?"checked":"";?>/>Not Applicable
&nbsp &nbsp &nbsp <?php echo "<font color = 'red'>". $error5."</font>";?><br><br>

<b><li>How would you rate it in comparison with the HP Inkjet Printer in your department?</b><br><br>


&nbsp&nbsp&nbsp <input type="radio" name="q6" value="Excellent" <?php echo(isset($_POST['q6'])&& ($_POST['q6']=='Excellent'))?"checked":"";?>/>Excellent
&nbsp <input type="radio" name="q6" value="Good" <?php echo(isset($_POST['q6'])&& ($_POST['q6']=='Good'))?"checked":"";?>/>Good
&nbsp <input type="radio" name="q6" value="Average" <?php echo(isset($_POST['q6'])&& ($_POST['q6']=='Average'))?"checked":"";?>/>Average
&nbsp <input type="radio" name="q6" value="Below Average" <?php echo(isset($_POST['q6'])&& ($_POST['q6']=='Below Average'))?"checked":"";?>/>Below Average
&nbsp <input type="radio" name="q6" value="Not applicable" <?php echo(isset($_POST['q6'])&& ($_POST['q6']=='Not applicable'))?"checked":"";?>/>Not Applicable
&nbsp &nbsp &nbsp <?php echo "<font color = 'red'>". $error6."</font>";?><br><br>


<b><li>How do you rate the Seagate HDD performance?</b><br><br>


&nbsp&nbsp&nbsp <input type="radio" name="q7" value="Excellent" <?php echo(isset($_POST['q7'])&& ($_POST['q7']=='Excellent'))?"checked":"";?>/>Excellent
&nbsp <input type="radio" name="q7" value="Good" <?php echo(isset($_POST['q7'])&& ($_POST['q7']=='Good'))?"checked":"";?>/>Good
&nbsp <input type="radio" name="q7" value="Average" <?php echo(isset($_POST['q7'])&& ($_POST['q7']=='Average'))?"checked":"";?>/>Average
&nbsp <input type="radio" name="q7" value="Below Average" <?php echo(isset($_POST['q7'])&& ($_POST['q7']=='Below Average'))?"checked":"";?>/>Below Average
&nbsp <input type="radio" name="q7" value="Not applicable" <?php echo(isset($_POST['q7'])&& ($_POST['q7']=='Not applicable'))?"checked":"";?>/>Not Applicable

&nbsp &nbsp &nbsp <?php echo "<font color = 'red'>". $error7."</font>";?><br><br>

<b><li>Is the data transfer rate optimal?</b><br><br>


&nbsp&nbsp&nbsp <input type="radio" name="q8" value="Excellent" <?php echo(isset($_POST['q8'])&& ($_POST['q8']=='Excellent'))?"checked":"";?>/>Excellent
&nbsp <input type="radio" name="q8" value="Good" <?php echo(isset($_POST['q8'])&& ($_POST['q8']=='Good'))?"checked":"";?>/>Good
&nbsp <input type="radio" name="q8" value="Average" <?php echo(isset($_POST['q8'])&& ($_POST['q8']=='Average'))?"checked":"";?>/>Average
&nbsp <input type="radio" name="q8" value="Below Average" <?php echo(isset($_POST['q8'])&& ($_POST['q8']=='Below Average'))?"checked":"";?>/>Below Average
&nbsp <input type="radio" name="q8" value="Not applicable" <?php echo(isset($_POST['q8'])&& ($_POST['q8']=='Not applicable'))?"checked":"";?>/>Not Applicable
&nbsp &nbsp &nbsp <?php echo"<font color = 'red'>". $error8."</font>";?><br><br>

<b><li>How is the brightness and refresh rates for the LG TFT 1129 screen?</b><br><br>


&nbsp&nbsp&nbsp <input type="radio" name="q9" value="Excellent" <?php echo(isset($_POST['q9'])&& ($_POST['q9']=='Excellent'))?"checked":"";?>/>Excellent
&nbsp <input type="radio" name="q9" value="Good" <?php echo(isset($_POST['q9'])&& ($_POST['q9']=='Good'))?"checked":"";?>/>Good
&nbsp <input type="radio" name="q9" value="Average" <?php echo(isset($_POST['q9'])&& ($_POST['q9']=='Average'))?"checked":"";?>/>Average
&nbsp <input type="radio" name="q9" value="Below Average" <?php echo(isset($_POST['q9'])&& ($_POST['q9']=='Below Average'))?"checked":"";?>/>Below Average
&nbsp <input type="radio" name="q9" value="Not applicable" <?php echo(isset($_POST['q9'])&& ($_POST['q9']=='Not applicable'))?"checked":"";?>/>Not Applicable
&nbsp &nbsp &nbsp <?php echo"<font color = 'red'>". $error9."</font>";?><br><br>

<b><li>How would you rate the Netgear NAS storage in your department?</b><br><br>


&nbsp&nbsp&nbsp <input type="radio" name="q10" value="Excellent" <?php echo(isset($_POST['q10'])&& ($_POST['q10']=='Excellent'))?"checked":"";?>/>Excellent
&nbsp <input type="radio" name="q10" value="Good" <?php echo(isset($_POST['q10'])&& ($_POST['q10']=='Good'))?"checked":"";?>/>Good
&nbsp <input type="radio" name="q10" value="Average" <?php echo(isset($_POST['q10'])&& ($_POST['q10']=='Average'))?"checked":"";?>/>Average
&nbsp <input type="radio" name="q10" value="Below Average" <?php echo(isset($_POST['q10'])&& ($_POST['q10']=='Below Average'))?"checked":"";?>/>Below Average
&nbsp <input type="radio" name="q10" value="Not applicable" <?php echo(isset($_POST['q10'])&& ($_POST['q10']=='Not applicable'))?"checked":"";?>/>Not Applicable
&nbsp &nbsp &nbsp <?php echo "<font color = 'red'>". $error10."</font>";?><br><br>
</ol>
<center><input class="button" type="submit" name="submit" value="Submit"/></center><br>
<center><a href="index.php">Cancel Feedback</a></center>
</form>
</body>
</html>