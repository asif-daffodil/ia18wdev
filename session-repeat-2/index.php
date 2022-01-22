<?php
    session_start();
    if (isset($_POST['login'])) {
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];

        if ($uname == "rakib" && $pass == "123456") {
            $_SESSION['user'] = $uname;
        }
    }

    if (isset($_POST['logout'])) {
        session_unset();
    }
?>

<?php if (!isset($_SESSION['user'])) { ?>
    <form action="" method="post">
        <input type="text" placeholder="username" name="uname">
        <input type="password" placeholder="password" name="pass">
        <input type="submit" value="login" name="login">
    </form>
<?php }else{ ?>
    welcome <?= $_SESSION['user'] ?>
    <form action="" method="post">
        <input type="submit" value="Logout" name="logout">
    </form>
<?php } ?>