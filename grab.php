<?php
header("Content-Type: application/json");
include "dbc.php";
$q = $c->query("SELECT * FROM users");
$r = [];
while($row = $q->fetch_assoc()){ $r[] = $row; }
echo json_encode(["status"=>"ok","count"=>count($r),"data"=>$r], JSON_PRETTY_PRINT);
?>
