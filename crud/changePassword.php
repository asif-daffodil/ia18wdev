<?php include_once("./header.php"); include_once("./changePassValidation.php") ?>
<div class="container">
    <div class="changePassForm">
        <h2>Change Password</h2>
        <?php if(isset($errs)){foreach ($errs as $err){ ?>
            <div style="color:red"><?= $err; ?></div>
        <?php } echo $sMsg ?? null; } ?>
        <form action="" method="post">
            <input type="password" placeholder="Old Password" name="opass">
            <input type="password" placeholder="New Password" name="npass">
            <input type="password" placeholder="Confirm New Password" name="cnpass">
            <input type="submit" value="Change Password">
        </form>
    </div>
</div>
<?php include_once("./footer.php") ?>