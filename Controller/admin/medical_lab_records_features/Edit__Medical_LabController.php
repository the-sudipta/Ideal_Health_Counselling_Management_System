<?php

require_once '../../../Model/user_repo.php';
require_once '../../../Model/medical_lab_repo.php';
require '../../../Navigation_BarLinks.php';


$update_id = $_POST['id'];
$patients_name =  $_POST['patients_name'];
$patients_ailment = $_POST['patients_ailment'];
$lab_test_date_conducted =  $_POST['lab_test_date_conducted'];
$test_name = $_POST['test_name'] ;
$test_category = $_POST['test_category'];
$List_of_Medical_lab_records_Page =List_Medical_Lab();
$Add_Medical_lab_records_Page =Add_Medical_Lab();



$everythingOK = FALSE;
$everythingOKCounter = 0;




//  Name Validation
if($patients_name === "" && $patients_name === null){

    echo 'Name is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}


// Department Name Validation
if($patients_ailment === "" && $patients_ailment === null){

    echo 'Ailment is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}

// Gender Validation
if($lab_test_date_conducted === "" && $lab_test_date_conducted === null){

    echo 'test Date is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}


// Room Validation
if($test_name === "" && $test_name === null){

    echo 'Test name is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}

// Phone Validation
if($test_category === "" && $test_category === null){

    echo 'Test Category is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}



if ($everythingOK && $everythingOKCounter === 0){

    $decision = updateMedicalLabReport($patients_name, $patients_ailment,$test_name,$test_category,$lab_test_date_conducted,$update_id);

    if($decision){
        echo "\n\nAll Clear to show List";
        header("Location: {$List_of_Medical_lab_records_Page}");
    }else{
        header("Location: {$List_of_Medical_lab_records_Page}");
    }

}else{
    header("Location: {$List_of_Medical_lab_records_Page}");
}

