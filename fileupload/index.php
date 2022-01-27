<?php
    require 'vendor/autoload.php';
    use Intervention\Image\ImageManager;
    

    if (isset($_POST['botam'])) {
        $fName = $_FILES['chobi']['name'];
        $tmpName = $_FILES['chobi']['tmp_name'];
        
        if (empty($tmpName)) {
            $err = "Please select a file";
        }elseif (!getimagesize($tmpName)) {
            $err = "Please select an image file";
        }elseif (getimagesize($tmpName)[0] > 1200 || getimagesize($tmpName)[1] > 1200) {
            $err = "Please choose a small image file";
        }
        else{
            $x = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            $name = date('FdylHisa').substr(str_shuffle($x), 0, 6).uniqid().rand().".".pathinfo($fName, PATHINFO_EXTENSION);
            ;
            $destination = "./images/".$name;
            $move = move_uploaded_file($tmpName, $destination);
            if (!$move) {
                $err = "Something went wrong";
            }else{
                $err = "Image upload seccessfully";
            }
        }
    }
?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="chobi">
    <input type="submit" name="botam">
</form>
<?= $err ?? null ?>