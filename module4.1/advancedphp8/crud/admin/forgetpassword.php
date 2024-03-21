<?php 
require_once('./includes/header.php');
require_once('./includes/navbar.php');


?>
    <!-- forget password page -->

    <div class="container bg-white border border-1 mt-5 p-4">
        <a href="" class="ms-5 p-5"><b>Login here</b></a>
    </div>
    <div class="container bg-white border border-1 mt-2 p-4 col-md-7">

        <div class="row">
            <div class="col-md-5">
                <h5 class="text-center">Forget your password ?</h5>
                <img src="https://cdn.dribbble.com/users/195163/screenshots/1399830/reset_pwd.gif" class="w-75 ms-3">
            </div>
            <div class="col-md-7">
                <form method="post">
                    <div class="input-group mt-3">
                        <label>Enter Email *</label>
                        <input type="email" name="email" placeholder="Email *" class="form-control">
                    </div>
                    
                    
                    <div class="input-group mt-3">
                        <input type="submit" name="forget" value="Submit" class="btn btn-sm btn-dark text-white">
                       
                    </div>

                  
                </form>
            </div>

        </div>
     
    </div>
    <?php 
require_once('./includes/footer.php');



?>