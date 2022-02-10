<?php include_once("./header.php");
    if(!isset($_SESSION['uname'])){
?>
    <div class="container">
        <h2 class="login-alert">Please <a href="./login.php">login</a> to add new student</h2>
    </div>
<?php } ?>

<?php include_once("./footer.php") ?>