<?php

require_once '../../../Navigation_BarLinks.php';
require_once '../../../Model/user_repo.php';
require_once '../../../Model/employee_repo.php';


$List_Employee = List_Employee();

$delete_id =  $_POST['selected_id'];
$delete_user_id =  $_POST['selected_user_id'];

deleteEmployee($delete_id);
deleteUser($delete_user_id);

header("Location: {$List_Employee}");

