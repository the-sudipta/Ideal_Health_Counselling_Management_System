<?php

require_once '../../../Navigation_BarLinks.php';
require_once '../../../Model/user_repo.php';
require_once '../../../Model/medical_lab_repo.php';


$List_Medical_lab = List_Medical_lab();

$delete_id =  $_POST['selected_id'];
$delete_user_id =  $_POST['selected_user_id'];

deleteMedicalLabReport($delete_id);
deleteUser($delete_user_id);

header("Location: {$List_Medical_lab}");

