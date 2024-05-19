<?php

require_once '../../../Model/user_repo.php';
require_once '../../../Model/patient_repo.php';
require '../../../Navigation_BarLinks.php';


$email =  $_POST['email'];
$password =  $_POST['password'];
$name =  $_POST['name'];
$date_of_birth = $_POST['date_of_birth'];
$age =  $_POST['age'];
$address = $_POST['address'] ;
$marital_status = $_POST['inlineRadioOptions'] ;
$mobile_number = $_POST['phoneNumber'] ;
$patient_category = $_POST['patient_category'];
$patients_room = $_POST['patients_room'];
$List_of_Patient_Page = List_Patient();
$Add_Patient_Page = Add_Patient();



$everythingOK = FALSE;
$everythingOKCounter = 0;

//  Email Validation
if($email === "" && $email === null){

    echo 'Last Name is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}


//  Password Validation
if($password === "" && $password === null){

    echo 'Last Name is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}


//  Name Validation
if($name === "" && $name === null){

    echo 'Last Name is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}


// Date Of Birth Validation
if($date_of_birth === "" && $date_of_birth === null){

    echo 'Department Name is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}

// Age Validation
if($age === "" && $age === null){

    echo 'Department Name is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}


// Address Validation
if($address === "" && $address === null){

    echo 'Password is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}

// Phone Number Validation
if($mobile_number === "" && $mobile_number === null){

    echo 'Phone is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}












if ($everythingOK && $everythingOKCounter === 0){


    $inserted_id = createUser($email, $password, "patient");
    $decision = createPatient($name, $date_of_birth, $age, $address, $marital_status,$mobile_number,$patient_category,$patients_room,$inserted_id);

    if($decision){
        echo "\n\nAll Clear to show List";
        header("Location: {$List_of_Patient_Page}");
    }else{
        header("Location: {$List_of_Patient_Page}");
    }

}else{
    header("Location: {$List_of_Patient_Page}");
}

