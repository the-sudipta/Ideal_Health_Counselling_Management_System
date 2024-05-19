<?php

require_once '../../../Model/user_repo.php';
require_once '../../../Model/medical_lab_repo.php';
require '../../../Navigation_BarLinks.php';


$update_id = $_POST['id'];
$name =  $_POST['name'];
$department = $_POST['department'];
$gender =  $_POST['inlineRadioOptions'];
$room = $_POST['counselling'] ;
$phone = $_POST['phoneNumber'];
$List_of_Medical_lab_records_Page =List_Medical_Lab();
$Add_Medical_lab_records_Page =Add_Medical_Lab();



$everythingOK = FALSE;
$everythingOKCounter = 0;




//  Name Validation
if($name === "" && $name === null){

    echo 'Last Name is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}


// Department Name Validation
if($department === "" && $department === null){

    echo 'Department Name is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}

// Gender Validation
if($gender === "" && $gender === null){

    echo 'Department Name is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}


// Room Validation
if($room === "" && $room === null){

    echo 'Password is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}

// Phone Validation
if($phone === "" && $phone === null){

    echo 'Phone is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}



if ($everythingOK && $everythingOKCounter === 0){

    $decision = updateDoctor($name, $department, $gender, $phone, $room, $update_id);

    if($decision){
        echo "\n\nAll Clear to show List";
        header("Location: {$List_of_Medical_lab_records_Page}");
    }else{
        header("Location: {$List_of_Medical_lab_records_Page}");
    }

}else{
    header("Location: {$List_of_Medical_lab_records_Page}");
}

