<?php 
require_once("./config/config.php");
require_once('./includes/header.php');
require_once('./includes/sidebar.php');
// session terminate after logout

if(!isset($_SESSION["adminid"]))
{
    echo "<script>
        window.location='index.php';
    </script>";
}
// dynamic total count of total contacts
$select="select count(contact_id) as total from tbl_contact";
$exe=mysqli_query($con,$select);
$fetch=mysqli_fetch_array($exe);

?>
<div class="col-md-8 p-2">
<h2 class="p-3">Admin Dashboard</h2>
<hr>
<div class="row">
    <div class="col-md-3 ms-3 p-2 bg-success">
    <p class="text-center text-white fs-4">Total Customers</p>    
    <p class="text-center"><span class="badge badge-sm bg-danger start-100 top-0 rounded-pill w-50 mx-auto"><span class="bi bi-person">10</span></span></p>
    </div>
    <div class="col-md-3 ms-3 p-2 bg-primary">
    <p class="text-center text-white fs-4">Total Products</p>
    <p class="text-center"> <span class="badge badge-sm bg-danger start-100 top-0 rounded-pill w-50 mx-auto"><span class="bi bi-person">10</span></span></p>
    </div>

    <div class="col-md-3 ms-3 p-2 bg-dark">
        
    <p class="text-center text-white fs-4">Total contacts</p>
    <a href="managecontacts.php"><p class="text-center"><span class="badge badge-sm bg-danger start-100 top-0 rounded-pill w-50 mx-auto"><span class="bi bi-person">
      <?php echo $fetch["total"];?>
    </span></span></p></a>
    </div>

    
    <div class="col-md-3 ms-3 mt-5 p-0 bg-primary">
    <p class="text-center"><span class="bi bi-facebook text-white fs-1"></span></p>
    </div>
    
    <div class="col-md-3 ms-3 mt-5 p-0 bg-info">
        <p class="text-center"><span class="bi bi-instagram fs-1"></span></p>
    </div>
    <div class="col-md-3 ms-3 mt-5 p-0 bg-danger">
    <p class="text-center"><span class="bi bi-youtube text-white fs-1"></span></p>
    </div>
</div>
</div>
</div>




<?php 
require_once('./includes/footer.php');

?>