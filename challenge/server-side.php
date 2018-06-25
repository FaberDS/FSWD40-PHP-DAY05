<?php

    $conn = new mysqli("localhost", "root", "root", "employees");

    $name = $_POST['first_name'];


    if($conn -> query("SELECT employees (name, salary) VALUES ('$name')")){
        echo "Succesfully search";
    } else {
        echo "Unsuccesful search";
    }

?>