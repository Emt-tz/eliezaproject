<?php
include("header.php");
if($_SESSION['randomid'] == $_POST['randomid'])
{
	if(isset($_POST['submit']))
	{
		if(isset($_GET['editid']))
		{
			$sqlrec = "UPDATE city SET state_id='$_POST[state]',city='$_POST[city]',status='$_POST[status]' WHERE city_id='$_GET[editid]'";
			$qsqlrec = mysqli_query($con,$sqlrec);
			if(mysqli_affected_rows($con) == 1 )
			{
				echo "<script>alert('1 record updated successfully...');</script>";
			}
			else
			{
				echo "Failed to insert record.." . mysqli_error($con);
			}
		}
		else
		{
			$sqlrec = "INSERT INTO city (state_id,city,status) VALUES ('$_POST[state]','$_POST[city]','$_POST[status]')";
			$qsqlrec = mysqli_query($con,$sqlrec);
			if(mysqli_affected_rows($con) == 1 )
			{
				echo "<script>alert('Record inserted successfully...');</script>";
			}
			else
			{
				echo "Failed to insert  record.." . mysqli_error($con);
			}
		}
		
	}
}
if(isset($_GET['editid']))
{
	$sqlrecedit = "SELECT * FROM city WHERE city_id='$_GET[editid]'";
	$qsqlrecedit = mysqli_query($con,$sqlrecedit);
	$rsedit = mysqli_fetch_array($qsqlrecedit);
}
$_SESSION['randomid'] = rand();
?>

<section id="contact-page" >
<div class="container">
<div class="center">        
<h2>CITY</h2>
<p class="lead">Kindly enter the credentials</p>
</div> 

<div class="row contact-wrap"> 
<div class="status alert alert-success" style="display: none"></div>

<form id="main-contact-form" class="contact-form" method="post"  action="" name="frmcity" onsubmit="return validateform()" >
<input type="hidden" name="randomid" value="<?php echo $_SESSION['randomid']; ?>"  />

<div align="center">
<table cellspacing="0" class="table table-striped table-bordered" id="example" style="width:50%">

<tr><th><label for="Password">State:</label></th><td>
<select name="state" class="form-control" >
<option value="">Select</option>
<?php
$sqlrecstate = "SELECT * FROM state";
$qsqlrecstate = mysqli_query($con,$sqlrecstate);
while($rsstate = mysqli_fetch_array($qsqlrecstate))
{
if($rsstate['state_id'] == $rsedit['state_id'])
{
echo "<option value='$rsstate[state_id]' selected>$rsstate[state]</option>";
}
else
{
echo "<option value='$rsstate[state_id]'>$rsstate[state]</option>";
}
}
?>
</select></br><span id="idstate"></span></td><div class="cleaner_h10"></div></tr>

<tr><th> <label for="Password">City:</label></th><td> <input type="text" class="form-control"  name="city" value="<?php echo $rsedit['city'];?>"/><span id="idcity"></span></td></tr><div class="cleaner_h10"></div>

<tr><th>  <label for="Password">Status:</label> </th><td> <select name="status" class="form-control" >
<option value="">Select status</option>
<?php
$arr = array("Active","Inactive");
foreach($arr as $val)
{
if($val == $rsedit['status'])
{
echo "<option value='$val' selected>$val</option>";
}
else
{
echo "<option value='$val'>$val</option>";
}
}
?>
</select></br><span id="idstatus"></span></td></tr>

<tr><td colspan="2"><div align="center"><button type="submit" name="submit" class="btn btn-primary btn-lg" onclick="submit()" >Submit</button></div></td></tr>				

</table>
</div>		
</form>
</div><!--/.row-->
</div><!--/.container-->
</section><!--/#contact-page-->

<?php
include("footer.php"); include("datatables.php");
?>
<script type="application/javascript">
function validateform()
{
	var i=0;
	
	var alphaExp = /^[a-zA-Z]+$/;	//Variable to validate only alphabets
	var alphaspaceExp = /^[a-zA-Z\s]+$/;	//Variable to validate only alphabets with space
	var alphanumericExp = /^[a-zA-Z0-9]+$/;	//Variable to validate only alphanumerics
	var numericExpression = /^[0-9]+$/;	//Variable to validate only numbers
	var mobileno = /^\d{10}$/;
	
	document.getElementById("idstate").innerHTML = "";
	document.getElementById("idcity").innerHTML = "";
	document.getElementById("idstatus").innerHTML = "";
		
	if(document.frmcity.state.value=="")
	{
		document.getElementById("idstate").innerHTML = "<font color='red'>Select the state</font>";	
		document.frmcity.state.focus();
		i=1;
	}	
	if(!document.frmcity.city.value.match(alphaspaceExp))
	{
		document.getElementById("idcity").innerHTML = "<font color='red'>City contains only alphabets</font>";	
		document.frmcity.city.focus();
		i=1;
	}
	if(document.frmcity.city.value=="")
	{
		document.getElementById("idcity").innerHTML = "<font color='red'>Enter city for selected state</font>";	
		document.frmcity.city.focus();
		i=1;
	}
	if(document.frmcity.status.value=="")
	{
		document.getElementById("idstatus").innerHTML = "<font color='red'>Select status</font>";	
		document.frmcity.status.focus();
		i=1;
	}
	if(i==0)
	{
		return true;
	}
	else
	{
		return false;	
	}
}
</script>