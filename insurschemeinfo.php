<?php
include("header.php");
if(isset($_GET['viewid']))
{
	$sqlrecedit = "SELECT * FROM insurance_scheme WHERE insurance_scheme_id='$_GET[viewid]'";
	$qsqlrecedit = mysqli_query($con,$sqlrecedit);
	$rsedit = mysqli_fetch_array($qsqlrecedit);
	$insurplan="SELECT * FROM insurance_plan WHERE insurance_scheme_id='$_GET[viewid]'";
	$insurplan1=mysqli_query($con,$insurplan);
	$rsedit1=mysqli_fetch_array($insurplan1);
}
?>
<section id="contact-page" style="background-color:#fff">
<div class="container">
<h2><font size="+4" color="#990000" ><center><strong><?php
$sqlrec="SELECT * FROM insurance_type WHERE insurance_type_id='$_GET[insurancetypeid]'";
$qsqlrec=mysqli_query($con,$sqlrec);
$rs=mysqli_fetch_array($qsqlrec);
echo $rs['insurance_type']; 
?></strong></center></font></h2><br/>



<ul>
<?php
$sqlrec="SELECT * FROM insurance_scheme WHERE status='Active' ";
	if(isset($_GET['insurancetypeid']))
	{
	$sqlrec=$sqlrec." AND insurance_type_id='$_GET[insurancetypeid]'";
	}
	$qsqlrec=mysqli_query($con,$sqlrec);
	while($rs=mysqli_fetch_array($qsqlrec))
	{
	
		echo " <h2><center><font size='+2' color='#903' ><b><strong><a href='insurdetail.php?viewid=$rs[insurance_scheme_id]'>$rs[insurance_scheme]</a></strong></b></font><center></h2>
		<div class='image_wrapper fl_img'><a href='insurdetail.php?viewid=$rs[insurance_scheme_id]'><br />
		<center><img src='insuranceimg/$rs[img]' alt='Image 01' width='500' height='250'/></center></a></div>
		<p>$rs[note]</p>
		
		<div class='button float_r'><center><a href='insurdetail.php?viewid=$rs[insurance_scheme_id]' class='btn btn-info'><center><b>View More...</b></center></a></center></div>
		<div class='cleaner_h30 horizon_divider'></div>
		<div class='cleaner_h30'></div><br/><hr/>"; 
	}
?><br />

</ul>
</div><!--/.container-->
</section><!--/#contact-page-->

<?php
include("footer.php"); include("datatables.php");
?>