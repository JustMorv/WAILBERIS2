<?php

    $connect = mysqli_connect("localhost","root", "", "dbWaildberis");
    if(!$connect){
        die("Error connect");
    }