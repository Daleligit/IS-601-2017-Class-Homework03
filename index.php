<?php
  
  $obj = new main();

class main {
    public function __construct () {
      echo '<i>This is the homework 03 for creating examples of  10 string and 10 
      array functions</i></br>';
      // 10 string functions
      $stringText = "<h1>10 String Functions:</h3>";
      stringFunctions::printThis ($stringText);
      // 1st
      $stringText = "<h3>Print string function:</h3>";
      stringFunctions::printThis ($stringText);
      $stringText = "This is my string example";
      stringFunctions::printThis ($stringText);
      $stringText = "<hr />";
      stringFunctions::printThis ($stringText);
      // 2nd
      $stringText = "<h3>Get string length function:</h3>";
      stringFunctions::printThis ($stringText);
      $stringText = "This is my string example";
      stringFunctions::printThis ($stringText);
      stringFunctions::getStringLen ($stringText);
      $stringText = "<hr />";
      stringFunctions::printThis ($stringText);
      //3rd
      $stringText = "<h3>Make strings uppercase function:</h3>";
      stringFunctions::printThis ($stringText);
      $stringText = "This is my string example";
      stringFunctions::printThis ($stringText);
      stringFunctions::stringUppercase ($stringText);
      $stringText = "<hr />";
      stringFunctions::printThis ($stringText);
      //4th
      $stringText = "<h3>Splite a string function:</h3>";
      stringFunctions::printThis ($stringText);
      $stringText = "This is my string example";
      stringFunctions::printThis ($stringText);
      stringFunctions::stringExplode ($stringText);
      $stringText = "<hr />";
      stringFunctions::printThis ($stringText);
      //5th
      $stringText = "<h3>Join array elements with a string function:</h3>";
      stringFunctions::printThis ($stringText);
      $stringText = array('This','is','my','array','example');
      arrayFunctions::printThis ($stringText);
      stringFunctions::stringImplode ($stringText);
      $stringText = "<hr />";
      stringFunctions::printThis ($stringText);
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

    }
    public function __destruct () {
      echo '</br> I\'m Done';
    }
  }
  
  class arrayFunctions {
    static public function printThis ($input) {
      print_r($input);
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
      rsort($input);
      print_r($input);
    }

  }

  class stringFunctions {
    static public function printThis ($input) {
      print($input);
    }

    static public function getStringLen ($input) {
      $stringLen = strlen($input);
      print("</br>String Length = $stringLen");
    }

    static public function stringUppercase ($input) {
      $stringUpper = (strtoupper($input));
      print("</br>$stringUpper");
    }

    static public function stringExplode ($input) {
      $pieces = explode(" ",$input);
      Print("</br>");
      print_r($pieces);
    }

    static public function stringImplode ($input) {
      $implodeString = implode(",",$input);
      print("</br>$implodeString");
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

?>
