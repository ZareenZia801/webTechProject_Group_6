<?php  
require_once '../model_1/model.php';
session_start();

if (isset($_POST['changePass'])) 
{
	$student = showStudent($_SESSION['s_uname']);

	if($_POST['Cpass']==$student['Password'])
	{
		if($_POST['Npass']==$_POST['Rpass'])
		{
			if (changePass($_SESSION['s_uname'],$_POST['Npass'] ))
			  {

			  	header('Location: ../viewProfileStudent.php');
			  	echo '<br>Successfully updated!!';
			  
			  }
		}

	}
	else 
	{
		echo 'current password is incorrect. try again...';
	}

 
}
else 
	{
		echo 'You are not allowed to access this page.';
	} 



?>