<?php  
    if (!isset($_SESSION['uname'])) {
        header("location: index.php");
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $errs = [];
        $uname = $_SESSION['uname'];
        $opass = safe($_POST['opass']);
        $npass = safe($_POST['npass']);
        $cnpass = safe($_POST['cnpass']);

        $getUserInfo = $conn->query("SELECT * FROM `users` WHERE `uname` = '$uname'");
        $userInfo = $getUserInfo->fetch_object();

        if (empty($opass)) {
            $errs['opass'] = "Please provide the old password";
        }else{
            if(md5($opass) != $userInfo->pass) {
                $errs['opass'] = "Password dodnot matched";
            }else{
                $crrOpass = $opass;
            }
        }
        if (empty($npass)) {
            $errs['npass'] = "Please provide the new password";
        }elseif(strlen($npass) < 6){
            $errs['npass'] = "Please provide a strong new password";
        }elseif(md5($npass) == $userInfo->pass){
            $errs['npass'] = "Please dont provide the previous password";
        }else{
            $crrNpass = $npass;
        }

        if (empty($cnpass)) {
            $errs['cnpass'] = "Please provide the confirm password";
        }elseif($cnpass != $npass){
            $errs['cnpass'] = "Confirm password doesnt matched with the new password";
        }else{
            if(isset($crrNpass)){
                $crrCnpass = $cnpass;
            }
        }

        if(isset($crrOpass) && isset($crrNpass) && isset($crrCnpass)){
           $crrCnpass = $conn->real_escape_string(md5($crrCnpass));
           $id = $userInfo->id;
           $updatePass = $conn->query("UPDATE `users` SET `pass` = '$crrCnpass' WHERE `id` = $id");
           if(!$updatePass){
               $errs['uppass'] = "Something went wrong";
           }else{
               $sMsg = "<div style='color:green'>Password changed Successfully</div>";
                echo "<script>setInterval(() => {location.href='index.php'}, 2);</script>";
           }
        }
    }
?>