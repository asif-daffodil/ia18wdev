<?php 
include_once("./header.php");
include_once("./logonFormValidation.php"); 
?>
<div class="container">
    <div class="loginform">
        <h2>Login Form</h2>
        <?php if(isset($errs)){foreach ($errs as $err){ ?>
            <div style="color:red"><?= $err; ?></div>
        <?php }} ?>
        <?= $sMsg ?? null ?>
        <form action="" method="post">
            <input type="text" placeholder="username" name="uname">
            <input type="password" placeholder="password" name="pass">
            <input type="submit" value="Login">
        </form>
    </div>
</div>
<?php include_once("./footer.php") ?>