<html>
<head>
 <title>Info</title>
</head>
<body>

<hr/>
<h2>$_SERVER</h2>
<?php
 foreach ($_SERVER as $key => $item)
 {
  echo "<li><b>$key:</b> $item<br/></li>";
 }
?>
<hr/>

</body>
</html>

