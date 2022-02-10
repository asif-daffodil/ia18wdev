<?php
    if (isset($_SESSION['uname'])) {
        header("location: index.php");
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $errs = [];
        $uname = safe($_POST['uname']);
        $pass = safe($_POST['pass']);
        if(empty($uname)){
            $errs['uname'] = "Please write your username";
        }{
            $crrUname = $conn->real_escape_string($uname);
        }

        if(empty($pass)){
            $errs['pass'] = "Please write your password";
        }{
            $crrPass = $conn->real_escape_string(md5($pass));
        }

        if(isset($crrUname) && isset($crrPass)){
            $checUser = $conn->query("SELECT * FROM `users` WHERE `uname` = '$crrUname' AND `pass` = '$crrPass'");
            if($checUser->num_rows == 1){
                $checkData = $checUser->fetch_object();
                $_SESSION['name'] = $checkData->name;
                $_SESSION['uname'] = $checkData->uname;
                $sMsg = "<div style='color:green'>Login Successfull</div>";
                echo "<script>setInterval(() => {location.href='index.php'}, 2);</script>";
            }else{
             $errs['loggin'] = "login Failed";
            }
        }
    }
?>