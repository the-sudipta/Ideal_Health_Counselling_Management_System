<?php

require_once '../../../Navigation_BarLinks.php';
require_once '../../../Model/user_repo.php';
require_once '../../../Model/counselling_repo.php';


$List_CounselingReport = List_CounsellingReport();

$delete_id =  $_POST['selected_id'];
$delete_user_id =  $_POST['selected_user_id'];

deleteDoctor($delete_id);
deleteUser($delete_user_id);

header("Location: {$List_CounselingReport}");

