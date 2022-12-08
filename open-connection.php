<?php
    $con = mysqli_connect("localhost", "root", "shopping_db_cart");

    if ($con == false)
        die("ERROR: counld not connected". mysqli_connect_error());
?>