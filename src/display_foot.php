<?php
include 'config.php';
    $total = 0;
    foreach ($_SESSION["sports"] as $key => $value) {
        $total +=  $value->qty*$value->price;
    }
        echo "<tr><td></td><td></td><td></td><td>Grand Total: $".$total."</td><td><button class='add-to-cart' onclick='empty()'>Empty Cart</button></td></tr>";
?>
<!-- Footer Display  -->
