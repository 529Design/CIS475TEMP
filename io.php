<!DOCTYPE html>
<html lang="en">

<?php  include 'vars.php'; include 'nav.php'; include 'functions.php';fetchMetaData(__FILE__);?>
    
    <?php
        $InFile = file('cis475_io.txt');//creates array
        outputFile_reverse($InFile);//creates output file
?>

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
            <div><?php echo build_table(month_file_parser($InFile)); ?></div>
                <div> 
                <div id ="downloadLinks">
                    <a href='download.php?file=cis475_ior.txt' download>cis475_ior.txt download</a><br>
                    <a href='download.php?file=vars.php' download>vars.php download</a><br>
                    <a href='download.php?file=functions.php' download>functions.php download</a><br>
                    <a href='download.php?file=io.php' download>io.php download</a>
                </div>
                               
                <?php
                echo '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. "This page parses an input file 
                into an array of Month class objects.  It then uses a function to build
                a table of those objects.  I started tested various data extraction methods 
                before ultimately deciding on using file(). I then realized it would be more
                elegant to fix my solution to lfa.php and recycle the functionality behind it.  
                I had a difficult time with the output file reversal due to the input file not having a return
                character after December 31 however I managed to find a solution." .'</p>';?>                
            </div>
        </div>

    </div>
</body>

</html>
