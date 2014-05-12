<?php

require_once 'model/dbconfig.php';
require_once 'model/urgent.php';

class Functions {

    function __construct() {
        
    }

    function getStates() {
        $con = get_connection();
        $result = mysqli_query($con, "select * from state");
        $buffer = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($buffer, $row["state_name"]);
        }
        mysqli_close($con);
        return $buffer;
    }

    function getCity($state) {
        $con = get_connection();
        $result = mysqli_query($con, "select * from city where state_name='$state'");
        $buffer = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($buffer, $row["city_name"]);
        }
        mysqli_close($con);
        return $buffer;
    }

    function getBloodGroups() {
        $con = get_connection();
        $result = mysqli_query($con, "select * from bloodgroup");
        $buffer = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($buffer, $row["bloodgroup"]);
        }
        mysqli_close($con);
        return $buffer;
    }

    function addUser(User $user) {
        $con = get_connection();
        $result = mysqli_query($con, "select * from auth_user where username='$user->getUsername()'");
        if ($row = mysqli_fetch_array($result)) {
            echo "Username already registered. Please try again";
        } else {
            if ((($user->pic["type"] == "image/gif") || ($user->pic["type"] ==
                    "image/jpeg") || ($user->pic["type"] == "image/jpg") || ($user->pic["type"]
                    == "image/pjpeg") || ($user->pic["type"] == "image/x-png") || ($user->pic
                    ["type"] == "image/png"))) {
                if ($user->pic["error"] > 0) {
                    
                } else {
                    if (file_exists($user->fname)) {
                        
                    } else {
                        move_uploaded_file($user->pic["tmp_name"], $user->fname);
                    }
                    $sql1 = "INSERT INTO auth_user ( username, password) VALUES ('$user->username', '$user->password')";
                    $sql = "INSERT INTO details ( username,  email, firstname,lastname,bloodgroup,gender,day,month,year,state,city,mobile,pic) VALUES ('$user->username', '$user->email','$user->firstname', '$user->lastname', '$user->bloodgroup', '$user->gender', $user->day, $user->month, $user->year, '$user->state', '$user->city', '$user->mobile', '$user->fname')";
                    if (!mysqli_query($con, $sql1)) {
                        die('Error: ' . mysqli_error($con));
                    }
                    if (!mysqli_query($con, $sql)) {
                        die('Error: ' . mysqli_error($con));
                    }
                    echo "User Successfully Registered";
                    mysqli_close($con);
                }
            } else {
                $sql1 = "INSERT INTO auth_user ( username, password) VALUES ('$user->username', '$user->password')";
                $sql = "INSERT INTO details ( username,  email, firstname,lastname,bloodgroup,gender,day,month,year,state,city,mobile) VALUES ('$user->username', '$user->email','$user->firstname', '$user->lastname', '$user->bloodgroup', '$user->gender', $user->day, $user->month, $user->year, '$user->state', '$user->city', '$user->mobile')";
                if (!mysqli_query($con, $sql1)) {
                    die('Error: ' . mysqli_error($con));
                }
                if (!mysqli_query($con, $sql)) {
                    die('Error: ' . mysqli_error($con));
                }
                mysqli_close($con);
            }
        }
    }

    function getRegisteredDonors() {
        $con = get_connection();
        $bloodgroups = $this->getBloodGroups();
        $buffer = array();
        foreach ($bloodgroups as $val) {
            $result = mysqli_query($con, "select count(*) as total from details where bloodgroup='$val'");
            $row = mysqli_fetch_array($result);
            $temp = $row["total"];
            array_push($buffer, $temp);
        }
        mysqli_close($con);
        return $buffer;
    }

    function addUrgentRequirement($username, $bloodgroup, $receiptantname, $mobile, $location, $state, $city, $message) {
        $con = get_connection();
        $sql = "INSERT INTO urgentblood ( username, bloodgroup,name,mobile,location,state,city,message) VALUES ('$username', '$bloodgroup','$receiptantname', '$mobile','$location', '$state','$city', '$message')";
        if (!mysqli_query($con, $sql)) {
            die('Error: ' . mysqli_error($con));
        }
        mysqli_close($con);
    }

    function getUrgentRequirements() {
        $con = get_connection();
        $result = mysqli_query($con, "select * from urgentblood");
        $buffer = array();
        while ($row = mysqli_fetch_array($result)) {
            $urgent = new urgent($row["username"], $row["bloodgroup"], $row["name"], $row["mobile"], $row["location"], $row["state"], $row["city"], $row["message"]);
            array_push($buffer, $urgent);
        }
        mysqli_close($con);
        return $buffer;
    }

    function checkUser($username) {
        $con = get_connection();
        $result = mysqli_query($con, "select * from auth_user where username='$username'");
        if ($row = mysqli_fetch_array($result)) {
            return "Username Exists";
        }
        mysqli_close($con);
    }

}

?>
