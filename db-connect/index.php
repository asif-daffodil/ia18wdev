<?php  
    $conn = mysqli_connect("localhost", "asif", "123456", "ia18");
   /*  
    if(!$conn){
        echo "Connection fail";
    }else{
        echo "Connected";
    } 
    */
    echo "<pre>";
    var_dump($conn);
    echo "</pre>";
    echo "<pre>";
    print_r($conn);
    echo "</pre>";

    $select_query = $conn->query("SELECT * FROM `students`");

    echo "<pre>";
    print_r($select_query);
    echo "</pre>";

    $select = $select_query->fetch_all();
    echo "<pre>";
    print_r($select);
    echo "</pre>";

    // echo $select[0][1];

    // connection
    // connection inside a veriable
    // query inside the connection veriable
    // query inside a veriable
    // fetch data from the query veriable
    // print the data
?>