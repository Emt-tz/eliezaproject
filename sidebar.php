<div id="tooplate_sidebar" style="top:0px">
        
            <h2>Our Services</h2>
            
            <ul class="tooplate_list">
            <?php
			$sqlrecinsurance_type = "SELECT * FROM insurance_type where status='Active'";
			$qsqlrecinsurance_type = mysqli_query($con,$sqlrecinsurance_type);
			while($rsinsurancy_type = mysqli_fetch_array($qsqlrecinsurance_type))
			{
            	echo "<li><a href='insuranceschemeinfo.php?insurancetypeid=$rsinsurancy_type[insurance_type_id]'>$rsinsurancy_type[insurance_type]</a></li>";
			}
            ?>
            </ul>
           
        </div>