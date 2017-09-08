<?php
  $name = "Alena";
  $string_one = "Hello $name"; //By using double quotes "" The PHP interpreter expands the variable showing the value of the var 

  echo $string_one;
  echo "\n";//Puts a new line onto the code, does not display on the browser for that please use <br>

  /*Escape Sequences - signifies that the character after the \ character should be treated
  specially on the interpreter*/
  $string_one = "Hello \$name"; 

  echo $string_one;
  echo "\n";
  echo "Learning to display \"$string_one\" \t to the screen.\n";
  //\$ represents the dollar sign. \t represents a tab.

?>
