<?php
    /*This file contains all of the primary functions that this site utilizes*/


    /*
    Build Table - This function uses concatenation to add elements onto the $myTable variable
                  and then returns the variable so it can display as an HTML table object
    */
    function build_table($array){
    // start table
    $number=1;//counter
    $myTable = '<table>';
    //table header row
    $myTable .= '<tr>';
    $myTable .= '<th>' . "#" . '</th>';
    $myTable .= '<th>' . "Month" . '</th>';
    $myTable .= '<th>' . "# of Days" . '</th>';
    $myTable .= '</tr>';
    //END table header

    // data rows
    foreach( $array as $key=>$value){
        //add test for if number is odd. create css class for odd rows.
        if ($number%2 == 0){
            $myTable .= '<tr>';
        }
        else{
            $myTable .= '<tr class="odd">';
        }        
            $myTable .= '<td>' . $number .'</td>';
            $myTable .= '<td>' . htmlspecialchars($key) .'</td>';
            $myTable .= '<td>' . htmlspecialchars($value) .'</td>';
        $myTable .= '</tr>';
        $number +=1;
    }

    // finish table and return it

    $myTable .= '</table>';
    return $myTable;
}
//END Build Table*********************************


//QUOTE GENERATOR *************************
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