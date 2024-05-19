<?php
include_once '../../Navigation_BarLinks.php';


//echo '<h1>Request Received</h1>'; 

//echo $_REQUEST['email'];


//require_once __DIR__ .'/../../Model/user_repo.php';
require_once '../../Model/user_repo.php';



session_start();
//echo $_REQUEST['email']; 

$Signup_page = Signup_path();
$Admin_Dashboard_page=admin_dashboardPage();


//echo $_SERVER['REQUEST_METHOD'];
$everythingOKCounter =0;
$everythingOk =0;
if($_SERVER['REQUEST_METHOD'] === 'POST'){

      //  echo "Got Req";



   //Email Validation

   $email =$_POST['email'];
   if(empty($email))
   {

    $everythingOk =false;
    $everythingOKCounter +=1;
    
    echo "Mail error 1";

   }
   elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
   {


    $everythingOk =false;
    $everythingOKCounter +=1;
    echo "Mail error 2";

   }
   else
   {

    $everythingOK =true;

   }


   //Password validation
   $password =$_POST['password'];
   if(empty($password) || strlen($password)<0){
    
    //check if password size in 8 or more and check if it is empty

    $everythingOk =false;
    $everythingOKCounter +=1;
    echo "Pass error 1";


   }
   
else
{
  
    $everythingOK = true;

}

if($everythingOK && $everythingOKCounter === 0 )
{

    $data = createUser($email, $password, "admin");

// Check if the data is an array before accessing its elements
if (is_array($data) && isset($data["id"])) {
    $_SESSION["data"] = $data;
    $_SESSION["user_id"] = $data["id"];
    
    if ($data["id"] > 0) {
        if ($data['role'] === 'admin') { 
           // header("Location:{$Admin_Dashboard_page}");
        } else if ($data['role'] === 'doctor') { 
            //header("Location: {$Doctor_Dashboard_page}");
            echo "Access denied!";
        } else {
            //header("Location: {$Signup_page}");
        }
    }
} 

}
else{



    header("Location: {$Signup_page}");


}










}





?>