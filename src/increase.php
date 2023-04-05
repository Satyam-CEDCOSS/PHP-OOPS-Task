<?php
include 'config.php';
$val = $_POST["id"];
$_SESSION["sports"][$val]->qty++;
?>