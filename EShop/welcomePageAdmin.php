<?php

session_start();


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
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
            <a href="#" class="navbar-brand"> <font size="5" color="red">ADMIN PANEL</font></a>        </div>
        <div class="collapse navbar-collapse" id="collapse">
            <ul class="nav navbar-nav">
                <li><a href="welcomePageAdmin.php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
                <li><a href="homePageAdmin.php"><span class="glyphicon glyphicon-modal-window"></span>   Products</a></li>
                <li><a href="addNewItem.php"><span class="glyphicon glyphicon-modal-window"></span>   Add Product</a></li>
                <li><a href="removeItem.php"><span class="glyphicon glyphicon-modal-window"></span>   Remove Product</a></li>

            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" id="search">
                </div>
                <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                    <div class="dropdown-menu" style="width:400px;">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-3 col-xs-3">Sl.No</div>
                                    <div class="col-md-3 col-xs-3">Product Image</div>
                                    <div class="col-md-3 col-xs-3">Product Name</div>
                                    <div class="col-md-3 col-xs-3">Price in $.</div>
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
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["name"]; ?></a>
                    <ul class="dropdown-menu">

                        <li class="divider"></li>
                        <li><a href="" style="text-decoration:none; color:blue;">Change Password</a></li>
                        <li class="divider"></li>
                        <li><a href="createUserAdmin.php" style="text-decoration:none; color:blue;">Create New User</a></li>
                        <li class="divider"></li>
                        <li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
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
