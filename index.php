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


    }
    public function __destruct () {
      echo '</br> I\'m Done';
    }
  }
  
  class arrayFunctions {
    static public function printThis ($input) {
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
  }

?>
