<html>
<head>
<link rel="shortcut icon"  href="rvce.ico">
<title>Edit Faculty Details</title>

</head>

<body background="rvtrans.jpg">


	<?php
	 	$conn=mysql_connect('localhost','root','');
	 	if(!$conn)
	 		echo 'Connection Error!!';
	 	$res = mysql_select_db('it_infra');

	?>
	<center><h2 style="color:blue;text-decoration:underline;"></center>
</body>

</html>