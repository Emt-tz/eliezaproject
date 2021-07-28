<?php
include("header.php");
?>
<div id="tooplate_main">
    
    <div id="tooplate_content">
    <?php
	$sqlrec="SELECT * FROM insurance_scheme WHERE status='Active' ";
	if(isset($_GET['insurancetypeid']))
	{
	$sqlrec=$sqlrec." AND insurance_type_id='$_GET[insurancetypeid]'";
	}
	$qsqlrec=mysqli_query($con,$sqlrec);
	while($rs=mysqli_fetch_array($qsqlrec))
	{

        echo " <h2><a href='insuranceschemedetailed.php?viewid=$rs[insurance_scheme_id]'>$rs[insurance_scheme]</a></h2>
        <div class='image_wrapper fl_img'><a href='insuranceschemedetailed.php?viewid=$rs[insurance_scheme_id]'><img src='images/tooplate_image_01.jpg' alt='Image 01'/></a></div>
		<p>$rs[note]</p>
       
        <div class='button float_r'><a href='insuranceschemedetailed.php?viewid=$rs[insurance_scheme_id]' class='btn btn-info'>View More...</a></div>
        <div class='cleaner_h30 horizon_divider'></div>
        <div class='cleaner_h30'></div>";
	}
        
?>
        
    </div>
    
         <?php include("sidebar.php");
		?>
        
		<div class="cleaner"></div>
</div>

    <div class="cleaner"></div>  

<?php
include("footer.php");
?>