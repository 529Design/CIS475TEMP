<?php
    /*This file contains all of the primary functions that this site utilizes*/

    //Month - This class defines a month///////////////////////////////////
    class Month {
        public $IDnum;
        public $monthName;
        public $numDays;
    
        //CONSTRUCTOR
        public function __construct($IDnum, $monthName, $numDays){
            $this->IDnum = $IDnum;
            $this->monthName = $monthName;
            $this->numDays = $numDays;
        }
    
        public function getIDnum(){return $this->IDnum;}
        public function getMonthName(){return $this->monthName;}
        public function getNumDays(){return $this->numDays;}
    }
    //END Month Class//////////////////////////////////////////////////////

/* Build Table - This function uses concatenation to add elements onto the $myTable variable
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
        foreach($array as $item){
            //add test for if number is odd. create css class for odd rows.
            if ($item->getIDnum()%2 == 0){
                $myTable .= '<tr>';
            }
            else{
                $myTable .= '<tr class="odd">';
            }        
                $myTable .= '<td>' . $item->getIDnum() .'</td>';
                $myTable .= '<td>' . $item->getMonthName() .'</td>';
                $myTable .= '<td>' . $item->getNumDays() .'</td>';
            $myTable .= '</tr>';
        }
    
        // finish table and return it
    
        $myTable .= '</table>';
        return $myTable;
    }
//END Build Table*********************************


/* File Parser - retrieves data from an input file, parses into Month objets, returns Month array*/
function month_file_parser($fileArray){
    $ParsedMonths = array();//used to store an array of Month objects

    foreach($fileArray as $line)//each line contains all CSV data
    {
        $tempArray = explode(',', $line);//parses line using comma ',' delimeter from input file into a temp array.
        $tempMonth = new Month ($tempArray[0],$tempArray[1],$tempArray[2]);//creates new month object
        array_push($ParsedMonths, $tempMonth);//Pushes a new Month object into the Parsed Months array
    }
    return $ParsedMonths;//returns an array of new Month objecsts
}
//END File Parser*********************************


/* Output File Reverser - reverses an array*/
function outputFile_reverse($array){
    
     //**************NOTE*************************
     /*This code block was necessary as it kept printing December and November data on the same line with fwrite
     The original file had return lines at the end of each line but not the last
     This bit of code appends a return line to the last element of the array before reversing it
     I have it working with end() and reset() so it can be used in the future if necessary
     */
     end($array);//sets the array to the last element
     $key = key($array);//sets a variable key to the current array key value
     $array[$key] .=PHP_EOL;//appends an end of line character to the value
     reset($array);//resets the array pointer to the beginning
 
     $reversed = array_reverse($array);//reverses the array
 
     $fp = fopen("cis475_ior.txt", "w");//opens the output file
 
     foreach($reversed as $key=>$value){
         fwrite($fp, $value);//writes the value from the array to the output file
         }
 
     fclose($fp);//closes the output file
 
 }
//END Output File Reverse*******************************

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