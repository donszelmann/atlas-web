<?php
session_start();


if(isset($_SESSION['url']))
{
	if($_SESSION['url']=="443")
	{
	$url="https";
	}
	if($_SESSION['url']=="80")
	{
	$url="http";
	}
}
if(isset($_SERVER['HTTP_ADFS_LOGIN']))
	{
	$_SESSION['valid_code']=$_SERVER['HTTP_ADFS_LOGIN'];
	$_SESSION['HTTP_ADFS_FULLNAME']=$_SERVER['HTTP_ADFS_FULLNAME'];
	$_SESSION['HTTP_ADFS_EMAIL']=$_SERVER['HTTP_ADFS_EMAIL'];
	$_SESSION['HTTP_ADFS_GROUP']=$_SERVER['HTTP_ADFS_GROUP'];
	if ( preg_match ("/\batlas-readaccess-active-members\b/", $_SERVER['HTTP_ADFS_GROUP'] ))

           {

             $_SESSION['ATLAS-MEMBER']=1;

           }

           else

           {

             $_SESSION['ATLAS-MEMBER']=0;

           }
$_SESSION['ATLAS-MEMBER']=1;


	if(isset($_SESSION['geturl']))
	{
	header("location:https://atlas.web.cern.ch/Atlas/Collaboration/atlas_live.php");
	}
	else
	{
	header("location:https://atlas.web.cern.ch/Atlas/Collaboration/");
	}
	}

?>