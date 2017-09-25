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
      $stringLen = stringFunctions::getStringLen($stringText);
      $stringText = "</br>String length = $stringLen";
      stringFunctions::printThis ($stringText);
      $stringText = "<hr />";
      stringFunctions::printThis ($stringText);
    }
    public function __destruct () {
      echo '</br> I\'m Done';
    }
  }

  class stringFunctions {
    static public function printThis ($input) {
      print($input);
    }

    static public function getStringLen ($input) {
      return(strlen($input));
    }
  }

?>
