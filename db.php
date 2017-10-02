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
    
    <div class= "box" id="box1">
        <div class="wrapper" id="dbWrapper">
            <div id ="downloadLinks">
                    <?php months_to_sql(); ?><br>       
                    <a href='download.php?file=index.php' download>index.php download</a><br>
                    <a href='download.php?file=vars.php' download>vars.php download</a><br>
                    <a href='download.php?file=functions.php' download>functions.php download</a><br>
                    <a href='download.php?file=navs.php' download>navs.php download</a><br>
                    <a href='download.php?file=db.php' download>db.php download</a><br>
                    <a href='download.php?file=mysqlmonths.png' download>mysqlmonths.png download</a><br>
                    <p>Scroll down to view monthsTable in phpMyAdmin</p>
            </div>
        </div>
    </div>
    
    <div class= "box" id="box2"></div>
</body>

</html>