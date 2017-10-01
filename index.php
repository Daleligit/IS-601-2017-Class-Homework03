<?php

  $obj = new main();
  
  class main {
    
    private $html;
	
    public function __construct () {
      
      $this->html .= htmlTags::changeRow (htmlTags::styleItalic ('This is the homework 03 for creating examples of  10 string and 10 array functions'));
      
      // 10 string functions
      $stringText = 'This is my string example';
      $arrayExample = array('This','is','my','array','example');
      $this->html .= htmlTags::headingOne ('10 String Functions:');
      // 1st
      $this->html .= htmlTags::headingThree ('Print string function:');
      $this->html .= htmlTags::changeRow ($stringText);
      $this->html .= htmlTags::horizontalRule ();
      // 2nd
      $this->html .= htmlTags::headingThree ('Get string length function:');
      $this->html .= htmlTags::changeRow ($stringText);
      $this->html .= htmlTags::changeRow ('The string length: ' . stringFunctions::getStringLen ($stringText));
      $this->html .= htmlTags::horizontalRule ();
      //3rd
      $this->html .= htmlTags::headingThree ('Make strings uppercase function:');
      $this->html .= htmlTags::changeRow ($stringText);
      $this->html .= htmlTags::changeRow (stringFunctions::stringUppercase($stringText));
      $this->html .= htmlTags::horizontalRule ();
      //4th
      $this->html .= htmlTags::headingThree ('Splite a string function:');
      $this->html .= htmlTags::changeRow ($stringText);
      $this->html .= htmlTags::changeRow (arrayFunctions::printThis (stringFunctions::stringExplode ($stringText)));
      $this->html .= htmlTags::horizontalRule ();
      //5th
      $this->html .= htmlTags::headingThree ('Join array elements with a string function:');
      $this->html .= htmlTags::changeRow (arrayFunctions::printThis ($arrayExample));
      $this->html .= htmlTags::changeRow (stringFunctions::stringImplode ($arrayExample));
      $this->html .= htmlTags::horizontalRule ();
      //6th
      $this->html .= htmlTags::headingThree ('Find substring position function:');
      $this->html .= htmlTags::changeRow ($stringText);
      $stringInput = 'my';
      $this->html .= htmlTags::changeRow ('The substring I want to find position is: ' . $stringInput);
      if (stringFunctions::stringPosition ($stringInput,$stringText) === false) {
        $this->html .= htmlTags::changeRow ('The substring was not found in the example string');
      } else {
        $this->html .= htmlTags::changeRow ('The substring was found in the example string and exists at position ' . stringFunctions::stringPosition
	($stringInput,$stringText));
      }
      $this->html .= htmlTags::horizontalRule ();     
      //7th
      $this->html .= htmlTags::headingThree ('String repeat function');
      $this->html .= htmlTags::changeRow ($stringText);
      $repeatTimes = 5;
      $this->html .= htmlTags::changeRow ('I would like to repeat for ' .  $repeatTimes . ' times');
      $this->html .= htmlTags::changeRow (stringFunctions::stringRepeat (htmlTags::changeRow ($stringText) ,$repeatTimes));
      $this->html .= htmlTags::horizontalRule ();
      //8th
      $this->html .= htmlTags::headingThree ('Reverse a string function');
      $this->html .= htmlTags::changeRow ($stringText);
      $this->html .= htmlTags::changeRow (stringfunctions::stringReverse ($stringText));
      $this->html .= htmlTags::horizontalRule ();
      //9th
      $this->html .= htmlTags::headingThree ('Randomly shuffles function');
      $this->html .= htmlTags::changeRow ($stringText);
      $this->html .= htmlTags::changeRow (stringfunctions::stringShuffles ($stringText));
      $this->html .= htmlTags::horizontalRule ();
      //10th
      $this->html .= htmlTags::headingThree ('Substring function');
      $this->html .= htmlTags::changeRow ($stringText);
      $substringStart = 8;
      $substringLen = 5;
      $this->html .= htmlTags::changeRow ('I would like to have a substring start at position ' . $substringStart . ' with the length of ' . $substringLen);
      $this->html .= htmlTags::changeRow (stringFunctions::getSubstring ($stringText,$substringStart,$substringLen));
      $this->html .= htmlTags::horizontalRule ();

      //10 array functions
      $arrayInput = array('a','c','b',22,6,'a');
      $this->html .= htmlTags::headingOne ('10 array Functions:');
      //1st
      $this->html .= htmlTags::headingThree ('Split function');
      $this->html .= htmlTags::changeRow (arrayFunctions::printThis ($arrayInput));
      $splitSize = 2;
      $this->html .= htmlTags::changeRow ('I would like to splite the array with size' . $splitSize);
      $this->html .= htmlTags::changeRow (arrayFunctions::printThis (arrayFunctions::arraySplit ($arrayInput,$splitSize)));
      $this->html .= htmlTags::horizontalRule ();
      //2nd
      $this->html .= htmlTags::headingThree ('Counts all values function');
      $this->html .= htmlTags::changeRow (arrayFunctions::printThis ($arrayInput));
      $this->html .= htmlTags::changeRow (arrayFunctions::printThis (arrayFunctions::countVal ($arrayInput)));
      $this->html .= htmlTags::horizontalRule ();
      //3rd
      $this->html .= htmlTags::headingThree ('Count elements function');
      $this->html .= htmlTags::changeRow (arrayFunctions::printThis ($arrayInput));
      $this->html .= htmlTags::changeRow (arrayFunctions::countEle ($arrayInput));
      $this->html .= htmlTags::horizontalRule ();
      //4th
      $this->html .= htmlTags::headingThree ('Sort in reverse order function');
      $this->html .= htmlTags::changeRow (arrayFunctions::printThis ($arrayInput));
      $this->html .= htmlTags::changeRow (arrayFunctions::printThis (arrayFunctions::arrayRsort ($arrayInput)));
      $this->html .= htmlTags::horizontalRule ();
      //5th
      $this->html .= htmlTags::headingThree ('Sort in reverse order function');
      $this->html .= htmlTags::changeRow (arrayFunctions::printThis ($arrayInput));
      $this->html .= htmlTags::changeRow (arrayFunctions::printThis (arrayFunctions::arraySort ($arrayInput)));
      $this->html .= htmlTags::horizontalRule ();
      //6th
      $this->html .= htmlTags::headingThree ('Sum function');
      $this->html .= htmlTags::changeRow (arrayFunctions::printThis ($arrayInput));
      $this->html .= htmlTags::changeRow (arrayFunctions::arraySum ($arrayInput));
      $this->html .= htmlTags::horizontalRule ();
      //7th
      $this->html .= htmlTags::headingThree ('Pop function');
      $this->html .= htmlTags::changeRow (arrayFunctions::printThis ($arrayInput));
      $this->html .= htmlTags::changeRow (arrayFunctions::printThis (arrayFunctions::arrayPop ($arrayInput)));
      $this->html .= htmlTags::horizontalRule ();
      //8th
      $this->html .= htmlTags::headingThree ('Shift function');
      $this->html .= htmlTags::changeRow (arrayFunctions::printThis ($arrayInput));
      $this->html .= htmlTags::changeRow (arrayFunctions::printThis (arrayFunctions::arrayShift ($arrayInput)));
      $this->html .= htmlTags::horizontalRule ();
      //9th
      $this->html .= htmlTags::headingThree ('Fetch a key function');
      $this->html .= htmlTags::changeRow (arrayFunctions::printThis ($arrayInput));
      $this->html .= htmlTags::changeRow (arrayFunctions::fetchKey ($arrayInput));
      $this->html .= htmlTags::horizontalRule ();
      //10th
      $this->html .= htmlTags::headingThree ('Create an array containing a range of elements function');
      $this->html .= htmlTags::changeRow (arrayFunctions::printThis ($arrayInput));
      $arrRangeStr = 10;
      $arrRangeEnd = 100;
      $arrRange = 5;
      $this->html .= htmlTags::changeRow ('I would like to create an array starts at ' . $arrRangeStr . ' ends at ' . $arrRangeEnd . ' with the range of ' .
      $arrRange);
      $this->html .= htmlTags::changeRow (arrayFunctions::printThis (arrayFunctions::arrayRange ($arrRangeStr,$arrRangeEnd,$arrRange)));
      $this->html .= htmlTags::horizontalRule ();
    }

    public function __destruct () {
      $this->html .= htmlTags::changeRow ('I\'m Done');
      stringfunctions::printThis ($this->html);
    }
  }
  
  class arrayFunctions {
    static public function printThis ($input) {
      return print_r($input,true);
    }

    static public function arraySplit ($input,$input2) {
      return array_chunk($input,$input2);
    }

    static public function countVal ($input) {
      return array_count_values($input);
    }

    static public function countEle ($input) {
      return count($input);
    }

    static public function arrayRsort ($input) {
      rsort($input);
      return $input;
    }

    static public function arraySort ($input) {
      sort($input);
      return $input;
    }
    
    static public function arraySum ($input) {
      return array_sum($input);
    }
    
    static public function arrayPop ($input) { 
      array_pop($input);
      return $input;
    }

    static public function arrayShift ($input) {
      array_Shift($input);
      return $input;
    }

    static public function fetchKey ($input) {
      return key($input);
    }

    static public function arrayRange ($input,$input2,$input3) {
      return range($input,$input2,$input3);
    }
  }

  class stringFunctions {
    static public function printThis ($input) {
      print($input);
    }

    static public function getStringLen ($input) {
      return strlen($input);
    }

    static public function stringUppercase ($input) {
      return strtoupper($input);
    }

    static public function stringExplode ($input) {
      return explode(" ",$input);
    }

    static public function stringImplode ($input) {
      return implode(",",$input);
    }

    static public function stringPosition ($input,$input2) {
      return strpos ($input2,$input);
    }

    static public function stringRepeat ($input,$input2) {
      return str_repeat($input,$input2);
    }

    static public function stringReverse ($input) {
      return strrev($input);
    }

    static public function stringShuffles ($input) {
      return str_shuffle($input);
    }

    static public function getSubstring ($input,$input2,$input3) {
      return substr($input,$input2,$input3);
    }
  }
  
  class htmlTags {
    
    static public function horizontalRule () {
      $html = '<hr />';
      return $html;
    }
	
    static public function headingOne ($html) {
      $html = '<h1>' . $html . '</h1>';
      return $html;
    }
	
    static public function headingThree ($html) {
      $html = '<h3>' . $html . '</h3>';
      return $html;
    }
	
    static public function changeRow ($html) {
      $html = $html . '</br>';
      return $html;
    }

    static public function styleItalic ($html) {
      $html = '<i>' . $html . '</i>';
      return $html;
    }

  }

?>
