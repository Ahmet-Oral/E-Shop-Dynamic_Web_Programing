<?php

session_start();



if(isset($_POST['yapamadım'])) {
    $conn = new mysqli($servername, $username, $password, $db);
    $email = mysqli_real_escape_string($con,$_POST["email"]);
    $password = md5($_POST["password"]);
    $sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";
    $run_query = mysqli_query($con,$sql);
    $count = mysqli_num_rows($run_query);

    $q = "SELECT `usertype` FROM user_info WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($q);
    $row = $result->fetch_assoc();


    if($row['usertype'] != 'admin'){
        header("Location: http://localhost/EShop/homePageGuest.php");
        exit();
}
}





?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>

    <script src="js/jquery2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <style>
        @media screen and (max-width:480px){
            #search{width:80%;}
            #search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
        }
    </style>
</head>
<body>
</body>

<p><br/></p>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header"style="margin-bottom:10px">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
                <span class="sr-only">navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Best E-Shop Ever</a>
        </div>
        <div class="collapse navbar-collapse" id="collapse">
            <ul class="nav navbar-nav">
                <li><a href="welcomePageGuest.php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
                <li><a href="homePageGuest.php"><span class="glyphicon glyphicon-modal-window"></span>   Products</a></li>

            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" id="search">
                </div>
                <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
                    <div class="dropdown-menu" style="width:400px;">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-3">Sl.No</div>
                                    <div class="col-md-3">Product Image</div>
                                    <div class="col-md-3">Product Name</div>
                                    <div class="col-md-3">Price in $.</div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div id="cart_product">
                                    <!--<div class="row">
                                        <div class="col-md-3">Sl.No</div>
                                        <div class="col-md-3">Product Image</div>
                                        <div class="col-md-3">Product Name</div>
                                        <div class="col-md-3">Price in $.</div>
                                    </div>-->
                                </div>
                            </div>
                            <div class="panel-footer"></div>
                        </div>
                    </div>
                </li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
                    <ul class="dropdown-menu">
                        <div style="width:300px;">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Login</div>
                                <div class="panel-heading">
                                    <form onsubmit="return false" id="login">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" required/>
                                        <label for="email">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" required/>
                                        <p><br/></p>
                                        <a href="#" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;">
                                        <div><a style="color:white; list-style:none;" href="customer_registration.php?register=1">Create a new account?</a></div>
                                    </form>
                                </div>
                                <div class="panel-footer" id="e_msg"></div>
                            </div>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<p><br/></p>
<style>
    body, html {
        height: 100%;
        margin: 0;
    }

    .bgimg {
        background-image: url('https://i.pinimg.com/originals/cc/98/80/cc988034b2c9e752f7986006e7e2aaf0.jpg');
        height: 100%;
        background-position: center;
        background-size: cover;
        position: relative;
        color: white;
        font-family: "Courier New", Courier, monospace;
        font-size: 25px;
    }

    .topleft {
        position: absolute;
        top: 0;
        left: 16px;
    }

    .bottomleft {
        position: absolute;
        bottom: 0;
        left: 16px;
    }

    .middle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    hr {
        margin: auto;
        width: 40%;
    }
</style>
<body>

<div class="bgimg">
    <div class="topleft">
        <p></p>
    </div>
    <div class="middle">
        <h1>Best Online Shop Ever</h1>
        <hr>
        <p>Welcome!</p>
    </div>
    <div class="bottomleft">
        <p></p>
    </div>
</div>


<script>
    function myFunction(){
        if(data == "admin_login_success"){
            window.location.replace = "http://localhost/EShop/adminindex.php";
        }
        else if(data == "login_success"){
            window.location.href = "userindex.php";
        }
        else{
            window.location.href = "homePageGuest.php";

        }}
    function bestfunction(){
        alert('event has been triggered');
        $("#login").on("submit",function(event){
            event.preventDefault();
            $(".overlay").show();
            $.ajax({
                url	:	"login.php",
                method:	"POST",
                data	:$("#login").serialize(),
                success	:function(data){
                    console.log(data)
                    if(data == "admin_login_success"){
                        window.location.href = "adminindex.php";
                    }else if(data == "cart_login"){
                        window.location.href = "cart.php";
                    }else if(data == "login_success"){
                        window.location.href = "userindex.php";
                    }else{
                        $("#e_msg").html(data);
                        $(".overlay").hide();
                    }
                }
            })
        })
    }
</script>
</body>
</html>
