<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ATLAS Experiment</title>
<link rel="stylesheet" type="text/css" href="<?=Baseurl?>css/style.css" />
<link rel="shortcut icon" href="/Atlas/Collaboration/images/atlasblue.ico">


<!--[if lt IE 8]>
<script src="script/IE8.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript" src="<?=Baseurl?>script/jquery.js"></script>
<script type="text/javascript" src="<?=Baseurl?>script/collapDiv.js"></script>
<script type="text/javascript" src="<?=Baseurl?>script/animatedcollapse.js">



<script src="<?=Baseurl?>script/jquery-1.2.1.min.js" type="text/javascript"></script>
<script src="<?=Baseurl?>script/menu.js" type="text/javascript"></script>

<script src="<?=Baseurl?>script/javascript.js" type="text/javascript"></script>
</head>

<body>
<div id="wrapper">
	<div id="topRow">
    	<div id="login" class="container"> <?php if($_SESSION['valid_code']=="") {?><a href="<?=Baseurl?>login/login.php" class="loginBtn" >Login</a> <?php } else {?> <a href="logout.php"><img src="images/logout.jpg"  style="padding:4px;" /></a><span class="userinfo"><?=$_SESSION['HTTP_ADFS_FULLNAME']?>&nbsp;&nbsp;&nbsp;<?=$_SESSION['HTTP_ADFS_EMAIL']?></span><?php } ?>
        	 <div class="slogun"><p><a href="http://www.cern.ch/" title="Go to the CERN homepage">European Organization for Nuclear Research</a></p></div>
             <div class="clearfix"></div>
        </div>       
    </div><!--end tophead-->
    <div id="header">
    	<div id="logoWp" class="container"><h1><a href="<?=Baseurl?>index.php">Atlas Experiment</a></h1>
           	<ul class="topNav">
            	<li><a href="<?=Baseurl?>index.php" <?=$class?>>Collaboration</a></li>
                <li><em></em><a href="<?=Baseurl?>atlas_live.php" <?=$class1?>>ATLAS Now</a></li>
                <li><em></em><a href="http://atlas.ch/">ATLAS Public</a></li>
                <li class="last-child"><em></em><a href="http://www.cern.ch/">CERN&nbsp;</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div><!--end header-->
<?php 

include_once 'xml_regex.php';
?>
