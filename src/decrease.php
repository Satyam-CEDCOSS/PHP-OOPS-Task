<?php
include 'config.php';
$val = $_POST["id"];
if ($_SESSION["sports"][$val]->qty==1) {
    $_SESSION["sports"][$val]->qty=0; 
}
else{
    $_SESSION["sports"][$val]->qty--;
}
?>