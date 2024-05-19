<?php
include_once '../Navigation_BarLinks.php';
$UserRepo_file= user_repofile();

//echo '<h1>Request Received</h1>'; 

//echo $_REQUEST['email'];


require_once __DIR__ .'/../Model/user_repo.php';





session_start();
//echo $_REQUEST['email']; 

$Login_page = login_Page();
$Admin_Dashboard_page =admin_dashboardPage();


//echo $_SERVER['REQUEST_METHOD'];
$everythingOKCounter =0;

if($_SERVER['REQUEST_METHOD'] === 'POST'){

      //  echo "Got Req";



   //Email Validation

   $email =$_POST['email'];
   if(empty($email))
   {

    $everythingOk =false;
    $everythingOKCounter +=1;
    
    echo "Empty email is denied!";

   }
   elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
   {


    $everythingOk =false;
    $everythingOKCounter +=1;
    echo "Empty password is denied!";

   }
   else
   {

    $everythingOK =true;

   }


   //Password validation
   $password =$_POST['password'];
   if(empty($password) || strlen($password)<0){
    
    //check if passwordd size in 8 or more and check if it is empty

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

    //echo "all ok";
    $data =findUserByEmailAndPassword($email,$password);
    //echo '\nData id ='.data["id"]."\n";
    $_SESSION["data"] =$data;
    $_SESSION["user_id"] = $data["id"];
    if($data["id"] > 0)
    {
    
        if($data['role'] === 'doctor')
        { 
         //header("Location: {$Doctor_Dashboard_page}");
        }else if($data['role'] === 'admin')
        { 
         header("Location: {$Admin_Dashboard_page}");
         echo "Everything is ok!";
        }
        elseif ($data['role'] === 'patient')
        { 
            //header("Location: {$Patient_Dashboard_page}");
        }elseif ($data['role'] === 'employee')
        { 
           // header("Location: {$Employee_Dashboard_page}");
        }else
        {
            //header("Location: {$Login_page}");
        }

    }else
    {

        header("Location: {$Login_page}");
    }


}
else{



    header("Location: {$Login_page}");


}










}





?>