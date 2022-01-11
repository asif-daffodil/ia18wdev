<?php 
    echo $_GET['yname'] ?? null;
?>

<form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
    <input type="text" placeholder="Your Name" name="yname">
    <input type="submit" value="Send" name="send">
</form>

<br><br>

<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" placeholder="Your Name" name="yname">
    <input type="submit" value="Send" name="send">
</form>
<?php 
    echo $_POST['yname'] ?? null;
    echo $_REQUEST['yname'] ?? null;
?>