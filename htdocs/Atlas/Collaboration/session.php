<?php
session_start();
if(isset($_GET['id']))
{
	if($_GET['id']==$_SESSION['security_code'])
	{
	$_SESSION['valid_code']=$_SESSION['security_code'];
	header("location:http://www.procab-group.com/atlas/");
	}
	else
	{
	header("location:http://www.procab-group.com/atlas/");
	}
}

?>