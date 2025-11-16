<?php
$h = "localhost";
$u = "root";
$p = "";
$d = "mydb";
$c = new mysqli($h,$u,$p,$d);
if($c->connect_error){die("x");}
?>
