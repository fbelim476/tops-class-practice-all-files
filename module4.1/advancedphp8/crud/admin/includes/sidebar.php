<?php
// dynamic total count of total contacts
$select="select count(contact_id) as total from tbl_contact";
$exe=mysqli_query($con,$select);
$fetch=mysqli_fetch_array($exe);

?>
<!-- navbar -->
   <div class="row">
    <div class="col-md-3">
    <nav class="nav sidebar navbar-expand-md bg-primary">
    <!-- navbar in list -->
    <ul class="sidebar-link">
    <li><a href="dashboard.php"><img src="https://static.vecteezy.com/system/resources/previews/009/636/683/original/admin-3d-illustration-icon-png.png" class="img-fluid w-50"></a></li>
        <li><a href="products.php"><i class="bi bi-person"></i> Manage Customer</a></li>
        <li class="dropdown"><a href="products.php" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-cart"></i> Add Category</a>
        <ul class="dropdown-menu">
            <li><a href="addcategory.php">Add Category</a></li>
            <li><a href="managecategory.php">Manage Category</a></li>
        </ul>
        </li>

        <li class="dropdown"><a href="products.php" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-cart"></i> Add Products</a>
        <ul class="dropdown-menu">
            <li><a href="addproduct.php">Add Products</a></li>
            <li><a href="manageproduct.php">Manage Products</a></li>
        </ul>
        </li>
        <li><a href="manageorder.php">Manage Orders <i class="bi bi-truck position-relative"><span class="badge bg-danger start-100 top-0 position-absolute rounded-pill">5</span></i></a></li>
        <li><a href="managereviews.php">Manage Reviews <i class="bi bi-chat-dots position-relative"><span class="badge bg-danger start-100 top-0 position-absolute rounded-pill">5</span></i></a></li>
        
        <li><a href="managecontacts.php">Manage contact <i class="bi bi-telephone position-relative"><span class="badge bg-danger start-100 top-0 position-absolute rounded-pill">  <?php echo $fetch["total"];?></span></i></a></li>

        <li><a href="logout.php" class="btn btn-danger text-white btn-sm w-75">Logout here <i class="bi bi-power"></i></a></li>
    </ul>

 </nav>
</div>
