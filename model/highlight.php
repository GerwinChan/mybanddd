<?php




$result = $mysqli->query("SELECT * FROM highlights");

$result = convertResultToArray($result);

?>
