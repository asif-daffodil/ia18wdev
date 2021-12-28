<?php  
    // string
    $x = "This is a demo text";
    var_dump($x);
    echo "<br>";

    // integer
    $x = 123;
    var_dump($x);
    echo "<br>";

    // float
    $x = 123.321;
    var_dump($x);
    echo "<br>";

    // boolean
    $x = false;
    var_dump($x);
    echo "<br>";

    // null
    $x = null;
    var_dump($x);
    echo "<br>";

    // array
    $x = ['Asif', 35, true, null];
    var_dump($x);
    echo "<br>";

    // object
    class myObj {
        public string $xyz = "Amar Bangladesh";
    }
    $x = new myObj;
    var_dump($x);

    // resource
?>