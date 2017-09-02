<?php

//A Key Value Pair array storing assignment links as key and names as value
$CIS427 = array("#href1"=>"Open Discussions",
"#href2"=>"Final Project Proposal",
"#href3"=>"Final Project Site",
"#href4"=>"Final Project Presentation",);

//A Key Value Pair array storing assignment links as key and names as value
$CIS475 = array("serverSetup.php"=>"PHP/MySQL Server Setup",
                "index.php"=>"First PHP Web Page",
                "#href7"=>"PHP Loop, Function, Arrays",
                "#href8"=>"PHP Read and Write a Text File",
                "#href9"=>"MySQL Table",
                "#href10"=>"PHP Table from MySQL Table",
                "#href11"=>"Write to MySQL Table",
                "#href12"=>"Final PHP Web Site");

//List Array Function*************************                
function listArray($someArray){  
foreach ($someArray as $key=>$value){
echo '<li>';//creates list element
echo "<a href=".$key.">".$value."</a>";//link is $key and $value is displayed name
echo '</li>';
}
}
//END List Array Function**********************

?>