<?php

require_once '../../../Navigation_BarLinks.php';
require_once '../../../Model/user_repo.php';
require_once '../../../Model/patient_repo.php';


$List_Patient = List_Patient();

$delete_id =  $_POST['selected_id'];
$delete_user_id =  $_POST['selected_user_id'];

deletePatient($delete_id);
deleteUser($delete_user_id);

header("Location: {$List_Patient}");

