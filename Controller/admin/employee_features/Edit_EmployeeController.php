<?php

require_once '../../../Model/user_repo.php';
require_once '../../../Model/employee_repo.php';
require '../../../Navigation_BarLinks.php';


$update_id = $_POST['id'];
$name =  $_POST['name'];
$salary = $_POST['salary'];
$department =  $_POST['department'];
$mobile_number = $_POST['mobile_number'] ;
$address = $_POST['address'];
$employee_office = $_POST['employee_office'];
$List_of_Employee_Page = List_Employee();
$Add_Employee_Page = Add_Employee();




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


//  Name Validation
if($salary === "" && $salary === null){

    echo 'Salary is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}






// Department Name Validation
if($department === "" && $department === null){

    echo ' Department is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}

// Mobile Validation
if($mobile_number === "" && $mobile_number === null){

    echo 'Department is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}


// Address Validation
if($address === "" && $address === null){

    echo 'Address is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}

// Employee Office Validation
if($employee_office === "" && $employee_office === null){

    echo 'Phone is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}



if ($everythingOK && $everythingOKCounter === 0){

    $decision = updateEmployee($name, $salary,$department, $mobile_number, $address, $employee_office, $update_id);

    if($decision){
        echo "\n\nAll Clear to show List";
        header("Location: {$List_of_Employee_Page}");
    }else{
        header("Location: {$List_of_Employee_Page}");
    }

}else{
    header("Location: {$List_of_Employee_Page}");
}

