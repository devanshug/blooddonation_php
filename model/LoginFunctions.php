<?php

require_once 'model/dbconfig.php';

class LoginFunctions {

    function __construct() {
    }

    function checkLogin($username, $password) {
        $con = get_connection();
        $result = mysqli_query($con, "select * from auth_user where username='$username' and password='$password'");
        if ($row = mysqli_fetch_array($result)) {
            //$ans=new User($row["name"], "", $row["email"], $row["profilepic"],"");
            mysqli_close($con);
            return true;
        } else {
            mysqli_close($con);
            $ans = null;
            return $ans;
        }
    }
}
?>
