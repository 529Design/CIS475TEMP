<!DOCTYPE html>
<html lang="en">

<?php  include 'vars.php'; include 'nav.php'; include 'functions.php';fetchMetaData(__FILE__);?>

<body>

    <div id="nav">
        <ul id="mainNav">
            <li><a href="index.php">Home</a></li>
            <li>|</li>
            <li><a href="#">CIS427</a>
                <ul id="CIS427">
                    <?php listArray($CIS427);?>
                </ul>
            </li>
            <li>|</li>
            <li><a href="#">CIS475</a>
                <ul id="CIS475">
                <?php listArray($CIS475);?>
                </ul>
                <li>|</li>
                <li><a href="index.php#box2">About</a></li>

        </ul>
    </div>

    <div class= "box"id="box1"></div>

    <div class= "box"id="box2"></div>

    <div class= "box"id="box3"></div>

</body>

</html>