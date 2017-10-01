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
      $this->html .= arrayFunctions::printThis ($arrayExample);
      $this->html .= htmlTags::changeRow (stringFunctions::stringImplode ($arrayExample));
      $this->html .= htmlTags::horizontalRule ();
      print ($this->html);
      //6th
      $stringText = "<h3>Find substring position function:</h3>";
      stringFunctions::printThis ($stringText);
      $stringText = "This is my string example</br>The substring I want to find position is: ";
      stringFunctions::printThis ($stringText);
      $stringText2 = "my";
      stringFunctions::printThis ($stringText2);
      stringFunctions::stringPosition ($stringText2,$stringText);
      $stringText = "<hr />";
      stringFunctions::printThis ($stringText);
      //7th
      $stringText = "<h3>String repeat function</h3>";
      stringFunctions::printThis ($stringText);
      $stringText = "This is my string example</br>";
      stringFunctions::printThis ($stringText);
      $repeatTimes = 5;
      $stringText2 = "I would like to repeat for $repeatTimes times";
      stringFunctions::printThis ($stringText2);
      stringFunctions::stringRepeat($stringText,$repeatTimes);
      $stringText = "<hr />";
      stringFunctions::printThis ($stringText);
      //8th
      $stringText = "<h3>Reverse a string function</h3>";
      stringFunctions::printThis ($stringText);
      $stringText = "This is my string example";
      stringFunctions::printThis ($stringText);
      stringfunctions::stringReverse ($stringText);
      $stringText = "<hr />";
      stringFunctions::printThis ($stringText);
      //9th
      $stringText = "<h3>Randomly shuffles function</h3>";
      stringFunctions::printThis ($stringText);
      $stringText = "This is my string example";
      stringFunctions::printThis ($stringText);
      stringFunctions::stringShuffles ($stringText);
      $stringText = "<hr />";
      stringFunctions::printThis ($stringText);
      //10th
      $stringText = "<h3>Substring function</h3>";
      stringFunctions::printThis ($stringText);
      $stringText = "This is my string example";
      stringFunctions::printThis ($stringText);
      $substringStart = 8;
      $substringLen = 5;
      $stringText2 = "</br>I would like to have a substring start at position $substringStart with the length of $substringLen";
      stringFunctions::printThis ($stringText2);
      stringFunctions::getSubstring ($stringText,$substringStart,$substringLen);
      $stringText = "<hr />";
      stringFunctions::printThis ($stringText);
      //10 array functions
      $stringText = "<h1>10 array Functions:</h3>";
      stringFunctions::printThis ($stringText);
      //1st
      $stringText = "<h3>Split function</h3>";
      stringFunctions::printThis ($stringText);
      $arrayInput = array('a','c','b',22,6,'a');
      arrayFunctions::printThis ($arrayInput);
      $splitSize = 2;
      $stringText = "</br>I would like to splite the array with size $splitSize";
      stringFunctions::printThis ($stringText);
      arrayFunctions::arraySplit ($arrayInput,$splitSize);
      $stringText = "<hr />";
      stringFunctions::printThis ($stringText);
      //2nd
      $stringText = "<h3>Counts all values function</h3>";
      stringFunctions::printThis ($stringText);
      $arrayInput = array('a','c','b',22,6,'a');
      arrayFunctions::printThis ($arrayInput);
      arrayFunctions::countVal ($arrayInput);
      $stringText = "<hr />";
      stringFunctions::printThis ($stringText);
      //3rd
      $stringText = "<h3>Count elements function</h3>";
      stringFunctions::printThis ($stringText);
      $arrayInput = array('a','c','b',22,6,'a');
      arrayFunctions::printThis ($arrayInput);
      arrayFunctions::countEle ($arrayInput);
      $stringText = "<hr />";
      stringFunctions::printThis ($stringText);
      //4th
      $stringText = "<h3>Sort in reverse order function</h3>";
      stringFunctions::printThis ($stringText);
      $arrayInput = array('a','c','b',22,6,'a');
      arrayFunctions::printThis ($arrayInput);
      arrayFunctions::arrayRsort ($arrayInput);
      $stringText = "<hr />";
      stringFunctions::printThis ($stringText);
      //5th
      $stringText = "<h3>Sort function</h3>";
      stringFunctions::printThis ($stringText);
      $arrayInput = array('a','c','b',22,6,'a');
      arrayFunctions::printThis ($arrayInput);
      arrayFunctions::arraySort ($arrayInput);
      $stringText = "<hr />";
      stringFunctions::printThis ($stringText);
      //6th
      $stringText = "<h3>Sum function</h3>";
      stringFunctions::printThis ($stringText);
      $arrayInput = array('a','c','b',22,6,'a');
      arrayFunctions::printThis ($arrayInput);
      arrayFunctions::arraySum ($arrayInput);
      $stringText = "<hr />";
      stringFunctions::printThis ($stringText);
      //7th
      $stringText = "<h3>Pop function</h3>";
      stringFunctions::printThis ($stringText);
      $arrayInput = array('a','c','b',22,6,'a');
      arrayFunctions::printThis ($arrayInput);
      arrayFunctions::arrayPop ($arrayInput);
      $stringText = "<hr />";
      stringFunctions::printThis ($stringText);
      //8th
      $stringText = "<h3>Shift function</h3>";
      stringFunctions::printThis ($stringText);
      $arrayInput = array('a','c','b',22,6,'a');
      arrayFunctions::printThis ($arrayInput);
      arrayFunctions::arrayShift ($arrayInput);
      $stringText = "<hr />";
      stringFunctions::printThis ($stringText);
      //9th
      $stringText = "<h3>Fetch a key function</h3>";
      stringFunctions::printThis ($stringText);
      $arrayInput = array('a','c','b',22,6,'a');
      arrayFunctions::printThis ($arrayInput);
      arrayFunctions::fetchKey ($arrayInput);
      $stringText = "<hr />";
      stringFunctions::printThis ($stringText);
      //10th
      $stringText = "<h3>Create an array containing a range of elements function</h3>";
      stringFunctions::printThis ($stringText);
      $arrRangeStr = 10;
      $arrRangeEnd = 100;
      $arrRange = 5;
      $stringText = "I would like to create an array starts at $arrRangeStr and
      ends at $arrRangeEnd with the range of $arrRange";
      stringFunctions::printThis ($stringText);
      arrayFunctions::arrayRange ($arrRangeStr,$arrRangeEnd,$arrRange);
      $stringText = "<hr />";
      stringFunctions::printThis ($stringText);
    }
    public function __destruct () {
      echo '</br> I\'m Done';
    }
  }
  
  class arrayFunctions {
    static public function printThis ($input) {
      return print_r($input,true);
    }

    static public function arraySplit ($input,$input2) {
      print("</br>");
      print_r(array_chunk($input,$input2));
    }

    static public function countVal ($input) {
      print("</br>");
      print_r(array_count_values($input));
    }

    static public function countEle ($input) {
      print("</br>");
      print_r(count($input));
    }

    static public function arrayRsort ($input) {
      print("</br>");
      rsort($input);
      print_r($input);
    }

    static public function arraySort ($input) {
      print("</br>");
      sort($input);
      print_r($input);
    }
    
    static public function arraySum ($input) {
      print("</br>" . array_sum($input));
    }
    
    static public function arrayPop ($input) { 
      print("</br>");
      array_pop($input);
      print_r($input);
    }

    static public function arrayShift ($input) {
      print("</br>");
      array_Shift($input);
      print_r($input);
    }

    static public function fetchKey ($input) {
      print("</br>" . key($input));
    }

    static public function arrayRange ($input,$input2,$input3) {
      print("</br>");
      print_r(range($input,$input2,$input3));
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
      $pos = strpos ($input2,$input);
      if ($pos === false) {
        print("</br>The substring was not found in the example string");
      } else {
        print("</br>The substring was found in the example string");
        print(" and exists at position $pos");
      }
    }

    static public function stringRepeat ($input,$input2) {
      print("</br>" . str_repeat($input,$input2));
    }

    static public function stringReverse ($input) {
      print("</br>" . strrev($input));
    }

    static public function stringShuffles ($input) {
      print("</br>" . str_shuffle($input));
    }

    static public function getSubstring ($input,$input2,$input3) {
      print("</br>" . substr($input,$input2,$input3));
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
