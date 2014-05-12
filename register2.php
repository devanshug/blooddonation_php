<?php
    include 'controller/controller.php';
    include_once 'controller/login_controller.php';

    $username = $_REQUEST["username"];
    $password = $_REQUEST["password1"];
    $email = $_REQUEST["email"];
    $firstname = $_REQUEST["firstname"];
    $lastname = $_REQUEST["lastname"];
    $bloodgroup = $_REQUEST["bloodgroup"];
    $gender = $_REQUEST["gender"];
    $day = $_REQUEST["day"];
    $month = $_REQUEST["month"];
    $year = $_REQUEST["year"];
    $state = $_REQUEST["state"];
    $city = $_REQUEST["city"];
    $mobile = $_REQUEST["mobile"];
    $pic = $_FILES["pic"];
    $temp = explode(".", $pic["name"]);
    $fname = $username . "." . end($temp);
    $fname = "users/pic/" . $fname;

    $Signupcontroller = new Controller();
    $Signupcontroller->addUser($username, $password, $email, $firstname, $lastname, $bloodgroup, $gender, $day, $month, $year, $state, $city, $mobile, $pic, $fname);

    $url = "wall.php";
    
    session_start();
    $_SESSION['username'] = $username;

    header('Location: ' . $url);
?>