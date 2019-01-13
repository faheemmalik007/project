<?php

require_once "db_conn.php";

if (isset($_POST['submit_btnn'])){
    $firstname = $_POST['fullname_'];
    $email = $_POST['email_'];
    $userName = $_POST['userName_'];
    $password = $_POST['password_'];
    $confirmPassword= $_POST['confirmPassword_'];
    $address = $_POST['address_'];
    $dob = $_POST['dob_'];
    $gender = $_POST['gender_'];

}


$insert_user_info = "insert into user_info (name,email,username,password,confirmPassword,address,dob,gender) 
                  VALUES ('$firstname','$email','$userName','$password','$confirmPassword','$address','$dob','$gender');";
$inserted_user = mysqli_query($conn, $insert_user_info);

//if($inserted_user){
//    header("location: ".$_SERVER['PHP_SELF']);
//}
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Signup - RackUp</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
    <link rel="stylesheet" href="css/bootstrap.css">

    <style>
        #FormBody{
            box-sizing: border-box;
            display: block;
            /*background: -webkit-linear-gradient(top, #000000, #b42d2d)*/
            border-radius: 10px;
            background:#857E7A;
            /*opacity: 0.5;*/
            /*filter: alpha(opacity=50);*/
        }
        .InpuTTags{
            border-top: none;
            border-left: none;
            border-right: none;
            background-color: transparent;
            border-bottom-color: white;
            font-color: white;
            color: white;
            width: 100%;
            padding-left: 10%;
        }
        .container
        {
            margin-top: 10%;
        }
        #btn-Login {
            border: none;
            background-color: transparent;
            color: white;
            margin-top: 15%;
            margin-bottom: 5%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            font-size: xx-large;
        }
        #btn-Signup {
            border: 1px;
            box-sizing: border-box;
            display: block;
            /*background: -webkit-linear-gradient(top, #000000, #b42d2d)*/
            border-radius: 10px;
            /*background-color: transparent;*/
            color: white;
            margin-bottom: 5%;
            display: block;
            margin-top:30px;
            margin-left: auto;
            margin-right: auto;
            font-size: large;
            color:#1a1a1a;
        }
        .custom {
            position: absolute;
            margin-top:0.25rem;
        }
        .fa-lock
        {
            position: absolute;
        }
        ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: white;
            opacity: 1; /* Firefox */
        }
        body
        {
            /*background-image: url(https://png2.kisspng.com/20180326/liw/kisspng-gradient-desktop-wallpaper-color-background-5ab88c172773b8.5174360515220439271616.png);*/
            /*background-repeat: no-repeat;*/
            background-size:auto;
            font-family:'awesome';
            box-sizing: border-box;
            display: block;
            /*background: -webkit-linear-gradient(top, #000000, #b42d2d)*/
            border-radius: 10px;
            background:#1a1a1a;
        }

        .header {

            width: 100%;
            background: #292929;
            height: 42px;
            top: 0;
        }

        .header ul {
            list-style: none;

        }
        .header ul li a{
            float: left;
            text-decoration: none;
            color: white;
            padding: 0px 40px;
            height: 42px;
            line-height: 42px;
        }
        .header #search{
            float: right;
            color: white;
            padding: 0px 40px;
            height: 42px;
            line-height: 42px;

        }

        .header ul li a:hover{
            background-color:#857E7A;

        }




    </style>

</head>
<body class="bgLoginProperty">
<div class="wrapper">
    <div class="header">
        <ul>
            <li><a  href="index.php">Home </a></li>
            <li><a  href="About-us.php">About</a></li>
            <li><a  href="login.php">Login</a></li>
            <li><a  href="forget-password.php">Forget Password</a></li>
            <li><a  href="register.php">Register</a></li>
            <li><a  href="Contact-us.php">Contact </a></li>
        </ul>
        <div class="search"><i class="fas fa-search"></i></div>
    </div>
</div>
<div class="container" style ="margin-top: 0%">
    <form id="FormBody" method="post"  action="register.php" >
        <div>
            <div class="row my-3">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10 offset-xl-4 offset-lg-4 offset-md-3 offset-sm-1">
                    <p style="color: white" class="d-none d-sm-block">Full Name :</p>
                    <i style="color:white" class="custom fas fa-font mt-1"></i>
                    <input type="text" class="InpuTTags" id="Tg-fullname" required name="fullname_" placeholder="Enter Full Name" >
                </div>
            </div>

            <div class="row my-3">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10 offset-xl-4 offset-lg-4 offset-md-3 offset-sm-1">
                    <p style="color: white;"class="d-none d-sm-block">Email: </p>
                    <i style="color:white"class="custom fas fa-envelope"></i>
                    <input type="text" class="InpuTTags" id="Tg-email" required name="email_" placeholder="Enter Email Address" >
                </div>
            </div>

            <div class="row my-3">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10 offset-xl-4 offset-lg-4 offset-md-3 offset-sm-1">
                    <p style="color: white" class="d-none d-sm-block">Username: </p>
                    <i style="color:white" class="custom fas fa-font mt-1"></i>
                    <input type="text" class="InpuTTags" id="Tg-Username" required name="userName_" placeholder="Username" >
                </div>
            </div>

            <div class="row my-3">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10 offset-xl-4 offset-lg-4 offset-md-3 offset-sm-1">
                    <p style="color: white" class="d-none d-sm-block"> Password:</p>
                    <i style="color: white;" class="custom fas fa-user-circle mt-1"></i>
                    <input type="password" class="InpuTTags" id="Tg-password" required name="password_" placeholder="Enter Password" >
                </div>
            </div>

            <div class="row my-3">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10 offset-xl-4 offset-lg-4 offset-md-3 offset-sm-1">
                    <p style="color: white" class="d-none d-sm-block">Confirm Password:</p>
                    <i style="color: white;" class="custom fas fa-user-circle mt-1"></i>
                    <input type="password" class="InpuTTags" required  name="confirmPassword_"  placeholder="Re Enter Password" >
                </div>
            </div>


            <div class="row my-3">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10 offset-xl-4 offset-lg-4 offset-md-3 offset-sm-1">
                    <p style="color: white" class="d-none d-sm-block">Address</p>
                    <i style="color:white" class="custom fas fa-location-arrow"></i>
                    <input type="text" class="InpuTTags" id="Tg-location" required name="address_" placeholder="Enter Address " >
                </div>
            </div>

            <div class="row my-3">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10 offset-xl-4 offset-lg-4 offset-md-3 offset-sm-1">
                    <p style="color: white" class="d-none d-sm-block">Date Of Birth:</p>
                    <input type = "date" required name = "dob_">
                </div>
            </div>

            <div class="row my-3">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10 offset-xl-4 offset-lg-4 offset-md-3 offset-sm-1">
                    <p style="color: white" class="d-none d-sm-block">Gender:</p>
                    <select class="form-control" id="user_gender" required name="gender_">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Enjoy</option>
                    </select>
                </div>
            </div>

            <div class="row my-3">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 offset-xl-4 offset-lg-4 offset-md-3 offset-sm-1">
                    <button id="btn-Signup" type="submit" name="submit_btnn" > Sign Up </button>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>