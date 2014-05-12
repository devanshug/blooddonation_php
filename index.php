<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blooddonation</title>
        <script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
    </head>
    <body>
        <div id="main-container">
            <nav id="topnav" class="topnav">
                <?php include 'nav.php'; ?>
            </nav>
            <div class="clear"></div>
            <div id="banner">
                <?php include 'banner.php'; ?>
            </div>
            <div id="content-area">
                <div id="content">
                    <?php include 'content/wallIndex.php'; ?>
                </div>
                <div id="rightarea">
                    <?php include 'donorlist.php'; ?>
                </div>
            </div>
            <div class="clear"></div>
            <div id="footer">
                <?php include 'footer.php'; ?>
            </div>
        </div>
    </body>
</html>