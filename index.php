<?php
  
  $obj = new main();

  class main {
    public function __construct () {
      echo '<i>This is the homework 03 for creating examples of  10 string and 10 
      array functions</i></br>';
      $stringText = "<h1>10 String Functions:</h3>";
      stringFunctions::printThis ($stringText);
      $stringText = "<h3>Print string function:</h3>";
      stringFunctions::printThis ($stringText);
      $stringText = "<p>This is my string example</p>";
      stringFunctions::printThis ($stringText);
      $stringText = "<hr />";
      stringFunctions::printThis ($stringText);
    }
    public function __destruct () {
      echo '</br> I\'m Done';
    }
  }

  class stringFunctions {
    static public function printThis ($text) {
      print($text);
    }
  }

?>
