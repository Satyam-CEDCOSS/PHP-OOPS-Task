<?php
include_once "config.php"; 
$val=$_POST["value"];
$_SESSION["sports"][$val]->qty++;
?>