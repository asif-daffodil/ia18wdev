<?php  
    echo date ("d/m/y") . "<br>";
    echo date ("d/M/Y D") . "<br>";
    echo date ("d/F/Y l") . "<br>";
    date_default_timezone_set("Asia/Dhaka");
    echo date_default_timezone_get()."<br>";
    echo date ("d/F/Y l h-i-s a") . "<br>";
    echo date ("d/F/Y l H-i-s A") . "<br>";
    
    // mktime
    // hour min sec month day year

    $myTime = mktime(20, 10, 30, 12, 16, 2023);
    echo date ("d/F/Y l h-i-s A", $myTime) . "<br>";

    // strtotime

    $time = strtotime("next saturday");
    echo date ("d/F/Y l h-i-s A", $time) . "<br>";
    
    $time = strtotime("next day");
    echo date ("d/F/Y l h-i-s A", $time) . "<br>";

    $time = strtotime("previous day");
    echo date ("d/F/Y l h-i-s A", $time) . "<br>";

    $time = strtotime("+2 years +3 month +4 days +5 hours +6 minutes +7 seconds");
    echo date ("d/F/Y l h-i-s A", $time) . "<br>";


    $startDay = strtotime("next friday");
    $endDay = strtotime("+6 weeks", $startDay);

    while ($startDay <= $endDay) {
        echo date ("d/F/Y l", $startDay) . "<br>"; 
        $startDay = strtotime("+1 weeks", $startDay) ;
    }
?>