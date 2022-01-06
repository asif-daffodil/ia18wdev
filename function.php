<?php  
    $a = "USA";
    $b = "New York";

    function myFunc ($city = "Barishal", $area = "Rupatoli") {
        return "I lives in $city - ($area) <br>";
    } 

    echo myFunc("Chittagong", "Lalkhan-Bazar");
    echo myFunc("Dhaka", "Dhanmondi");
    echo myFunc("Cumilla");
    echo myFunc();
    echo myFunc(area: "Rajshahi");
?>