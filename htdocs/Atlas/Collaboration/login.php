<?php
include_once("includes/applicationtop.php");

header("location:https://login.cern.ch/adfs/ls/?wa=wsignin1.0&wreply=https%3a%2f%2fcernaccount.web.cern.ch%2fcernaccount%2f&wct=2009-11-25T10%3a55%3a02Z&wctx=http://www.procab-group.com/atlas/session.php?id=".generateCode(6));
?>

<!--<iframe frameborder="0" width="100%" height="100%" src='https://login.cern.ch/adfs/ls/?wa=wsignin1.0&wreply=https%3a%2f%2fcernaccount.web.cern.ch%2fcernaccount%2f&wct=2009-11-25T10%3a55%3a02Z&wctx=http://www.procab-group.com/atlas/session.php'>-->