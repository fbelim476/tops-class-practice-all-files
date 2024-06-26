<?php 
//ob_start();
// require_once('./config/config.php');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- bootstrap stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</head>
<body>

    <!-- flipkart header -->
    <div class="container-fluid bg-white text-dark p-4 shadow">
        <div class="row">
            <div class="col-md-2">
                <!-- logo -->
                <a href="index.php"><img src="assets/images/flipkart-095e08.svg"></a>
            </div>
            <div class="col-md-5">
<!-- search box -->
<div class="input-group">
    <input type="text" name="search" placeholder="Serach product brand and many more" class="form-control">
    <button type="button" class="btn btn-white border border-1"><span class="bi bi-search"></span></button>
</div>

            </div>    
            <div class="col-md-5">

                <ul class="header-link">
                    <li><a href="#"><i class="bi bi-gift"></i> Become a Seller</a></li>
                    <?php 
                        if(!isset($_SESSION["customerid"]))
                        {
                       ?>
                    
                    <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="#"><i class="bi bi-person-add"></i> SignIn</a>
                      
                        <ul class="dropdown-menu">
                            <li><a href="login.php"><span class="bi bi-person"></span> SignIn</a></li>
                            <li><a href="register.php"><span class="bi bi-person"></span> SignUp</a></li>
                        </ul>
                        </li>
                        <?php 
                        }
                        else 
                        {
                          ?>  
                           <li class="dropdown"><a class="dropdown-toggle text-success fs-5" data-bs-toggle="dropdown" href="#"><i class="bi bi-person-add"></i> Welcome :<?php echo ucfirst($_SESSION["name"]);?></a>
                  
                        <ul class="dropdown-menu">
                            <li><a href="manageprofile.php"><span class="bi bi-person"></span> Manage Profile</a></li>
                            <li><a href="notifications.php"><span class="bi bi-bell"></span> Notifications</a></li>
                            <li><a href="chnagepassword.php"><span class="bi bi-bell"></span> Change Password</a></li>
                            <li><a href="notifications.php"><span class="bi bi-truck"></span> Manage Orders</a></li>
                            <li><a href="notifications.php"><span class="bi bi-trash"></span> Delete Account</a></li>
                            <li><a href="logout.php" class="btn btn-sm btn-danger text-white bg-danger"> <span class="bi bi-power"></span> Logout</a></li>
                        </ul>
                        </li>
                        <?php 
                        }
                        ?>
                    
                    <li><a href="cart.php"><i class="bi bi-cart"></i> Cart</a></li>

                </ul>
            </div>
        </div>
    </div>