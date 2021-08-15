<?php   
require_once '../model_2/model.php';


if (isset($_POST['addAccount']))
{ 
	$data['username'] = $_POST['username'];
	$data['email'] = $_POST['email'];
	$data['amount'] = $_POST['amount'];
	$data['comment'] =$_POST['comment_text'];
}

  if (addAccount($data)) 
  {
  	echo '<br>Messege sent!!';
  }
 
else 
{
	echo 'There is some problem. Try again.';
}

?>