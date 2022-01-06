<?php  
    $age = $_GET['age'] ?? 0;

    if($age < 0){
        echo "Paknami bondho korun";
    }elseif ($age < 13 && $age > 0) {
        echo "You are a baby";
    }elseif($age < 20 && $age >= 13){
        echo "You are a teenager";
    }elseif($age < 30 && $age >= 20){
        echo "You are a young person";
    }elseif($age < 50 && $age >= 30){
        echo "You are a middle-aged person";
    }elseif ($age < 150 && $age >= 50){
        echo "You are an old person";
    }else{
        echo "You are not in this world";
    }

    echo "<br>";

    $city = "Dhaka";
    switch ($city) {
        case 'Rajshahi':
            echo "We live in rajshahi"; 
            break;
        
        case 'Rongpur':
            echo "We live in Rongpur";    
            break;

        default:
            echo "Ha ha ha";
            break;
    }
?>