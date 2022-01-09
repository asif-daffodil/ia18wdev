<?php  
    //indexed array
    // $x = array("Dhaka", "Khulna", "Rajshahi", "Rongpur");
    $x = ["Dhaka", "Khulna", "Rajshahi", "Rongpur", "Dhaka", "Kuakata", "cox-bazar"];
    echo $x[3];
    echo "<pre>";
    print_r($x);
    echo "</pre>";
    echo count($x)."<br>";

    // echo $x[0]."<br>";
    // echo $x[1]."<br>";
    // echo $x[2]."<br>";
    // echo $x[3]."<br>";
    // echo $x[4]."<br>";

    for ($i=0; $i < count($x); $i++) { 
       echo $x[$i]."<br>";
    }
    
    foreach ($x as $y){
        echo $y."<br>";
    }
    

    //assosiative array
    $a = ["name"=>"Rakib", "city"=>"Narayanganj", "age"=>21, "country"=>"Bangladesh"];
    echo "<pre>";
    print_r($a);
    echo "</pre>";
    echo $a["name"]."<br>";
    foreach ($a as $c => $b) {
        echo $c." : ".$b."<br>";
    }


    //multi-dimontional array
    $m = [
        ["kamal", 25],
        ["Jamal", 24],
        ["Tomal", 23]
    ];
    echo "<pre>";
    print_r($m);
    echo "</pre>";
    echo $m[1][1]."<br>";

    foreach($m as $n){
        foreach ($n as $o) {
            echo $o." ";
        }
        echo "<br>";
    }

    $p = [
        ['name'=>'rakib', 'age'=>21, 'city'=>'narayangonj'],
        ['name'=>'sakib', 'age'=>34, 'city'=>'norshindi'],
        ['name'=>'monjur', 'age'=>22, 'city'=>'savar']
    ];
    echo $p[1]['city']."<br>";

    foreach($p as $q) {
        foreach($q as $s => $r){
            echo ucwords($s)." : ".ucwords($r)."<br>";
        }
        echo "<br>";
    }

?>