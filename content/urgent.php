<?php
    include_once 'controller/controller.php';
    $controller = new Controller();
    $buffer = $controller->getStates();
    $groups = $controller->getBloodGroups();
?>
<div id="content-main">
    <div class="container">
        <div id="fillformtitle">
            Urgent Blood Registration
        </div>
        <form method="post" action="urgent2.php" id="fillform" class="group">
            <p id="error"></p>
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
                <div class="inputtext"><label for="name">Recipient Name : </label></div>
                <div class="inputcomponent"><input type="text" name="name" id="name" class="textcomponent" value="Enter the Recipient's Name" required/></div>
            </div>
            <div class="inputelement">
                <div class="inputtext"><label for="mobile">Mobile Number : </label></div>
                <div class="inputcomponent"><input type="text" name="mobile" id="mobile" class="textcomponent" value="Enter number available 24*7" required/></div>
            </div>
            <div class="inputelement">
                <div class="inputtext"><label for="location">Location : </label></div>
                <div class="inputcomponent"><input type="text" name="location" id="location" class="textcomponent" value="Name of hospital etc." required/></div>
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
                <div class="inputtext"><label for="message">Enter your message : </label></div>
                <div class="inputcomponent"><textarea name="message" id="message" class="textcomponent textareacomponent" value="Enter your message" required></textarea></div>
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
                <input type="submit" name="submit" id="submit" class="buttoncomponent" value="Ask for help"/>
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