<?php
    session_start();
    include_once 'controller/controller.php';
    if (isset($_SESSION['username'])) {
?>
        <h2>Welcome <?php echo $_SESSION['username']; ?>!</h2>
<?php
    }
?>
        
<?php
    if (isset($_GET['msg'])) {
?>
        <p>Your Response has been saved.</p>
<?php
    }
?>

<h1>Urgent Requirements for blood</h1>
<ul class="quotes">
<?php
    $controller = new Controller();
    $buffer = $controller->getUrgentRequirements();
?>
<?php
    foreach ($buffer as $val) {
?>
        <div class="post">
            <div class="post-container">
                <li class="message"><div id="message-body"><?php echo $val->message; ?></div>
                    <ul class="message_section">
                        <li class="author">help for <?php echo $val->receiptantname; ?>, <?php echo $val->bloodgroup; ?></li>
                        <li class="author">asked by <?php echo $val->username; ?> from <?php echo $val->city; ?>, <?php echo $val->state; ?> (<?php echo $val->mobile; ?>)</li>
                    </ul>
                </li>
            </div>
        </div>
<?php
    }
?>
</ul>            
