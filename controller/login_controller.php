<?php

include_once 'model/LoginFunctions.php';

class LoginController {

    public $model;

    function __construct() {
        $this->model = new LoginFunctions();
    }

    function checkLogin($username, $password) {
        $ans = $this->model->checkLogin($username, $password);
        return $ans;
    }
}

?>
