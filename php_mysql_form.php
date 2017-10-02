<!DOCTYPE html>
<html lang="en">


<?php  include 'vars.php'; include 'nav.php'; include 'functions.php'; fetchMetaData(__FILE__);?>

<?php
//form input values
$contactFirstName = $contactLastName = $contactAddress = $contactCity = 
$contactZipCode = $contactPhone = $contactEmail = $contactComments = $displayMessage = "";
//form error values
$contactFirstNameERR = $contactLastNameERR = $contactAddressERR = $contactCityERR = $contactStateERR = 
$contactZipCodeERR = $contactPhoneERR = $contactEmailERR = $contactCommentsERR =""; 

    //create_mysql_table(); //unlock to create new contactstable on new server

    if($_GET){//tests if there is a get request, sets form input and error values
        $contactFirstName = $_GET['fname'];
        $contactFirstNameERR =  $_GET['fnameERR'];
        $contactLastName =  $_GET['lname']; 
        $contactLastNameERR =  $_GET['lnameERR'];
        $contactAddress =  $_GET['ca']; 
        $contactAddressERR =  $_GET['caERR'];
        $contactCity =  $_GET['cc']; 
        $contactCityERR =  $_GET['ccERR'];
        $contactStateERR = $_GET['csERR']; 
        $contactZipCode = $_GET['cz']; 
        $contactZipCodeERR = $_GET['czERR'];
        $contactPhone = $_GET['cp']; 
        $contactPhoneERR = $_GET['cpERR'];
        $contactEmail = $_GET['ce'];
        $contactEmailERR = $_GET['ceERR'];
        $displayMessage = $_GET['msg'];
    }
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
            <div>
     
        <form action="processform.php" novalidate method="post">
           <table>
  
<tr><td>First Name:</td><td><input class ="infield" type="email" name="contactFirstName" value="<?php echo $contactFirstName;?>"></td>
<td><span class="error">* <?php echo $contactFirstNameERR;?></span></td></tr>
    
<tr><td>Last Name:</td><td><input type="text" name="contactLastName" value="<?php echo $contactLastName;?>"></td>
<td><span class="error">* <?php echo $contactLastNameERR;?></span></td></tr>

<tr><td>Address:</td><td><input type="text" name="contactAddress" value="<?php echo $contactAddress;?>"></td>
<td><span class="error">* <?php echo $contactAddressERR;?></span></td></tr>

<tr><td>City:</td><td><input type="text" name="contactCity" value="<?php echo $contactCity;?>"></td>
<td><span class="error">* <?php echo $contactCityERR;?></span></td></tr>

<tr><td>State:</td><td><?php select_states(); ?></td>
<td><span class="error">* <?php echo $contactStateERR;?></span></td></tr>

<tr><td>ZipCode:</td><td><input type="text" maxlength=5 name="contactZipCode" value="<?php echo $contactZipCode;?>"></td>
<td><span class="error">* <?php echo $contactZipCodeERR;?></span></td></tr>

<tr><td>Phone #:</td><td><input type="text" maxlength=10 name="contactPhone" value="<?php echo $contactPhone;?>"></td>
<td><span class="error">* <?php echo $contactPhoneERR;?></span></td></tr>

<tr><td>Email:</td><td><input type="text" name="contactEmail" value="<?php echo $contactEmail;?>"></td>
<td><span class="error">* <?php echo $contactEmailERR;?></span></td></tr>

<tr><td>Comments:</td><td><textarea name="contactComments"></textarea></td><td></td></tr>

<tr><td><input type="submit" value="Submit"></td><td></td><td></td></tr>

<tr><th colspan="3"><?php echo $displayMessage;?></th></tr>
                
          </table>
        </form>
           
        </div>


            <div>
                <div id ="downloadLinks">
                    <a href='download.php?file=index.php' download>index.php download</a><br>
                    <a href='download.php?file=php_mysql_form.php' download>php_mysql_form.php download</a><br>
                    <a href='download.php?file=processform.php' download>processform.php download</a><br>
                    <a href='download.php?file=vars.php' download>vars.php download</a><br>
                    <a href='download.php?file=navs.php' download>navs.php download</a><br>
                    <a href='download.php?file=functions.php' download>functions.php download</a>
                </div>                
                <?php
                echo '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. "This page is under construction" .'</p>';?>                
            </div>
        </div>

    </div>
</body>

</html>


