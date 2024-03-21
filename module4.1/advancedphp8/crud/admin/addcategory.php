<?php 
require_once("./config/config.php");
require_once('./includes/header.php');
require_once('./includes/sidebar.php');

?>
<div class="col-md-8 p-2">
<h2 class="p-3">Add category</h2>
<hr class="w-50 ms-3" align="left">
<form method="post">
    <div class="form-group col-md-6 ms-3">
        <input type="text" name="catname" placeholder="Enter category name *" required class="form-control">
    </div>

    <div class="form-group col-md-6 ms-3 mt-2">
        <input type="date" name="addeddate" placeholder="Enter Date*" required class="form-control">
    </div>

    <div class="form-group col-md-6 ms-3 mt-2">
        <textarea name="catdesc" placeholder="Enter category Descriptions *" required class="form-control"></textarea>
    </div>

    <div class="form-group col-md-6 mt-2 ms-3">
        <input type="submit" name="add-category" class="btn btn-sm btn-primary" value="AddCategory">

        <input type="reset" name="reset" class="btn btn-sm btn-danger ms-2" value="Reset">
    </div>
</form>




</div>
</div>




<?php 
require_once('./includes/footer.php');

?>