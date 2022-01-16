<?php  
    include_once("./header.php");
    if (isset($_SESSION['username'])) {
        header("location: login2.php");
    }elseif (isset($_SESSION['user'])) {
        header("location: index.php");
    }
    $username = ['rakib', 'asif', 'ifat'];
    if (isset($_POST['login']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $uname = safuda($_POST['uname']);

        if (empty($uname)) {
            $err['uname'] = "Please write your user name";
        }elseif (!in_array($uname, $username)) {
            $err['uname'] = "Wrong user name";
        }else{
            $suc['uname'] = "Username is correct";
            $_SESSION['username'] = $uname;
            echo '<meta http-equiv="refresh" content="2;url=login2.php" />';
        }

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
                    <input type="text" placeholder="User Name" class="form-control <?= (isset($err['uname']))? 'is-invalid' : null; ?> <?= (isset($suc['uname']))? 'is-valid' : null; ?>" name="uname" value="<?= $_SESSION['pun'] ?? $uname ?? null ?>">
                    <label for="">User Name</label>
                    <div class="invalid-feedback">
                        <?= $err['uname'] ?? null; ?>
                    </div>
                    <div class="valid-feedback">
                        <?= $suc['uname'] ?? null; ?>
                    </div>
                </div>
                <input type="submit" value="Next" name="login" class="btn btn-primary btn-lg">
            </form>
        </div>
    </div>
</div>
<?php  
    include_once("./footer.php");
?>
    
    