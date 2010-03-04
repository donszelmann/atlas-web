<?php
session_start();
include_once("includes/configure.php");

if($_SERVER['REQUEST_URI']=="/Atlas/Collaboration/atlas_live.php")
{
$class1="class='active'";
}
else if($_SERVER['REQUEST_URI']=="/Atlas/Collaboration/index.php")
{
$class="class='active'";
}
else if($_SERVER['REQUEST_URI']=="/Atlas/Collaboration/")
{
$class="class='active'";
}

function generateCode($characters) {
		/* list all possible characters, similar looking characters and vowels have been removed */
		$possible = '23456789bcdfghjkmnpqrstvwxyz';
		$code = '';
		$i = 0;
		while ($i < $characters) { 
			$code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
			$i++;
		}
		if($_SESSION['security_code']=="")
		{
		$_SESSION['security_code']=$code;
		}
		return $code;
	}
function make_safe($string) {
    $string = preg_replace('#<!\[CDATA\[.*?\]\]>#s', '', $string);
    $string = strip_tags($string);
    // The next line requires PHP 5, unfortunately.
    //$string = htmlentities($string, ENT_NOQUOTES, 'UTF-8', false);
    // Instead, use this set of replacements in PHP 4.
    $string = str_replace('<', '&lt;', $string);
    $string = str_replace('>', '&gt;', $string);
    $string = str_replace('(', '&#40;', $string);
    $string = str_replace(')', '&#41;', $string);
    return $string;
}	
?>
