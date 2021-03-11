<?php
header('Content-Type: application/json');

$json = file_get_contents('php://input');
$data = json_decode($json, true);

echo "PHP: name:".$data["name"]." score: ".$data["score"]."\n";

?>
