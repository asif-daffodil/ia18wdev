<style>
    a{
        padding:10px;
        background: #000;
        color: white;
        display: inline-block;
        margin-top: 5px;
    }
</style>
<?php  

    
   if(isset($_GET['number'])){
    $x = 1;
    $y=  $_GET['number'];
    while ($x <= 10) {
        echo $y." x ".$x." = ".($x*$y)."<br>";
        $x++;
    }
   }

?>
<a href="loop.php?number=5">5 Table</a><br>
<a href="loop.php?number=6">6 Table</a><br>
<a href="loop.php?number=7">7 Table</a><br>
<a href="loop.php">Empty</a><br>

<?php  

    for ($i=1; $i <= 10; $i++) { 
        echo $i."<br>";
    }
?>