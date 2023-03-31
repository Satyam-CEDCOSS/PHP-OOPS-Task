<?php
session_start();
$val = $_POST["id"];
array_splice($_SESSION["product"],$val,1);
?>
