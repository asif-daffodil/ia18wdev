<?php 
include_once("./header.php"); 

if(isset($_SESSION['uname'])){
    header("location: index.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uname = safe($_POST['uname']);
    $pass = safe($_POST['pass']);
    if (empty($uname)) {
        $errUname = "Please provide the user name";
    }else{
        $crrUname = $conn->real_escape_string($uname);
    }

    if (empty($pass)) {
        $errPass = "Please provide the password";
    }else{
        $crrPass = $conn->real_escape_string(md5($pass));
    }

    if(isset($crrUname) && isset($crrPass)){
        $checkData = $conn->query("SELECT * FROM `users` WHERE `uname` = '$crrUname' AND `pass` = '$crrPass'");
        if($checkData->num_rows !== 1){
            $errMsg = "<div class='alert alert-danger alert-dismissible'><button class='btn-close' data-bs-dismiss='alert'></button>User name or password was not currect</div>";
        }else{
            $sucMsg = "<div class='alert alert-success alert-dismissible'><button class='btn-close' data-bs-dismiss='alert'></button>Login Successfull!</div>";
            $userData = $checkData ->fetch_object();
            $_SESSION['uname'] = $userData->uname;
            $_SESSION['role'] = $userData->role;
            $_SESSION['fname'] = $userData->fname;
            $_SESSION['lname'] = $userData->lname;
            echo "<script>setInterval(()=>{location.href='index.php'}, 1000)</script>";
        }
    }
}
?>
    <div class="container-fluid">
        <div class="row min-vh-100 d-flex">
            <div class="col-md-4 m-auto border p-5 rounded shadow">
                <h2 class="mb-3">Login Form</h2>
                <?= $errMsg ?? $sucMsg ?? null ?>   
                <form action="" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" placeholder="User Name" class="form-control border-0 border-bottom shadow-none <?= (isset($errUname))? 'is-invalid':null; ?> " name="uname">
                        <label for="">User Name</label>
                        <div class="invalid-feedback"><?= $errUname ?? null; ?></div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" placeholder="Password" class="form-control border-0 border-bottom shadow-none <?= (isset($errPass))? 'is-invalid':null; ?>" name="pass">
                        <label for="">Password</label>
                        <div class="invalid-feedback"><?= $errPass ?? null; ?></div>
                    </div>
                <button type="submit" class="btn btn-dark btn-lg px-5 mt-4">Log in</button>
                </form>
            </div>
        </div>
    </div>
<?php include_once("./footer.php") ?>
    
