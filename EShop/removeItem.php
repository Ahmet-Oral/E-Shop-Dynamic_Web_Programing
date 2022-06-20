<?php
include "databaseConnection.php";
$connect = new mysqli($servername, $username, $password, $db);
$categories = "SELECT * FROM `categories`";
$brands = "SELECT * FROM `brands`";
$result1 = mysqli_query($connect, $categories);
$result2 = mysqli_query($connect, $brands);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sander Technologies</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>

    <script src="js/jquery2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="wait overlay">
    <div class="loader"></div>
</div>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
                <span class="sr-only">navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand"> <font size="5" color="red">ADMIN PANEL</font></a>
        </div>
        <div class="collapse navbar-collapse" id="collapse">
            <ul class="nav navbar-nav">
                <li><a href="welcomePageAdmin.php"><span class="glyphicon glyphicon-home"></span>   Home</a></li>
                <li><a href="homePageAdmin.php"><span class="glyphicon glyphicon-modal-window"></span>   Product</a></li>
                <li><a href="addNewItem.php"><span class="glyphicon glyphicon-modal-window"></span>   Add Product</a></li>
                <li><a href="removeItem.php"><span class="glyphicon glyphicon-modal-window"></span>   Remove Product</a></li>

            </ul>
        </div>
    </div>
</div>
<p><br/></p>
<p><br/></p>

<p><br/></p>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="cart_msg">
            <!--Cart Message-->
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">Remove Product</div>
                <div class="panel-body">
                    <form method="post" action="action.php">
                        <p>
                            <label for="product_cat">Category of the Product</label>
                            <select name="product_cat">

                                <?php while($row1 = mysqli_fetch_array($result1)):;?>

                                    <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

                                <?php endwhile;?>

                            </select>
                        </p>
                        <p>
                            <label for="product_brand">Brand of the Product</label>
                            <select name="product_brand">

                                <?php while($row1 = mysqli_fetch_array($result2)):;?>

                                    <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

                                <?php endwhile;?>

                            </select>
                        </p>
                        <p>
                            <label for="productToEdit">Name of the Product</label>
                            <input type="text" name="productToEdit" id="productToEdit">

                        <input type="submit" name="editItem" value="Remove Product" />
                    </form>
                </div>
            </div>
            <div class="panel-footer"></div>
        </div>

        <div class="col-md-2"></div>

    </div>
</body>
</html>
















