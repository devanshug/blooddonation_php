<img src="assets/images/blooddonation_logo_banner.png"/>
<ul id="topnavul" class="topnav">
    <?php
        session_start();
        if (isset($_SESSION['username'])) {
    ?>
            <li><a href="wall.php">Home</a></li>
    <?php
        } else {
    ?>
            <li><a href=".">Home</a></li>
    <?php
        }
    ?>
    <li>
        <a href="javascript:void(0)">Know More</a>
        <ul class="subnav">
            <li><a href="facts.php">Facts</a></li>
            <li><a href="qualification.php">Qualification</a></li>
            <li><a href="famousquotes.php">Famous Quote</a></li>
            <li><a href="calculate.php">Calculate</a></li>
            <li><a href="bloodgroupsystem.php">Blood Group Systems</a></li>
        </ul>
    </li>
    <?php
        if (isset($_SESSION['username'])) {
            ?>
            <li><a href="urgent.php">Urgent Requirement</a></li>
            <li><a href="logout.php">Logout</a></li>
            <?php
        } else {
    ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
    <?php
        }
    ?>
</ul>