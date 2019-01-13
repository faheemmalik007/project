<!DOCTYPE html>
<html lang="en">
<head>

    <title>Login - RackUp</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
    <link rel="stylesheet" href="css/bootstrap.css">

    <style>
        body {
            background-color: #1a1a1a;
            font-family:'awesome';
        }
        #FormBody {
            box-sizing: border-box;
            display: block;
            border-radius: 10px;
            background: #857E7A;


        }
        .InpuTTags{
            border-top: none;
            border-left: none;
            border-right: none;
            background-color: transparent;
            border-bottom-color: black;
            color: black;
            width: 100%;
            padding-left: 10%;
        }
        .container
        {
            margin-top: 7%;
            background-color: #857E7A;
            border: 1px;
            border-radius: 10px
        }
        #btn-Login {
            border: 1px;
            box-sizing: border-box;
            display: block;
            /*background: -webkit-linear-gradient(top, #000000, #b42d2d)*/
            border-radius: 10px;
            /*background-color: transparent;*/
            margin-bottom: 5%;
            margin-top:30px;
            margin-left: auto;
            margin-right: auto;
            font-size: large;
            color:#1a1a1a;
        }

        #btn-Signup {
            margin-bottom: 5%;
            display: block;
            margin-top:10px;
            margin-left: auto;
            margin-right: auto;
            font-size: large;
            color:#1a1a1a;
        }
        .fa-user-circle
        {
            position: absolute;
        }
        .fa-lock
        {
            position: absolute;
        }
        ::placeholder
        {
            color: black;
            opacity: 1;
        }
        .bgLoginProperty {
            /*background-x%;*/
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

        .header ul li a. active{
            background-color:#f20068;
        }
    </style>

</head>
<body class="bgLoginProperty">
<form>

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

    <div class="container col-xl-4 col-lg-6 col-md-8 col-sm-10 ">
        <form id="FormBody">
            <div>
                <!--<div class="text-center">-->
                <!--<img src="Images/lg2.png" alt="LOGO"/>-->
                <!--</div>-->

                <div class="row my-5">
                    <div class="col-10 col-xl-10 col-lg-10 col-md-10 col-sm-10 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 offset-1">
                        <p style="color: black" class="d-none d-sm-block">Login :</p>
                        <i style="color: black;" class="fas fa-user-circle mt-1"></i>
                        <input type="text" class="InpuTTags" id="Tg-Username" name="User" placeholder="Username" >
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-10 col-xl-10 col-lg-10 col-md-10 col-sm-10 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 offset-1">
                        <p style="color: black"class="d-none d-sm-block">Password :</p>
                        <i style="color: black;" class="fas fa-lock mt-1"></i>
                        <input type="password" class="InpuTTags" id="Tg-Password" name="Pwd" placeholder="Password" >
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-10 col-xl-10 col-lg-10 col-md-10 col-sm-10 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 offset-1">
                        <button id="btn-Login" type="submit"> Login </button>
                    </div>
                </div>

                <div class="row my-3" >
                    <div class="col-10 col-xl-10 col-lg-10 col-md-10 col-sm-10 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 offset-1">
                        <button id="btn-Signup" type="submit"> <a href="register.php"> Create an Account </a> </button>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 offset-xl-1 offset-lg-1 offset-md-1 offset-1 offset-md-1">
                        <a href="forget-password.php" style="color: black">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>