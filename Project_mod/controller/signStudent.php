<?php 

require_once '../model_1/model.php';

if(isset($_POST['submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$result=signStudent($username,$password);
if($result)
{
	session_start();
	$_SESSION['s_uname'] = $username;
	header("Location: ../dashStudent.php");
 }      
else
{
	echo "<br>failed ";
}
}
?>