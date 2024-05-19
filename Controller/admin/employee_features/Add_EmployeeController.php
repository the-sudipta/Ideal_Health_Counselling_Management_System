<?php

require_once '../../../Model/user_repo.php';
require_once '../../../Model/employee_repo.php';
require '../../../Navigation_BarLinks.php';


$name =  $_POST['name'];
$salary =  $_POST['salary'];
$department =  $_POST['department'];
$mobile_number = $_POST['mobile_number'];
$address =  $_POST['address'];
$employee_office = $_POST['employee_office'];
$email = $_POST['email'];
$password = $_POST['password'];
$List_of_Employee_Page = List_Employee();
$Add_Employee_Page = Add_Employee();



$everythingOK = FALSE;
$everythingOKCounter = 0;



// First Name Validation
if($name === "" && $name === null){

    echo 'First Name is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}

// Last Name Validation
if($salary === "" && $salary === null){

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

// Mobile Number Validation
if($mobile_number === "" && $mobile_number === null){

    echo 'Mobile number is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}

// Address Validation
if($address === "" && $address === null){

    echo 'Address  is required';
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






if ($everythingOK && $everythingOKCounter === 0){

    $inserted_id = createUser($email, $password, "employee");
    $data = createEmployee($name,$salary, $department,$mobile_number,$address, $employee_office, $inserted_id);

    if($data > 0){
        echo "\n\nAll Clear to show List";
        header("Location: {$List_of_Employee_Page}");
    }else{
//        header("Location: {$Add_Employee_Page}");
    }

}else{
//    header("Location: {$Add_Employee_Page}");
}

