<?php
include_once "config.php";
$val=$_POST["value"];
$_SESSION["product"][$val]++;
// print_r($_SESSION["sports"][$val]);
// session_unset()
// print_r($_SESSION["sports"][$_POST["value"]]->id);
// echo $_SESSION["sports"][$_POST["value"]]->id;

?>