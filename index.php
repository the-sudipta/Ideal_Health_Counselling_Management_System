<?php

session_start();

require './Navigation_BarLinks.php';

$login_Page = login_Page();

header("Location: {$login_Page}");