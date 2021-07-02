<?php
include("header.php");
if(isset($_POST['submit']))
{
	$sqlrec = "SELECT * FROM customer WHERE login_id='$_POST[loginid]' ";
	$var=mysqli_query($con,$sqlrec);	
	if(mysqli_num_rows($var)==1)
	{
		$url =  'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
		$rs = mysqli_fetch_array($var);
	 	$mailmsg = "Kindly recover password by entering clicking following link: " . $url ."/recoverpassword.php?id=".$rs[0];
		include("sendmail.php");
		sendmail($rs['email_id'],$rs['customer_name'],"eInsurance - Password Recovery Mail",$mailmsg);	
		echo "<script>alert('Password sent on mail');</script>";
	}
	else
	{
		echo "<script>alert('Inavalid login credentials');</script>";	
	}
}
?>

<section id="contact-page">
<div class="container">
<div class="center">        
<h2>CUSTOMER LOGIN PANEL</h2>
<p class="lead">Enter the login details...</p>
</div>
 
<div class="row contact-wrap"> 
<div class="status alert alert-success" style="display: none"></div>

<form id="main-contact-form" class="contact-form" method="post" name="contact" action="">
<div align="center">
<table   border="1"  id="example" class="table table-striped table-bordered" cellspacing="0" style="width:50%">
<tr><th><label for="author">Login ID:</label></th><td> <input type="text" name="loginid" class="form-control" required /></td>
<div class="cleaner_h10"></div></tr>
<tr><td colspan="2"><div align="center"><input type="submit" value="Login.." id="submit" name="submit" class="btn btn-primary btn-lg" /></div></td></tr>


</table>
</div>
</form>
</div><!--/.row-->
</div><!--/.container-->
</section><!--/#contact-page-->

<?php
include("footer.php"); include("datatables.php");
?>