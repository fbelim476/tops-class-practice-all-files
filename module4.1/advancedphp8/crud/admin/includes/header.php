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
            <div class="col-md-4">
                <!-- logo -->
                <a href="index.php"><h1>Admin Dashboard</a>
            </div>
            <div class="col-md-4">
<!-- search box -->
<div class="input-group">
    <input type="text" name="search" placeholder="Serach product brand and many more" class="form-control">
    <button type="button" class="btn btn-white border border-1"><span class="bi bi-search"></span></button>
</div>

            </div>    
            <div class="col-md-4">

                <ul class="header-link">
                    <li><a href="#"><i class="bi bi-gift"></i> Become a Seller</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="#"><?php echo $_SESSION["email"]; ?></a>
                    <ul class="dropdown-menu" style="min-width:190px">
                    <li><a href="#"><i class="bi bi-lock"></i> Change Password</a></li>
                    <!-- <li><a href="logout.php" onclick="return confirm('Are you sure to Logout as admin ?')"><i class="bi bi-power"></i> Logout</a></li> -->
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#lg"><i class="bi bi-power"></i> Logout</a></li>
                  </ul>
                  </li>
                  
                  

                </ul>
            </div>
        </div>
    </div>


    <!-- logout modal -->
    <div class="modal fade" id="lg" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content p-5">
                <p> <button type="button" class="btn btn-sm btn-danger text-white float-end" data-bs-dismiss="modal">&times;</button></p>
                <h5 class="text-center">Are you sure to logout as Admin ?</h5>
                <p class="text-center mt-5">
                    <a href="logout.php"><button type="button" class="btn btn-sm btn-danger bg-success text-white border border-0">Ok</button></a>
                    <button type="button" class="btn btn-sm btn-danger bg-danger ms-2 text-white border border-0" data-bs-dismiss="modal">Cancel</button>
                </p>

            </div>
        </div>
    </div>