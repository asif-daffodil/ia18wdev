<?php  
    include_once("./header.php");
    if (!isset($_SESSION['username'])) {
        header("location: login1.php");
    }elseif (isset($_SESSION['user'])) {
        header("location: index.php");
    }
    $username = $_SESSION['username'];
    $userPass = ['rakib' => 'captinplanet', 'asif' => '12345678', 'ifat' => '123456'];
    if (isset($_POST['login']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $uname = safuda($_POST['uname']);

        if (empty($uname)) {
            $err['uname'] = "Please write your password";
        }elseif ($userPass[$username] != $uname) {
            $err['uname'] = "Wrong password";
        }else{
            $suc['uname'] = "Lgin Successfully";
            $_SESSION['user'] = $username;
            echo '<meta http-equiv="refresh" content="2;url=index.php" />';
        }

    }

    if (isset($_POST['back']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        session_unset();
        $_SESSION['pun'] = $username;
        header("location: login1.php");
    }

    function safuda ($data) {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }
?>
<div class="container">
    <div class="row min-vh-100">
        <div class="col-md-6 m-auto shadow rounded border p-4">
            <h2 class="mb-4">Please Login to see the website</h2>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control text-uppercase" value="<?= $username; ?>" disabled placeholder="User Name">
                    <label for="">User Name</label>
                </div>
                
                <div class="form-floating mb-3">
                    <input type="password" placeholder="User Name" class="form-control <?= (isset($err['uname']))? 'is-invalid' : null; ?> <?= (isset($suc['uname']))? 'is-valid' : null; ?>" name="uname" value="<?= $uname ?? null ?>">
                    <label for="">Password</label>
                    <div class="invalid-feedback">
                        <?= $err['uname'] ?? null; ?>
                    </div>
                    <div class="valid-feedback">
                        <?= $suc['uname'] ?? null; ?>
                    </div>
                </div>
                <input type="submit" value="Next" name="login" class="btn btn-primary btn-lg">
            </form>
            <form action="" method="post">
                <button type="submit" class="btn text-primary p-0 pt-4" name="back">
                    Change the username &larr;
                </button>
            </form>
        </div>
    </div>
</div>
<?php  
    include_once("./footer.php");
?>
    
    