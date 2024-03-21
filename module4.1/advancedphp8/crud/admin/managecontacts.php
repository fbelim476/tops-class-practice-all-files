<?php 
require_once("./config/config.php");
require_once('./includes/header.php');
require_once('./includes/sidebar.php');

?>
<div class="col-md-8 p-2">
<h2 class="p-3">Manage All Contacts</h2>
<hr>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Lastname</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">subject</th>
      <th scope="col">Message</th>
      <th scope="col">Date&Time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $select="select *  from tbl_contact";
        $exe=mysqli_query($con,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
        
    ?>
    <tr>
      <th scope="row"><?php echo $fetch["contact_id"];?></th>
      <td><?php echo $fetch["firstname"];?></td>
      <td><?php echo $fetch["lastname"];?></td>
      <td><?php echo $fetch["email"];?></td>
      <td><?php echo $fetch["phone"];?></td>
      <td><?php echo $fetch["subject_id"];?></td>
      <td><?php echo $fetch["message"];?></td>
      <td><?php echo $fetch["contact_date_time"];?></td>
      <td><a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash text-white"></i></a> </td>
    </tr>
   
    <?php 
        }
        ?>
    
  </tbody>
</table>


</div>
</div>




<?php 
require_once('./includes/footer.php');

?>