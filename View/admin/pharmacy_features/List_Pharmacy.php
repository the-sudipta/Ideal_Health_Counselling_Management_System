<?php


require_once '../../../Navigation_BarLinks.php';
require_once '../../../Model/pharmacy_repo.php';



$Admin_Dashboard = Admin_Dashboard_page();
$List_Doctor = List_Doctor();
$List_Patient =List_Patient();
$Edit_Pharmacy_Page = Edit_Pharmacy();
$Delete_PharmacyController = Delete_PharmacyController();
$List_Employee = List_Employee();
$Medical_Lab_Records_List=List_Medical_Lab();
$List_Pharmacy = List_Pharmacy();



?>

<!DOCTYPE html>
<html lang="en" dir ="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ideal Health Counselling Management System</title>
    <link rel="stylesheet" href ="css/style.css">
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

        function toggleDropdown() {
            var dropdown = document.getElementById("avatarDropdown");
            dropdown.style.display = dropdown.style.display === "none" || dropdown.style.display === "" ? "block" : "none";
        }

        function toggleDrawer() {
            var drawer = document.getElementById("myDrawer");
            drawer.style.width = drawer.style.width === "250px" ? "0" : "250px";
            var content = document.getElementById("mainContent");
            content.style.marginLeft = content.style.marginLeft === "250px" ? "0" : "250px";
        }


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
            <div class="item"><a href ="<?php echo $Admin_Dashboard; ?>"><img height="35px" width="35px" src="/Ideal_Health_Counselling_Management_System/View/images/dashboard_icon.png">DASHBOARD</i></a></div>
            <div class="item">
                <a class ="sub-btn"><img height="35px" width="35px" src="/Ideal_Health_Counselling_Management_System/View/images/user_icon.png">Profile<i class ="fas-fa-angle-right dropdown"></i></a>
                <div class ="sub-menu">

                </div>
            </div>



            <div class="item">
                <a href="<?php echo $List_Patient; ?>" class ="sub-btn"><img height="35px" width="35px" src="/Ideal_Health_Counselling_Management_System/View/images/patient_icon.png">Patient<i class ="fas-fa-angle-right dropdown"></i></a>
                <div class ="sub-menu">
                </div>
            </div>
            <div class="item">
                <a href="<?php echo $List_Doctor; ?>" class ="sub-btn"><img height="35px" width="35px" src="/Ideal_Health_Counselling_Management_System/View/images/doctor_icon.png">Doctor</a>
                <div class ="sub-menu">

                </div>
            </div>

            <div class="item">
                <a href="<?php echo $List_Employee; ?>" class ="sub-btn"><img height="35px" width="35px" src="/Ideal_Health_Counselling_Management_System/View/images/employee_icon.png">Employee<i class ="fas-fa-angle-right dropdown"></i></a>
                <div class ="sub-menu">

                </div>
            </div>

            <div class="item">
                <a href="<?php echo $List_Pharmacy; ?>" class ="sub-btn"><img height="35px" width="35px" src="/Ideal_Health_Counselling_Management_System/View/images/pharmacy_icon.png">Pharmacy<i class ="fas-fa-angle-right dropdown"></i></a>
                <div class ="sub-menu">

                </div>
            </div>


            <div class="item">
                <a href="<?php echo $Medical_Lab_Records_List; ?>" class ="sub-btn"><img height="35px" width="35px" src="/Ideal_Health_Counselling_Management_System/View/images/medical-laboratory_icon.png">Medical Lab Records<i class ="fas-fa-angle-right dropdown"></i></a>
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

    <table class="table">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Medicine Name</th>
            <th>Vendor</th>
            <th>Barcode</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php


        $data = findAllPharmacies();
        foreach ($data as $row){
            echo '<tr>';
            echo '<td>'.$row['id'].'</td>';
            echo '<td>'.$row['medicine_name'].'</td>';
            echo '<td>'.$row['vendor'].'</td>';
            echo '<td>'.$row['barcode'].'</td>';
            echo '<td>'.$row['description'].'</td>';
            echo '<td>';
            echo '<div class="d-flex">'; // Use Bootstrap's d-flex class to create a flex container

            echo '
                                <form action="'.$Edit_Pharmacy_Page.'" method="post" class="mr-2"> 
                                    <div class="form-group">
                                        <input type="number" id="selected_id" name="selected_id" hidden="hidden" value="' . $row['id'] . '" />
                                        <input type="number" id="selected_user_id" name="selected_user_id" hidden="hidden" value="' . $row['user_id'] . '" />
                                    </div>
                                    <input type="submit" class="btn btn-warning" value="Edit"/>
                                </form>
                            ';

            echo '
                                <form action="'.$Delete_PharmacyController.'" method="post">
                                    <div class="form-group">
                                        <input type="number" id="selected_id" name="selected_id" hidden="hidden" value="' . $row['id'] . '" />
                                        <input type="number" id="selected_user_id_del" name="selected_user_id" hidden="hidden" value="' . $row['user_id'] . '" />
                                    </div>
                                    <input type="submit" class="btn btn-danger" value="Delete"/> 
                                </form>
                            ';

            echo '</div>';
            echo '</td>';
            echo '</tr>';

        }




        ?>

        </tbody>
    </table>


</section>




</body>
</html>