<?php

require 'functions.php';//allows functions from functions.php
$conn    = Connect();//establishes server connection

//resets error variables before testing
$contactFirstNameERR = $contactLastNameERR = $contactAddressERR = $contactCityERR = $contactStateERR = 
$contactZipCodeERR = $contactPhoneERR = $contactEmailERR =""; 

$displayMessage = "mistakes were made!";
$fieldmsg = "required field";

//data is collected from the form and set to variables to be tested.
//escape string used to prevent insertion attacks
$contactFirstName   = $conn->real_escape_string($_POST['contactFirstName']);
$contactLastName    = $conn->real_escape_string($_POST['contactLastName']);
$contactAddress     = $conn->real_escape_string($_POST['contactAddress']);
$contactCity        = $conn->real_escape_string($_POST['contactCity']);
$contactState       = $conn->real_escape_string($_POST['contactState']);
$contactZipCode     = $conn->real_escape_string($_POST['contactZipCode']);
$contactPhone       = $conn->real_escape_string($_POST['contactPhone']);
$contactEmail       = $conn->real_escape_string($_POST['contactEmail']);
$contactComments    = $conn->real_escape_string($_POST['contactComments']);
$contactDate        = date("Y/m/d");

//ERROR PROCESSING

//FIRST NAME
if (empty($contactFirstName)){
    $contactFirstNameERR = $fieldmsg;
} else {
    $contactFirstName = test_input($contactFirstName);

    if (!preg_match("/^[a-zA-Z ]*$/",$contactFirstName)) {
        $contactFirstNameERR = "letters and spaces";
    }
}

//LAST NAME
if (empty($contactLastName)){
    $contactLastNameERR = $fieldmsg;
} else {
    $contactLastName = test_input($contactLastName);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$contactLastName)) {
        $contactLastNameERR = "letters and spaces";
    }
}

//ADDRESS
if (empty($contactAddress)){
    $contactAddressERR = $fieldmsg;
} else {
    $contactAddress = test_input($contactAddress);
    // check if name only contains letters and whitespace
    if (!preg_match("/[A-Za-z0-9]+/",$contactAddress)) {
        $contactAddressERR = "alphanumeric";
    }
}

//CITY
if (empty($contactCity )){
    $contactCityERR = $fieldmsg;
} else {
    $contactCity  = test_input($contactCity );
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$contactCity )) {
        $contactCityERR = "letters and spaces";
    }
}

//STATE
if (empty($contactState)){
    $contactStateERR = "required selection";//this is set differently to work with insert logic
}

//ZIP CODE
if (empty($contactZipCode)){
    $contactZipCodeERR = $fieldmsg;
} else {
    $contactZipCode = test_input($contactZipCode);
    // check if name only contains letters and whitespace
    if (!preg_match("/[0-9]+/",$contactZipCode)) {
        $contactZipCodeERR = "numeric";
    }
    elseif(ceil(log10($contactZipCode))<5){
        $contactZipCodeERR = "enter 5 digits";
    }
}

//PHONE NUMBER
if (empty($contactPhone)){
    $contactPhoneERR = $fieldmsg;
} else {
    $contactPhone = test_input($contactPhone);
    // check if name only contains letters and whitespace
    if (!preg_match("/[0-9]+/",$contactPhone)) {
        $contactPhoneERR = "numeric input only";
    }
    elseif(ceil(log10($contactZipCode))<10){
        $contactPhoneERR = "enter 10 digits";
    }
}

//EMAIL
if (empty($contactEmail)){
    $contactEmailERR = $fieldmsg;
} else {
    $contactEmail = test_input($contactEmail);
    // check if e-mail address is well-formed
    if (!filter_var($contactEmail, FILTER_VALIDATE_EMAIL)) {
        $contactEmailERR = "Invalid format";
    }
}

//COMMENTS
test_input($contactComments);

//if all the errors are equal then there must be no errors therefore insert into database and send thank you
if($contactFirstNameERR == $contactLastNameERR && $contactAddressERR == $contactCityERR && $contactStateERR == 
$contactZipCodeERR && $contactPhoneERR == $contactEmailERR){
    $displayMessage = "Thank You, " .$contactFirstName. " " .$contactLastName;//thank you message

//insert into database
    $query   = "INSERT into contactsTable (contactFirstName,contactLastName,contactAddress,contactCity,contactState,contactZipCode,contactPhone,contactEmail,contactComments,contactDate) 
    VALUES('" . $contactFirstName . "','" .             
                $contactLastName . "','" .
                $contactAddress . "','" .
                $contactCity . "','" .
                $contactState . "','" .
                $contactZipCode . "','" .
                $contactPhone . "','" .
                $contactEmail . "','" .
                $contactComments . "','" .
                $contactDate . "')";
                $success = $conn->query($query);
    
    if (!$success) {
        die("Couldn't enter data: ".$conn->error);   
    }
    //resets all data
    $contactFirstName = $contactLastName = $contactAddress = $contactCity = 
    $contactZipCode = $contactPhone = $contactEmail = $contactComments = "";
}

//resends data back to form to either clear it or keep data in entered fields
header("Location:php_mysql_form.php?fname=".$contactFirstName.
    "&fnameERR=".$contactFirstNameERR.
    "&lname=".$contactLastName.
    "&lnameERR=".$contactLastNameERR.
    "&ca=". $contactAddress.
    "&caERR=". $contactAddressERR.
    "&cc=". $contactCity.
    "&ccERR=". $contactCityERR.
    "&csERR=". $contactStateERR.
    "&cz=". $contactZipCode.
    "&czERR=". $contactZipCodeERR.
    "&cp=".$contactPhone.
    "&cpERR=".$contactPhoneERR.
    "&ce=".$contactEmail.
    "&ceERR=".$contactEmailERR.
    "&msg=".$displayMessage
);

$conn->close();//closes the server connection