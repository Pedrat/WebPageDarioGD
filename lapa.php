<?php
header('Content-Type: text/html; charset=iso-8859-15');




$ola=$_POST["crypt"];
$python = htmlentities(exec("python3 python.py \"".$ola."\""));
echo $python;



 ?>
