
<?php 
require_once("./config/config.php");
require_once('./includes/header.php');
require_once('./includes/navbar.php');

?>
<!-- Manage profiles page -->
<!-- ajax called here -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    // ajax
    function str(val)
    {
        $.ajax({
               
            type:"POST",
            url:"getdata.php",
            data:"st="+val,
            success:function(data)
            {
                $("#ct").html(data);
            }

        });

    }
</script>
<div class="container bg-white border border-1 mt-5 p-4">
    <a href="" class="ms-5 p-5"><b>Manage Profile here</b></a>
</div>
<div class="container bg-white border border-1 mt-2 p-4 col-md-10">

        <div class="row">
            <div class="col-md-5 p-5 shadow">
                <h5 class="">Manage Profile here</h5>
                <ul class="sidebar-link">
                            <li><a href="manageprofile.php"><span class="bi bi-person"></span> Manage Profile</a></li>
                            <li><a href="notifications.php"><span class="bi bi-bell"></span> Notifications</a></li>
                            <li><a href="chnagepassword.php"><span class="bi bi-bell"></span> Change Password</a></li>
                            <li><a href="notifications.php"><span class="bi bi-truck"></span> Manage Orders</a></li>
                            <li><a href="notifications.php"><span class="bi bi-trash"></span> Delete Account</a></li>
                            <li><a href="logout.php" class="btn btn-sm btn-danger text-white bg-danger"> <span class="bi bi-power"></span> Logout</a></li>
                        </ul>
            </div>
            <div class="col-md-7">
                <form method="post" enctype="multipart/form-data">
                <div class="input-group mt-3">
                        <input type="file" name="img" placeholder="photo *" class="form-control">
                    </div>
                    
                    <div class="input-group mt-3">
                        <input type="text" name="name" placeholder="Name *" class="form-control">
                    </div>
                    <div class="input-group mt-3">
                        <input type="email" name="email" placeholder="Email *" class="form-control">
                    </div>
                 
                    <div class="input-group mt-3">
                        <input type="text" name="phone" placeholder="Phone *" class="form-control">
                    </div>

                    
                    <div class="input-group mt-3">
                        <textarea name="address" placeholder="Address *" class="form-control"></textarea>
                    </div>

                    
                    <div class="input-group mt-3">
                        <select  name="state" placeholder="state *" onchange="return str(this.value)" id="st" class="form-control">
                        <option value="">-select state-</option>
                       <!-- fetch dynamic state from state tables -->
                       <?php
                       $select="select * from tbl_state";
                       $exe=mysqli_query($con,$select);
                       while($fetch=mysqli_fetch_array($exe))
                       { 
                       ?>  
                        <option value="<?php echo $fetch["sid"];?>"><?php echo $fetch["statename"];?></option>
                        <?php 
                       }
                       ?>
                        </select>
                    </div>

                    <div class="input-group mt-3">
                        <select  name="city" placeholder="city *" id="ct" class="form-control">
                        <option value="">-select city-</option>
                        <!-- select state and fetch that state of city apply ajax -->
                        
                       <!-- fetch dynamic city from city tables -->
                       <?php /*
                       $select="select * from tbl_city";
                       $exe=mysqli_query($con,$select);
                       while($fetch=mysqli_fetch_array($exe))
                       { 
                       ?>  
                        <option value="<?php echo $fetch["ctid"];?>"><?php echo $fetch["cityname"];?></option>
                        <?php 
                       }
                       */
                       ?>
                        </select>
                    </div>

                    <div class="input-group mt-3">
                        <input type="submit" name="update" value="Update" class="btn btn-sm btn-dark text-white">
                        
                        <input type="reset" name="reset" value="Reset" class="btn btn-sm btn-danger text-white ms-3">
                       
                    </div>

                    
                </form>
            </div>

        </div>
     
    </div>

    <?php 
require_once('./includes/footer.php');
?>