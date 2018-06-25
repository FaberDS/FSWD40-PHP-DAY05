<?php

    $conn = mysqli_connect("localhost", "root", "root", "google");

    $result = mysqli_query($conn, "SELECT * FROM employees");

    $data = array();
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    echo json_encode($data);
?>