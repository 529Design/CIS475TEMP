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



?>
