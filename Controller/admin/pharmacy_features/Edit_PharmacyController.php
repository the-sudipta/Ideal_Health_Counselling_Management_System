<?php

require_once '../../../Model/user_repo.php';
require_once '../../../Model/pharmacy_repo.php';
require '../../../Navigation_BarLinks.php';


$update_id = $_POST['id'];
$medicine_name =  $_POST['medicine_name'];
$vendor = $_POST['vendor'];
$barcode =  $_POST['barcode'];
$description = $_POST['description'] ;

$List_of_Pharmacy_Page = List_Pharmacy();
$Add_Pharmacy_Page = Add_Pharmacy();



$everythingOK = FALSE;
$everythingOKCounter = 0;




//  Name Validation
if($medicine_name === "" && $medicine_name === null){

    echo 'Last Name is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}


// Department Name Validation
if($vendor === "" && $vendor === null){

    echo 'Department Name is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}

// Gender Validation
if($barcode === "" && $barcode === null){

    echo 'Department Name is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}


// Room Validation
if($description === "" && $description === null){

    echo 'Password is required';
    $everythingOK = FALSE;
    $everythingOKCounter = $everythingOKCounter + 1;
}else{
    $everythingOK = TRUE;
}



if ($everythingOK && $everythingOKCounter === 0){

    $decision = updatePharmacy($medicine_name, $vendor, $barcode, $description, $update_id);

    if($decision){
        echo "\n\nAll Clear to show List";
        header("Location: {$List_of_Pharmacy_Page}");
    }else{
        header("Location: {$List_of_Pharmacy_Page}");
    }

}else{
    header("Location: {$List_of_Pharmacy_Page}");
}

