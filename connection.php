<?php
    $conn = mysqli_connect("localhost","root","salary_system");
    if(!$conn){
        die("connection faild." mysqli_fail());

    }
    else echo 'connected';
    ?>