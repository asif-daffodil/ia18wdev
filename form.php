<?php  

    $g = ['Male', 'Female'];
    $s = ['HTML', 'CSS', 'JS', 'BS'];
    if (isset($_POST['sub123'])) {
        $name = sefuda($_POST['name']);
        $email = sefuda($_POST['email']);
        $phone = sefuda($_POST['phone']);
        $gender = sefuda($_POST['gender'] ?? null);
        $skills = sefuda($_POST['skills'] ?? []);
        
        if (empty($name)) {
            $errName = "<span style='color:red'>Please enter your name</span>";
        }elseif(!preg_match("/^[A-Za-z. ]*$/", $name)){
            $errName = "<span style='color:red'>Invalid name</span>";
        }

        if(empty($email)){
            $errEmail = "<span style='color:red'>Please enter your email address</span>"; 
        }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errEmail = "<span style='color:red'>Invalid email address</span>";
        }

        if(empty($phone)){
            $errPhone = "<span style='color:red'>Please enter your phone number</span>"; 
        }elseif (!preg_match("/^[0-9+ ]*$/", $phone) || strlen($phone) != 11) {
            $errPhone = "<span style='color:red'>Invalid phone number</span>";
        }

        if(empty($gender)){
            $errGender = "<span style='color:red'>Please select your gender</span>"; 
        }elseif(!in_array($gender, $g)){
            $errGender = "<span style='color:red'>Har baap ka ek baap hota hey</span>"; 
        }

        if(empty($skills)){
            $errSkills = "<span style='color:red'>Please select your skills</span>"; 
        }else{
            for ($i=0; $i < count($skills); $i++) { 
                if (!in_array($skills[$i], $s)) {
                    $errSkills = "<span style='color:red'>paknami bondho korun</span>"; 
                }
            }
        }

    }

    function sefuda ($data) {
        if(!is_array($data)){
            $data = htmlspecialchars($data);
            $data = trim($data);
            $data = stripslashes($data);
            return $data;
        }
        return $data;
    } 
?>
<h2>Signup Form</h2>
<form action="" method="post">
    <input type="text" placeholder="Your Name"  name="name" value="<?= $name ?? null; ?>">
    <?= $errName ?? null; ?>
    <br><br>
    <input type="text" placeholder="Your Email" name="email" value="<?= $email ?? null; ?>">
    <?= $errEmail ?? null; ?>
    <br><br>
    <input type="text" placeholder="Your Phone" name="phone" value="<?= $phone ?? null; ?>">
    <?= $errPhone ?? null; ?>
    <br><br>
    Gender :
    <input type="radio" name="gender" value="Male" <?= (isset($gender) && $gender == "Male")? "checked":null; ?> >Male
    <input type="radio" name="gender" value="Female" <?= (isset($gender) && $gender == "Female")? "checked":null; ?>>Female
    <?= $errGender ?? null; ?>
    <br><br>
    Skills :
    <input type="checkbox" name="skills[]" value="HTML" <?= (isset($skills) && in_array("HTML", $skills))? "checked":null; ?> >HTML
    <input type="checkbox" name="skills[]" value="CSS" <?= (isset($skills) && in_array("CSS", $skills))? "checked":null; ?>>CSS
    <input type="checkbox" name="skills[]" value="JS" <?= (isset($skills) && in_array("JS", $skills))? "checked":null; ?>>JS
    <input type="checkbox" name="skills[]" value="BS" <?= (isset($skills) && in_array("BS", $skills))? "checked":null; ?>>BS
    <?= $errSkills ?? null; ?>
    <br><br>
    <input type="submit" value="Sign Up" name="sub123">
    <br><br>
</form>