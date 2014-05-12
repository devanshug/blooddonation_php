<?php

require 'content/CaptchasDotNet.php';

// See query.php for documentation
$captchas = new CaptchasDotNet('devanshug', '6HdMmG1EgKnJEOqHfQ5r9ywhkUbcM42UaeA0ffK1',
                                'captchas/captchasnet-random-strings','3600',
                                'abcdefghkmnopqrstuvwxyz0123456789','6',
                                '240','80','000088');

// Read the form values
$password = $_REQUEST['password'];
$random_string = $_REQUEST['random'];

if (!$captchas->validate ($random_string))
  {
    echo 'Invalid Random!!!';
  }
  // Check, that the right CAPTCHA password has been entered and
  // return an error message otherwise.
  elseif (!$captchas->verify($password)) {
    echo 'Incorrect Captcha!!!';
}
else {
    echo 'Verified Human!!!';
}
?>
