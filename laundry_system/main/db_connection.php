<?php

$conn = new mysqli('localhost', 'root','','laundry_db');

    if(!$conn){
        die(mysqli_error($conn));
    }
    //echo "connected";

?>