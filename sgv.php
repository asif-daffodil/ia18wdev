<?php
    $GLOBALS
    $x = "Bangladesh";
    $y = "Dhaka";

    function country1 () {
        echo $GLOBALS['y']." is th ecapital city of ".$GLOBALS['x']."<br>";
    }

    function country2 () {
        global $x, $y;
        echo "$y is th ecapital city of $x";
    }

    country1();
    country2();

    function myTest() {
        global $z;
        $z = 0;
        static $z = 0;
        echo $z;
        $z++;
      }

      echo "<br>";
      myTest();
      echo "<br>";
      myTest();
      echo "<br>";
      myTest();
      echo "<br>";
      echo $z;
      echo "<br>";

      // $_SERVER
      echo $_SERVER['PHP_SELF']."<br>";
    
    echo $_SERVER['REQUEST_METHOD'];


?>