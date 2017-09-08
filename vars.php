<?php
//This page contains site info for index.php
$title = "JMAR's Lair";
$metaDesc="homepage for CIS427 and CIS475";
$metaKeywords="'JMAR, New York', NY, 'Buffalo', 'CIS475', 'CIS427', 'Django better than PHP'";
$metaName = "Jeffrey Marron a.k.a. JMAR";
$metaViewport = "width=device-width, initial-scale=1.0";
$metaWebPageEditor = "Visual Studio Code";
$metaWebServerSoftware = "WAMP";
$metaTag=<<<EOD
<head>
<link rel="stylesheet" type="text/css" href="css/mainStyle.css" />
<link rel="stylesheet" type="text/css" href="css/index.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
<title>$title</title>
<meta name="description" content=$metaDesc></meta>
<meta name="keywords" content=$metaKeywords></meta>
<meta name="author" content=$metaName></meta>
<meta name="viewport" content=$metaViewport></meta>
<meta name="editor" content=$metaWebPageEditor></meta>
<meta name="server" content=$metaWebServerSoftware></meta>
</head>
EOD;
echo $metaTag;//Echos the meta data


//QUOTE GENERATOR CODE*************************
//An array of quotes from Bruce Lee
$Quotes = array("Adapt what is useful, reject what is useless, and add what is specifically your own.",
"If you spend too much time thinking about a thing, you'll never get it done.",
"If you love life, don't waste time, for time is what life is made up of.",
"I fear not the man who has practiced 10,000 kicks once, but I fear the 
man who has practiced one kick 10,000 times.",
"The key to immortality is first living a life worth remembering.");

//Quote Generator*********************
function quoteGenerator($stringArray){
    echo'<p>';
    echo $stringArray[rand(0, count($stringArray)-1)];
    echo'</p>';
    }
    //END Quote Generator******************
?>
