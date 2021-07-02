
<?php 
include("dbconnection.php");
if(isset($_POST['decline'])) // when click on Update button
{
   $cust_name = $_POST['cust_name'];
    $edit = mysqli_query($db,"update customer_claim set claim_status='Declined', cust_name='$cust_name'");
	
    if($edit)
    {
         // Close connection
        header("location:viewpolicycalim.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}else if(isset($_POST['approve'])){
	$cust_name = $_POST['cust_name'];
    $edit = mysqli_query($db,"update customer_claim set claim_status='Approved', cust_name='$cust_name'");
	
    if($edit)
    {
         // Close connection
        header("location:viewpolicycalim.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>