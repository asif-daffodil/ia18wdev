<?php  
    include_once("./db.php");
    session_start();
    if (!isset($_GET['delid']) || !isset($_SESSION['uname'])) {
        header("location: index.php");
    }
    $delid = $_GET['delid'];
    $delQuery = $conn->query("DELETE FROM `students` WHERE `id` = $delid");
    if(!$delQuery){
        $msg = "<span style='color:red'>Something went wrong</span>";
    }else{
        $msg = "<span style='color:green'>Student deleted successfully</span>";
    }

    echo $msg;
    echo "<script>setInterval(()=>{history.go(-2)},2000)</script>";
?>