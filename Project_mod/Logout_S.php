<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Log Out</title>
</head>
<body>
<?php 

session_start();

if (isset($_SESSION['s_uname'])) {
	session_destroy();
	header("location:web page.php");
	
}

else{
	header("location:web page.php");
}

 ?>
</body>
</html>