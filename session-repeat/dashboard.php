<?php 
session_start();

if(!$_SESSION['username']){
    header("Location:index.php");
}
if(isset($_POST['logout'])){
    session_start();
    session_unset();
    header("Location:index.php");
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
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
      </div>
      <div class="navbar-nav mx-auto">
          <a class="nav-link" ><?= ucfirst($_SESSION['username']) ?></a>
          <a class="nav-link btn btn-danger text-light" onclick="document.getElementById('logout').submit()">Logout</a>
      </div>
    </div>
  </div>
</nav>
          </div>
      </div>
  </div>
<form action="" method="post"  id="logout">
    <input type="hidden" name="logout">
</form>
    <script src="bootstrap.js"></script>
  </body>
</html>