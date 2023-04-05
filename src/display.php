<?php
include 'config.php';
    $total = 0;
    $txt = "";
    // Display Data 
    // Here Data is Display in Serial order Because data is fetched directly from class 
    foreach ($_SESSION["sports"] as $key => $value) {
        if ($value->qty>0){
            $txt .= "<tr><td><img src='./".$value->img.
            "' width='100' height='100'></td><td>".$value->name."</td><td><button style='padding:2px 10px;' onclick='dec_btn(".$key.")'>-</button>"
            ." ".$value->qty." "."<button style='padding:2px 6px;' onclick='inc_btn(".$key.")'>+</button></td><td>$".$value->qty*$value->price.
            "</td><td><button class='add-to-cart' onclick='deletes(".$key.")'>Delete</button></td></tr>";
        }
    }
        echo $txt;
?>
