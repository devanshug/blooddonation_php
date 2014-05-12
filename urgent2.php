<?php
    include 'controller/controller.php';

    session_start();
    $bloodgroup = $_REQUEST["bloodgroup"];
    $receiptantname = $_REQUEST["name"];
    $mobile = $_REQUEST["mobile"];
    $location = $_REQUEST["location"];
    $state = $_REQUEST["state"];
    $city = $_REQUEST["city"];
    $message = $_REQUEST["message"];
    $username = $_SESSION['username'];

    $controller = new Controller();
    $controller->addUrgentRequirement($username, $bloodgroup, $receiptantname, $mobile, $location, $state, $city, $message);

    $url = "wall.php?msg=Your response has been recorded successfully.";
    header('Location: ' . $url);
?>

