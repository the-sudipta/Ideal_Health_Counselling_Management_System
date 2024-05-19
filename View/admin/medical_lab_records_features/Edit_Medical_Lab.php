<?php

include_once '../../../Navigation_BarLinks.php';
include_once '../../../Model/medical_lab_repo.php';


$Edit_Medical_lab_Controller = Edit_Medical_Lab_Controller();
$List_Medical_lab_Controller  = List_Medical_Lab();



$edit_id = -1;
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $edit_id =  $_POST['selected_id'];
}
$medical_data = findMedicalLabReportByID($edit_id);


?>

<!DOCTYPE html>
<html lang="en" dir ="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Medical Lab Records</title>
    <link rel="stylesheet" href ="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <script><src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" charset="utf-8"></src></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>

        @import url(https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css);
        *{

            margin:  0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins" , sans-serif;


        }

        body{

            min-height:100vh;
            /*background :url(Counselling_pic.jpg)no-repeat;*/
            background-size:cover;
            background-position: center;


        }

        .side-bar{
            background:rgba(255,255,255,0.1);
            backdrop-filter:blur(15px);
            width:300px;
            height:200vh;
            position:fixed;
            top: 0;
            /*left: -100;*/
            overflow-y:auto;




        }

        .side-bar menu{
            width:100%;
            margin-top: 80px;

        }


        .side-bar .menu .item{

            position:relative;
            cursor: pointer;

        }


        .side-bar .menu .item a{

            color:  #fff;
            background:rebeccapurple ;
            font-size: 16px;
            text-decoration:none;
            display:block;
            padding: 05px 40px;
            line-height: 62px;

        }


        .side-bar .menu .item a:hover{


            background:violet;
            transition: :0.3s ease;

        }

        .side-bar .menu .item i{

            margin-right: 15px;

        }

        .side-bar .menu .item a .dropdown{

            position:absolute;
            right:0;
            margin: : 30px;
            /*transition: 0.3s ease,*/

        }

        .side-bar .menu .item .submenu{

            background: rgba(255,255,255,0.1);
            display:none;
        }


        .side-bar .menu .item .submenu a{

            padding-left: 80px;
        }


        .rotate{


            transform: rotate(90deg);

        }

        .close-btn{

            position:absolute;
            color: #fff;
            font-size: 20px;
            right:0;
            margin: 25px;
            cursor: pointer;




        }

        .menu-btn{

            position:absolute;
            color: #fff;
            font-size: 20px;
            margin: 25px;
            cursor: pointer;




        }







    </style>

    <script>



    </script>


</head>
<body>

<div class ="menu-btn">
    <i class ="fas fa-bars"></i>
</div>

<div class= "side-bar">
    <div class ="close-btn">
        <i class ="fas fa-times"></i>
    </div>
    <nav>
        <div class ="menu">
            <div class="item"><a href ="Admin_Dashboard.php"><img height="35px" width="35px" src="/Ideal_Health_Counselling_Management_System/View/images/dashboard_icon.png">DASHBOARD</i></a></div>
            <div class="item">
                <a class ="sub-btn"><img height="35px" width="35px" src="/Ideal_Health_Counselling_Management_System/View/images/user_icon.png">Profile<i class ="fas-fa-angle-right dropdown"></i></a>
                <div class ="sub-menu">

                </div>
            </div>



            <div class="item">
                <a class ="sub-btn"><img height="35px" width="35px" src="/Ideal_Health_Counselling_Management_System/View/images/patient_icon.png">Patient<i class ="fas-fa-angle-right dropdown"></i></a>
                <div class ="sub-menu">
                </div>
            </div>
            <div class="item">
                <a href="<?php echo $List_Medical_lab_Controller; ?>" class ="sub-btn"><img height="35px" width="35px" src="/Ideal_Health_Counselling_Management_System/View/images/doctor_icon.png">Doctor<i class ="fas-fa-angle-right dropdown"></i></a>
                <div class ="sub-menu">

                </div>
            </div>

            <div class="item">
                <a class ="sub-btn"><img height="35px" width="35px" src="/Ideal_Health_Counselling_Management_System/View/images/employee_icon.png">Employee<i class ="fas-fa-angle-right dropdown"></i></a>
                <div class ="sub-menu">

                </div>
            </div>

            <div class="item">
                <a class ="sub-btn"><img height="35px" width="35px" src="/Ideal_Health_Counselling_Management_System/View/images/pharmacy_icon.png">Pharmacy<i class ="fas-fa-angle-right dropdown"></i></a>
                <div class ="sub-menu">

                </div>
            </div>


            <div class="item">
                <a class ="sub-btn"><img height="35px" width="35px" src="/Ideal_Health_Counselling_Management_System/View/images/medical-laboratory_icon.png">Medical Lab Records<i class ="fas-fa-angle-right dropdown"></i></a>
                <div class ="sub-menu">


                </div>
            </div>

            <div class="item">
                <a class ="sub-btn"><img height="35px" width="35px" src="/Ideal_Health_Counselling_Management_System/View/images/Doctor_Patient_Counselling_report.png">Counselling Reports<i class ="fas-fa-angle-right dropdown"></i></a>
                <div class ="sub-menu">

                </div>
            </div>


            <div class="item"><a href ="#"><img height="35px" width="35px" src="/Ideal_Health_Counselling_Management_System/View/images/logout_icon.png">Logout</i></a></div>

        </div>



</div>
</nav>

<section class ="main" style ="margin-left:310px;">


    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
<!--                            <h1>--><?php //echo $edit_id;?><!--</h1>-->
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Patients Lab Report</h3>
                            <form id="addDoctorForm" action="<?php echo $Edit_Medical_lab_Controller; ?>" method="post" onsubmit="">

                                <div class="row">

                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="id" name="id" hidden="hidden" class="form-control form-control-lg" value="<?php echo $edit_id;?>" />
                                            <input type="text" id="patients_name" name="patients_name" class="form-control form-control-lg" value="<?php if(isset($medical_data['patients_name'])){echo $medical_data['patients_name'];}else{echo "";}?>" />
                                            <label class="form-label" for="patients_name">Patients Name</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <input type="text" id="patients_ailment" name="patients_ailment" class="form-control form-control-lg" value="<?php if(isset($medical_data['patients_ailment'])){echo $medical_data['patients_ailment'];}else{echo "";}?>"/>
                                            <label class="form-label" for="patients_ailment">Patients Ailment</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <input type="text" name="lab_test_date_conducted" id="lab_test_date_conducted" class="form-control form-control-lg" value="<?php if(isset($medical_data['lab_test_date_conducted'])){echo $medical_data['lab_test_date_conducted'];}else{echo "";}?>" />
                                            <label class="form-label" for="lab_test_date_conducted" >Lab Test Date Conducted</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <input type="text" id="test_name" name="test_name" class="form-control form-control-lg" value="<?php if(isset($medical_data['test_name'])){echo $medical_data['test_name'];}else{echo "";}?>"/>
                                            <label class="form-label" for="test_name">Test Name</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <input type="text" name="test_category" id="test_category" class="form-control form-control-lg" value="<?php if(isset($medical_data['test_category'])){echo $medical_data['test_category'];}else{echo "";}?>" />
                                            <label class="form-label" for="test_category" >Test Category</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Update" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>




</body>
</html>