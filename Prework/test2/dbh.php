<?php

    $servername = "localhost";

    $username = "root";

    $password = "root";

    $dbname = "ajax";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if($conn){
        echo "success";
    } else {
        echo "fail";
    }
?>