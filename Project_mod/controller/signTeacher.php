<?php 

require_once '../model/model.php';

if(isset($_POST['submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$result=signTeacher($username,$password);
if($result)
{
	session_start();
	$_SESSION['uname'] = $username;
	header("Location: ../dash.php");
 }      
else
{
	echo "<br>failed ";
}
}

if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 10);
	setcookie ("password",$_POST["password"],time()+ 10);
	echo "Cookies Set Successfuly <br>";
	echo "Welcome ". $_POST["username"];
} else {
	setcookie("username","");
	setcookie("password","");
	echo "Cookies Not Set.";
}
?>