<?php 
require_once("./config/config.php");
if(isset($_POST["st"]))
{
    $st=$_POST["st"];
    $select="select * from tbl_city where sid='$st'";
    $exe=mysqli_query($con,$select);
    while($fetch=mysqli_fetch_array($exe))
    {
    ?>

    <option value="<?php echo $fetch["ctid"];?>"><?php echo $fetch["cityname"];?></option>

 <?php 
    }       
}
?>