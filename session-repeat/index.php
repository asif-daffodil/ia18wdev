<?php 
session_start();

if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
    header("Location:dashboard.php");
}


$users =['rakib','ifat','naim'];
$passwords =['rakib'=>12345,'ifat'=>123456,'naim'=>1234567];

$error = [];
$success = [];

if(isset($_POST['login'])){

$username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);

// Username error check
    if(in_array($username,$users)){
        $success['user-found'] = "Yes This user is valid";
        
        if(!empty($password)){
            if($passwords[$username] == $password){
                echo "Logged Succesfully";
                $_SESSION['username'] = $username;
                header("Location: dashboard.php");
            }
        }else{
            $error['password-empty'] = "Please Enter Your Password";
        }
    }elseif(!empty($username)){
        $error['not-found'] = "No This user is not valid";
    }

    //password check
    
   
     


}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap.css" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>
<style>
    .form-center{
        margin: 100px auto;
    }
</style>
  <div class="container">
      <div class="row">
          <div class="col-md-6 form-center shadow p-4">

            <form method="post">
                <h2>Login Form</h2>
                <div class="mb-3">
                    <label  class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" >
                    <small class="text-danger"> <?= $error['not-found']??null ?> </small>
                <div class="mb-3">

                <label  class="form-label">Password</label>
                <input type="password" name="password" class="form-control" >
                <small class="text-danger"><?= $error['password-empty']??null ?></small>
                </div>

                <button type="submit" name="login" value="button" class="btn btn-primary">Login</button>
            </form>
          </div>
      </div>
  </div>

    <script src="bootstrap.js"></script>
  </body>
</html>