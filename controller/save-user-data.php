<?php
    $method = $_SERVER['REQUEST_METHOD'];

    if ($method != "POST"){
        echo "Invalid request method";
    }
    else{
        $id  = $_POST['id'];
        $name = $_POST['name'];
        $name = $_POST['phone'];
        $name = $_POST['email'];

        

    }

