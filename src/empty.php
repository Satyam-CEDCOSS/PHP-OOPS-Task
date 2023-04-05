<?php
include_once "config.php"; 
foreach ($_SESSION["sports"] as $key => $value){
    $value->qty=0;
}
?>