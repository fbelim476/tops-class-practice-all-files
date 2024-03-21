<?php 
require_once('./includes/header.php');
require_once('./includes/navbar.php');


?>
<!-- empty cart -->
    <div class="container bg-white border border-1 mt-5 p-4">
        <a href="" class="ms-5 p-5"><b>Flipkart</b></a>
    </div>

    <div class="container bg-white border border-1 mt-2 p-4">
      <center>
        <img src="assets/images/cart.webp" class="w-25">
        <h2>Missing Cart items?</h2>
        <p>Login to see the items you added previously</p>
        <a href="login.html"><button type="button" class="btn btn-primary btn-lg text-white">Login</button></a>    
      </center>
    </div>

<?php 

require_once('./includes/footer.php');
?>