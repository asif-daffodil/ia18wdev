<?php 
    include_once("./header.php");
    include_once("./addStudentValidation.php");
    if(!isset($_SESSION['uname'])){
?>
    <div class="container">
        <h2 class="login-alert">Please <a href="./login.php">login</a> to add new student</h2>
    </div>
<?php }else{ ?>
    <div class="container">
        <div class="addStudent">
            <h2>ADd Student</h2>
            <?php  
                if (isset($errs)) {
                    foreach($errs as $err){
            ?>
                <div style="color:red; margin-bottom: 20px;">
                <?= $err; ?>
                </div>
            <?php
                    }
                }
            ?>
            <?= $success ?? null; ?>
            <form action="" method="post">
                <input type="text" placeholder="Student name" name="name" value="<?= $name ?? null?>">
                <label for="">Gender : 
                <input type="radio" name="gender" value="male" <?= (isset($gender) && $gender == "male")? "checked":null; ?> > Male 
                <input type="radio" name="gender" value="female" <?= (isset($gender) && $gender == "female")? "checked":null; ?> > Female
                <input type="radio" name="gender" value="Other"> Other
                </label>
                <select name="city">
                    <?php if(!isset($city)){ ?>
                        <option value="">--Select city--</option>
                    <?php }else{ ?>
                        <option value="<?= $city; ?>"><?= $city; ?></option>
                    <?php } ?>
                    <?php 
                        foreach($cityList as $cityName){
                            if ($city != $cityName) {
                    ?>
                        <option value="<?= $cityName; ?>"><?= $cityName; ?></option>
                    <?php } } ?>
                </select>
                <input type="text" placeholder="Mobile Number" name="mobile" value="<?= $mobile ?? null?>">
                <select name="religion">
                    <?php if(!isset($religion)){ ?>
                        <option value="">--Select Religion--</option>
                    <?php }else{ ?>
                        <option value="<?= $religion; ?>"><?= $religion; ?></option>
                    <?php } ?>
                    <?php 
                        foreach($religionList as $religionName){
                            if ($religion != $religionName) {
                    ?>
                        <option value="<?= $religionName; ?>"><?= $religionName; ?></option>
                    <?php } } ?>
                </select>
                <input type="submit" value="Add Student">
            </form>
        </div>
    </div>
<?php }include_once("./footer.php") ?>