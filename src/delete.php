<?php
include 'config.php'; 
$val = $_POST["id"];
$_SESSION["sports"][$val]->qty=0; 
echo ($_SESSION["sports"][$val]->qty);
?>
<!-- Delete Function  -->