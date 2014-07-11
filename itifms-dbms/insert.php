<?php
$conn=mysql_connect("localhost","root","");
if(!$conn)
echo "Connection Error!!!";
$res=mysql_select_db("it_infra");
$id=$_POST['staff'];
$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];
$q6=$_POST['q6'];
$q7=$_POST['q7'];
$q8=$_POST['q8'];
$q9=$_POST['q9'];
$q10=$_POST['q10'];
$sql="INSERT INTO feedback(Feedback_ID,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10) VALUES( '$id','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10')";
$val= mysql_query($sql);
if($val)
echo "Successful Query";
else
echo "unsuccessful";

?>
