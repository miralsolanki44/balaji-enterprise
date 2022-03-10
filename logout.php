<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
session_start();
header("location:index.php");
//echo "Sucessfully logout..........";

echo "Sucessfully logout..........";
session_destroy();

?>
</body>
</html>

