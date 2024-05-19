<?php

require_once '../../../Navigation_BarLinks.php';
require_once '../../../Model/user_repo.php';
require_once '../../../Model/pharmacy_repo.php';


$List_Pharmacy = List_Pharmacy();

$delete_id =  $_POST['selected_id'];
$delete_user_id =  $_POST['selected_user_id'];

deletePharmacy($delete_id);
deleteUser($delete_user_id);

header("Location: {$List_Pharmacy}");

