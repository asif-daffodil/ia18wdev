<?php  
    include_once("./header.php");
    if (!isset($_SESSION['user'])) {
       header("location: login1.php");
    }
?>
    <div class="container">
        <div class="row d-flex min-vh-100">
            <div class="col-md-6 text-center border rounded shadow m-auto p-5">
                <h2>Welcome <span class="text-uppercase text-primary"><?= $_SESSION['user'] ?></span></h2>
                <a href="./logout.php" class="btn btn-danger btn-sm">Logout</a>
            </div>
        </div>
    </div>
<?php  
    include_once("./footer.php");
?>
    
    