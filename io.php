<!DOCTYPE html>
<html lang="en">

    <?php include 'vars.php'; include 'nav.php'; include 'functions.php';?>
    <link rel="stylesheet" type="text/css" href="css/lfa.css" />
    
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
            <div><?php echo build_table(file_parser($InFile)); ?></div>
            <div>
                <div id ="downloadLinks">
                    <a href='download.php?file=index.php' download>index.php download</a><br>
                    <a href='download.php?file=lfa.php' download>lfa.php download</a><br>
                    <a href='download.php?file=vars.php' download>vars.php download</a><br>
                    <a href='download.php?file=functions.php' download>functions.php download</a>
                </div>                
                <?php
                echo '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. "This page uses a PHP function to loop through
                an array and echo the results into a table" .'</p>';?>                
            </div>
        </div>

    </div>
</body>

</html>