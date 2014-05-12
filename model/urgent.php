<?php

class urgent {

    public $username;
    public $bloodgroup;
    public $receiptantname;
    public $mobile;
    public $location;
    public $state;
    public $city;
    public $message;

    function __construct($username, $bloodgroup, $receiptantname, $mobile, $location, $state, $city, $message) {
        $this->username = $username;
        $this->bloodgroup = $bloodgroup;
        $this->receiptantname = $receiptantname;
        $this->mobile = $mobile;
        $this->location = $location;
        $this->state = $state;
        $this->city = $city;
        $this->message = $message;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getBloodgroup() {
        return $this->bloodgroup;
    }

    public function getReceiptantname() {
        return $this->receiptantname;
    }

    public function getMobile() {
        return $this->mobile;
    }

    public function getLocation() {
        return $this->location;
    }

    public function getState() {
        return $this->state;
    }

    public function getCity() {
        return $this->city;
    }

    public function getMessage() {
        return $this->message;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setBloodgroup($bloodgroup) {
        $this->bloodgroup = $bloodgroup;
    }

    public function setReceiptantname($receiptantname) {
        $this->receiptantname = $receiptantname;
    }

    public function setMobile($mobile) {
        $this->mobile = $mobile;
    }

    public function setLocation($location) {
        $this->location = $location;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setMessage($message) {
        $this->message = $message;
    }
}

?>
