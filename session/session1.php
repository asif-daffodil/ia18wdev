<?php  

    session_start();
    $_SESSION['rakib'] = "Rakib is in class now";
    $_SESSION['sakib'] = "Sakib is not in class now";

    echo $_SESSION['rakib'];
    unset($_SESSION['sakib']);
    // session_unset();
?>