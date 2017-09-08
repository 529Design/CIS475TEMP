<!DOCTYPE html>
<html lang="en">

    <?php include 'vars.php'; include 'nav.php';?>
    
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

    <div class ="box" id="box1">

        <div id="jumbotron">
            <h1>JMAR</h1>
        </div>
        <div id="quote">
            <?php quoteGenerator($Quotes)?>
            
        </div>
    </div>

    <div class="box" id="box2">
        <div class="wrapper">
            <!--About Me**********************-->
            <div>
                <h2>About me</h2>
                <?php
            echo '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. "I believe that technological innovation is the epitome of human greatness, 
            and with it exists the power to overcome any obstacle and accomplish any feat.  
            Being in the field of computing allows me to be a part of that great endeavor, 
            and it is my goal to pursue such knowledge in order to contribute to the betterment of mankind." .'</p>'; 
                ?>
                <h2>   - JMAR</h2>
            </div>
            <!--END About Me*****************-->    

            <!--CIS427**********************-->
            <div>
                <ol>
                    <?php
                    echo '<h2>'. "CIS 427" .'</h2>';           
                    listArray($CIS427);//calls the listArray function on the CIS427 array           
                    ?>
                </ol>
            </div>
            <!--END CIS427**********************-->

            <!--CIS475**********************-->
            <div>
                <ol>
                    <?php
                    echo '<h2>'. "CIS 475" .'</h2>';
                    listArray($CIS475);//calls the listArray function on the CIS475 array           
                    ?>
                </ol>
            </div>
            <!--END CIS475**********************-->
            </div>

            <div id=clock>
                <?php echo(strftime("%m/%d/%Y %H:%M")); 
                echo '<br>This site is currenty optimized for Firefox and Chrome on desktop<br>';?>
                <a href='download.php?file=index.php' download>index.php download</a>
            </div>

    </div>
</body>

</html>