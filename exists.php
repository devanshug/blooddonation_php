<?php
    $username = $_REQUEST["username"];

    include_once 'controller/controller.php';
    $controller = new Controller();

    $buffer = $controller->checkUser($username);
    echo $buffer;
?>
