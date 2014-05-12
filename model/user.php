<?php

class user {

    public $username;
    public $password;
    public $email;
    public $firstname;
    public $lastname;
    public $bloodgroup;
    public $gender;
    public $day;
    public $month;
    public $year;
    public $state;
    public $city;
    public $mobile;
    public $pic;
    public $fname;

    function __construct($username, $password, $email, $firstname, $lastname, $bloodgroup, $gender, $day, $month, $year, $state, $city, $mobile, $pic, $fname) {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->bloodgroup = $bloodgroup;
        $this->gender = $gender;
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
        $this->state = $state;
        $this->city = $city;
        $this->mobile = $mobile;
        $this->pic = $pic;
        $this->fname = $fname;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function setBloodgroup($bloodgroup) {
        $this->bloodgroup = $bloodgroup;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function setDay($day) {
        $this->day = $day;
    }

    public function setMonth($month) {
        $this->month = $month;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setMobile($mobile) {
        $this->mobile = $mobile;
    }

    public function setPic($pic) {
        $this->pic = $pic;
    }

    public function setFname($fname) {
        $this->fname = $fname;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getBloodgroup() {
        return $this->bloodgroup;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getDay() {
        return $this->day;
    }

    public function getMonth() {
        return $this->month;
    }

    public function getYear() {
        return $this->year;
    }

    public function getState() {
        return $this->state;
    }

    public function getCity() {
        return $this->city;
    }

    public function getMobile() {
        return $this->mobile;
    }

    public function getPic() {
        return $this->pic;
    }

    public function getFname() {
        return $this->fname;
    }
}

?>
