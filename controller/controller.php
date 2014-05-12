<?php

include_once 'model/main_model.php';
include_once 'model/user.php';

class Controller {

    public $model;

    function __construct() {
        $this->model = new Functions();
    }

    function getStates() {
        $buffer = $this->model->getStates();
        return $buffer;
    }

    function getCity($state) {
        $buffer = $this->model->getCity($state);
        return $buffer;
    }

    function getBloodGroups() {
        $buffer = $this->model->getBloodGroups();
        return $buffer;
    }

    function getRegisteredDonors() {
        $buffer = $this->model->getRegisteredDonors();
        return $buffer;
    }

    function addUser($username, $password, $email, $firstname, $lastname, $bloodgroup, $gender, $day, $month, $year, $state, $city, $mobile, $pic, $fname) {
        $user = new user($username, $password, $email, $firstname, $lastname, $bloodgroup, $gender, $day, $month, $year, $state, $city, $mobile, $pic, $fname);
        $this->model->addUser($user);
    }

    function addUrgentRequirement($username, $bloodgroup, $receiptantname, $mobile, $location, $state, $city, $message) {
        $this->model->addUrgentRequirement($username, $bloodgroup, $receiptantname, $mobile, $location, $state, $city, $message);
    }

    function getUrgentRequirements() {
        $buffer = $this->model->getUrgentRequirements();
        return $buffer;
    }

    function checkUser($username) {
        $buffer = $this->model->checkUser($username);
        return $buffer;
    }
}
?>
