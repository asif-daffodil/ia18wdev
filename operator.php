<?php  
    // arethmetic operator
    /*
     * +
     * -
     * /
     * *
     * %
     * **
     */ 

     $x = 2;
     $y = 3;
     echo $x + $y;
     echo "<br>";
     
     echo $y - $x;
     echo "<br>";

     echo $y * $x;
     echo "<br>";

     echo $y / $x;
     echo "<br>";

     echo $y % $x;
     echo "<br>";

     echo $y ** $x;
     echo "<br>";

     // assignment operator
     /*
      * =
      * +=
      * -=
      * *=
      * /=
      * %=
      */

      $x = 15;
      $x += 3; //$x = $x + 3
      echo $x;
      echo "<br>";

      $x -= 5;
      $x *= 3;
      $x /= 13;
      $x %= 2;
      echo $x."<br>";


      // concatenation operator
      /*
       * .
       * .=
       */

       $x = "Dhaka";
       $y = "Rajdhani";
       echo $y." ".$x."<br>";

       $a = "Bangladesh";
       $a .= " is a beautiful country";
       echo $a."<br>";

       $b = 123;
       $b .= "hmmm";
       echo $b."<br>";

       // increment/decrement operator
       /*
        * ++
        * --
        * pre-increment
        * post-increment
        */

        $x = 100;
        echo ++$x."<br>";
        echo --$x."<br>";
        echo $x++."<br>";
        echo $x--."<br>";
        echo --$x."<br>";
        ++$x;
        echo $x."<br>";

        //comparison operator
        /* 
         * ==
         * ===
         * !=
         * !==
         * >
         * <
         * >=
         * <=
         * <>
         * <=>
         */
        
         $x = 6;
         $y = "6";
         if ($x == $y) {
            echo "Joy Bangla 1<br>";
         }

         if ($x === 6) {
            echo "Joy Bangla 2<br>";
         }

         if ($x != 7) {
            echo "Joy Bangla 3<br>";
         }

         if ($x !== $y) {
            echo "Joy Bangla 4<br>";
         }

         if ($y > 5) {
            echo "<span style='color:red'>Joy Bangla 5</span><br>";
         }

         if ($x >= $y) {
            echo "Joy Bangla 6<br>";
         }

         if ($x < 8) {
            echo "Joy Bangla 7<br>";
         }

         if ($x <= $y) {
            echo "Joy Bangla 8<br>";
         }

         if ($x <> 3) {
            echo "Joy Bangla 9<br>";
         }

         $a = 5;

         echo $a <=> 5;
         echo "<br>";

        //logical operator
        /*
         * and
         * or
         * &&
         * ||
         * xor
         * !
         */
        
        $xyz = 6;
        $abc = "6";
        
        if ($xyz == $abc && $abc > 5 && $xyz+2 == 8) {
            echo "Kaaz hoeyeche<br>";
        }

        if ($xyz == $abc || $abc > 15) {
            echo "Kaaz hoeyeche<br>";
        }

        if ($xyz == $abc xor $xyz > 4){
            echo "Kaaz hoeyeche<br>";
        }

        $test = 2022;

        if (!empty($test)){
            echo "Happy New Year<br>";
        }

        /*
         * ?
         * ??
         */
        
         $x = 123;
        //  if($x == 123){
        //      echo "haaaa";
        //  }else{
        //      echo "hmmm";
        //  }

        echo ($x == 444)? "haaaa<br>":"hmmm<br>";
        
        $rakib = "anuthing";
        echo $rakib ?? "khali jayga";
?>