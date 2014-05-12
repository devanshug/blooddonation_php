<?php
    include_once 'controller/controller.php';
    $controller = new Controller();
    $buffer = $controller->getStates();
    $groups = $controller->getBloodGroups();
?>
<div id="content-main">
    <div class="container">
        <div id="fillformtitle">
            Registration Form
        </div>
        <form action='register2.php' method="post" class="group" id="fillform" enctype="multipart/form-data">
            <p id="error"></p>
            <div class="inputelement">
                <div class="inputtext"><label for="username">User name : </label></div>
                <div class="inputcomponent"><input type="text" name="username"  maxlength="30" id="username" class="textcomponent" value="Enter a Username"/></div>
            </div>
            <div class="inputelement">
                <div class="inputtext"><label for="password1">Password : </label></div>
                <div class="inputcomponent"><input type="password" name="password1" id="password1" class="textcomponent" value="Enter your Password"/></div>
            </div>
            <div class="inputelement">
                <div class="inputtext"><label for="password2">Confirm Password : </label></div>
                <div class="inputcomponent"><input type="password" name="password2" id="password2" class="textcomponent" value="Confirm Password"/></div>
            </div>
            <div class="inputelement">
                <div class="inputtext"><label for="email">Email : </label></div>
                <div class="inputcomponent"><input type="text" name="email" id="email" class="textcomponent" value="Enter your mail address"/></div>
            </div>
            <div class="inputelement">
                <div class="inputtext"><label for="firstname">First name : </label></div>
                <div class="inputcomponent"><input type="text" name="firstname" id="firstname" class="textcomponent" value="Enter your First Name"/></div>
            </div>
            <div class="inputelement">
                <div class="inputtext"><label for="lastname">Last name : </label></div>
                <div class="inputcomponent"><input type="text" name="lastname" id="lastname" class="textcomponent" value="Enter your Last Name"/></div>
            </div>
            <div class="inputelement">
                <div class="inputtext"><label for="bloodgroup">Blood Group : </label></div>
                <div class="inputcomponent">
                    <select name="bloodgroup" id="bloodgroup" class="comboboxcomponent">
                        <?php
                            foreach ($groups as $val) {
                        ?>
                                <option value="<?php echo $val ?>"><?php echo $val ?></option>
                        <?php
                            }
                        ?>

                    </select>
                </div>
            </div>
            <div class="inputelement">
                <div class="inputtext"><label for="gender">Gender : </label></div>
                <div class="inputcomponent">
                    <select name="gender" id="gender" class="comboboxcomponent">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
            <div class="inputelement">
                <div class="inputtext"><label for="dob">Date of Birth : </label></div>
                <div class="inputcomponent" id="dob" name="dob">
                    <select name="day" id="day" class="comboboxcomponent">
                        <script type="text/javascript">
                            for(var i=1;i<=31;i++)
                                document.write("<option value="+i+">"+i+"</option>");
                        </script>
                    </select>

                    <select name="month" id="month" class="comboboxcomponent">
                        <option value="1">January</option>
                        <option value="2">Feburary</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>

                    <select name="year" id="year" class="comboboxcomponent">
                        <script type="text/javascript">
                            for(var i=1996;i>=1900;i--)
                                document.write("<option value="+i+">"+i+"</option>");
                        </script>
                    </select>
                </div>
            </div>
            <div class="inputelement">
                <div class="inputtext"><label for="state">State : </label></div>
                <div class="inputcomponent">
                    <select name="state" id="state" class="comboboxcomponent">
                        <option value="">---Select---</option>
                        <?php
                            foreach ($buffer as $val) {
                        ?>
                                <option value="<?php echo $val ?>"><?php echo $val ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="inputelement">
                <div class="inputtext"><label for="city">City : </label></div>
                <div class="inputcomponent">
                    <select name="city" id="city" class="comboboxcomponent">
                        <!-- City -->
                    </select>
                </div>
            </div>
            <div class="inputelement">
                <div class="inputtext"><label for="mobile">Mobile Number : </label></div>
                <div class="inputcomponent"><input type="text" name="mobile"  id="mobile" class="textcomponent"  value="Mobile Number"/></div>
            </div>
            <div class="inputelement">
                <div class="inputtext"><label for="pic">Your Pic : </label></div>
                <div class="inputcomponent"><input type="file" name="pic" id="pic" class="uploadtab" accept="image/*"/></div>
            </div>
            <?php
                require 'CaptchasDotNet.php';
                $captchas = new CaptchasDotNet('devanshug', '6HdMmG1EgKnJEOqHfQ5r9ywhkUbcM42UaeA0ffK1',
                                'captchas/captchasnet-random-strings','3600',
                                'abcdefghkmnopqrstuvwxyz0123456789','6',
                                '240','80','000088');
            ?>
            <div id="captcha_input">
                    <input type="hidden" name="random" id="random" value="<?php echo $captchas->random(); ?>" />
                    <div class="inputtext"><label for="captcha.net">Enter the captcha : </label></div>
                    <div id="captcha_image"><img src="<?php echo $captchas->image_url(); ?>" name="captcha.net" id="captcha.net"/></div>				 <!-- Captcha Image -->
                    <div class="inputcomponent"><input type="text" name="captchacode"  id="captchacode" class="textcomponent" value="Enter the captcha code"/></div>
                    <input type="button" name="captchaverify" id="captchaverify" class="buttoncomponent" value="Verify My Captcha Code"/>
                    <p id="responsestring"></p>
            </div>
            <div id="submitbutton">
                <input type="submit" name="submit" id="submit" class="buttoncomponent" value="Register"/>
            </div>
            <script type="text/javascript">
                var cap_id = 'captcha.net';
            </script>
            <script type="text/javascript" src="assets/js/captchaapi.js"></script>
            <script type="text/javascript" src="assets/js/appjs.js"></script>
            <script type="text/javascript" src="assets/js/validation.js"></script>
        </form>
    </div>
</div>