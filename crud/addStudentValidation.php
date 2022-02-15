<?php  
    $genderVal = ["male", "female"];
    $cityList = ["Dhaka", "CTG", "Rajshahi", "Cumilla", "Others"];
    $religionList = ["Islam", "Sanatan", "Buddhist", "Christian", "Others"];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = safe($_POST['name']);
        $gender = safe($_POST['gender'] ?? null);
        $city = safe($_POST['city']);
        $mobile = safe($_POST['mobile']);
        $religion = safe($_POST['religion']);

        if(empty($name)){
            $errs['name'] = "Please provide the student name";
        }elseif(!preg_match("/^[A-Za-z. ]*$/", $name)){
            $errs['name'] = "Invalid name format";
        }else{
            $crrName = $conn->real_escape_string($name);
        }

        if(empty($gender)){
            $errs['gender'] = "Please select a gender";
        }elseif (!in_array($gender, $genderVal)) {
            $errs['gender'] = "Gender Problem";
        }else{
            $crrGender = $conn->real_escape_string($gender);
        }

        if(empty($city)){
            $errs['city'] = "Please select a city";
        }elseif(!in_array($city, $cityList)){
            $errs['city'] = "Invalid city";
        }else{
            $crrCity = $conn->real_escape_string($city);
        }

        if(empty($mobile)){
            $errs['mobile'] = "Please provide a mobile number";
        }elseif(!preg_match("/^[0-9+ ]*$/", $mobile)){
            $errs['mobile'] = "Invalid mobile number";
        }elseif(strlen($mobile) < 10 || strlen($mobile) > 16){
            $errs['mobile'] = "Mobile number is ot valid";
        }else{
            $crrMobile = $conn->real_escape_string($mobile);
        }

        if(empty($religion)){
            $errs['religion'] = "Please select a religion";
        }elseif(!in_array($religion, $religionList)){
            $errs['religion'] = "Invalid religion";
        }else{
            $crrReligion = $conn->real_escape_string($religion);
        }

        if (isset($crrName) && isset($crrGender) && isset($crrCity) && isset($crrMobile) && isset($crrReligion)) {
            $insertStudent = $conn->query("INSERT INTO `students` (`name`, `gender`, `city`, `mobile`, `religion`) VALUES ('$crrName', '$crrGender', '$crrCity', '$crrMobile', '$crrReligion')");
            if(!$insertStudent){
                $errs['dbproblem'] = "Something went wrong";
            }else{
                $success = "<div style='color:green;'>Student added successfully</div>";
                echo "<script>setInterval(() => {location.href='addStudent.php'}, 2);</script>";
            }
        }
    }
?>