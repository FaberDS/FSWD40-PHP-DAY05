<?php

    header("Content-Type: apllication/json; charset_UTF-8");

    $obj = json_decode($_POST['x'], false);

    $conn = new mysqli("localhost", "root", "root", "google");

    $result = $conn->query("SELECT name FROM " . $obj->table . "WHERE position = " . $obj->position);

    $outp = array();

    $outp = $result->fetch_all(MYSQLI_ASSOC);

    echo json_encode($outp);

?>