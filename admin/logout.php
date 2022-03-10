<?php 
session_start();
header("location:index.php");
echo "Sucessfully logout..........";
session_destroy();

?>