<?php

session_start();


if(!isset($_SESSION['score']))
{
    $_SESSION['score'] = 0;
    
}

//verify captcha challenge 
if($_POST['solution'] !== $_SESSION['solution'] OR $_SESSION['solution']=='')
{
		    
	unset($_SESSION['solution']);
	header('Location:captcha.php');
		    
		    
}
else
{
		    
	$_SESSION['score'] = $_SESSION['score'] + 1;
	$_SESSION['result'] = $_SESSION['score'];
	unset($_SESSION['solution']);
	header('Location:captcha.php');
}



?>
