<?php
    include_once 'controller/controller.php';
    $state_name = $_REQUEST["state"];
    $controller = new Controller();
    $buffer = $controller->getCity($state_name);

    $str;
    foreach ($buffer as $val) {
        $str.='<option value=' . $val . '>' . $val . '</option>';
    }
    echo $str;
?>
