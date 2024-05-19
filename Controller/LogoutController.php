<?php

include_once '../Navigation_BarLinks.php';
$login_page = login_page();


session_start();
$_SESSION["data"] = null;
$_SESSION["data"]["status"] = -1;
$_SESSION["user_id"] = -1;
session_destroy();


header("Location: {$login_page}");