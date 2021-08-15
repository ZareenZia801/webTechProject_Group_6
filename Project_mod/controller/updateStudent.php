<?php  
require_once '../model_1/model.php';
session_start();

if (isset($_POST['updateStudent'])) 
{
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['ins'] = $_POST['ins'];
	$data['phone'] = $_POST['phone'];



 if (updateStudent($_SESSION['s_uname'], $data))
  

  	echo '<br>Successfully updated!!';
  	
  	header('Location: ../viewProfileStudent.php');
  }
 
else 
{
	echo 'You are not allowed to access this page.';
}


?>