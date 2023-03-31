<?php
include 'config.php';
    $total = 0;
    $txt = "";
    foreach ($_SESSION["product"] as $key => $value) {
        // $total +=  $_SESSION["product"][$key]*$data[$key]["price"];
        $txt .= "<tr><td><img src='./".$_SESSION["sports"][$key]->img.
        "' width='100' height='100'></td><td>".$_SESSION["sports"][$key]->name."</td><td>"
        .$_SESSION["product"][$key]."</td><td>".$_SESSION["product"][$key]*$_SESSION["sports"][$key]->price.
        "</td><td><button class='add-to-cart' onclick='deletes(".$key.")'>Delete</button></td></tr>";
    }
        echo $txt;
?>
