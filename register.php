<?php
    include_once 'controller/login_controller.php';

    if (!empty($_POST)) {
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        $controller = new LoginController();
        $ans = $controller->checkLogin($username, $password);

        if ($ans == true) {
            $url = "wall.php";
            session_start();
            $_SESSION['username'] = $username;
            header('Location: ' . $url);
        } else {
            $url = "login.php";
            $msg = "Invalid Login Details";
            header('Location: ' . $url . '?message=' . $msg);
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blooddonation</title>
        <script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
    </head>
    <body>
        <div id="main-container">
            <nav id="topnav" class="topnav">
                <?php include 'nav.php'; ?>
            </nav>
            <div class="clear"></div>
            <div id="content-area">
                <div id="content">
                    <?php include 'content/register.php'; ?>
                </div>
                <div id="rightarea">
                    <?php include 'donorlist.php'; ?>
                </div>
            </div>
            <div class="clear"></div>
            <div id="footer">
                <?php include 'footer.php'; ?>
            </div>
        </div>
    </body>
</html>
