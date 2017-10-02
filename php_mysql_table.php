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

    <div class= "box">
        <div class="wrapper" id=lfaWrapper>
            <div><?php mysql_parse_table(); ?></div>
            <div>
                <div id ="downloadLinks">
                    <a href='download.php?file=index.php' download>index.php download</a><br>
                    <a href='download.php?file=php_mysql_table.php' download>php_mysql_table.php download</a><br>
                    <a href='download.php?file=vars.php' download>vars.php download</a><br>
                    <a href='download.php?file=navs.php' download>navs.php download</a><br>
                    <a href='download.php?file=functions.php' download>functions.php download</a>
                </div>                
                <?php
                echo '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. "My solution to this problem is very straightforward. 
                I created a connection to the mysql database and then retrieved the necessary data from the
                appropriate table.  I then parsed the data into an array and used my table building function which
                was used in previous assignments.  I recycled some of the code to parse the data from the io 
                assignment and could have abstracted it but felt that for this solution it was not necessary.".
                '<br><br>'."-JMAR" .'</p>';?>                
            </div>
        </div>

    </div>
</body>

</html>