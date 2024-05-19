<?php

require_once '../../../Model/user_repo.php';
require_once '../../../Model/doctor_repo.php';
require '../../../Navigation_BarLinks.php';


$firstName =  $_POST['firstName'];
$lastName =  $_POST['lastName'];
$department = $_POST['department'];
$gender =  $_POST['inlineRadioOptions'];
$email = $_POST['email'];
$password = $_POST['password'];
$room = $_POST['counselling'];
$phone = $_POST['phoneNumber'];
$fullName = '';
$List_of_Doctor_Page = List_Doctor();
$Add_Doctor_Page = Add_Doctor();



$everythingOK = FALSE;
$everythingOKCounter = 0;



// First Name Validation
if($firstName === "" && $firstName === null){

    echo 'First Name is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}

// Last Name Validation
if($lastName === "" && $lastName === null){

    echo 'Last Name is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}

$fullName = $firstName.$lastName;


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

// Email Validation
if($email === "" && $email === null){

    echo 'Email  is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}

// Password Validation
if($password === "" && $password === null){

    echo 'Password  is required';
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

    $inserted_id = createUser($email, $password, "doctor");
    $data = createDoctor($fullName, $department, $gender, $phone, $room, $inserted_id);

    if($data > 0){
        echo "\n\nAll Clear to show List";
        header("Location: {$List_of_Doctor_Page}");
    }else{
        header("Location: {$Add_Doctor_Page}");
    }

}else{
    header("Location: {$Add_Doctor_Page}");
}

