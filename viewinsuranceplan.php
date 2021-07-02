<?php
include("header.php");
{
	$sqlrec = "DELETE FROM insurance_plan where insurance_plan_id='$_GET[delid]'";
	$qsqlrec = mysqli_query($con,$sqlrec);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Insurance plan record deleted successfully..');</script>";
	}
}
?>
<div id="tooplate_main" style="width:1050px;">
   
            <h2>View Insurance Plan</h2>
        <p>view and edit insurance plan records</p>
<?php
include("datatables.php");
?>
            
            <div id="contact_form">
              <table  border="1"  id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th scope="col">Insurance Type</th>
                  <th scope="col">Insurance Scheme</th>
                  <th scope="col">Policy Term Min</th>
                  <th scope="col">Policy Term Max</th>
                  <th scope="col">Min Age</th>
                  <th scope="col">Max Age</th>
                  <th scope="col">Sum Assured Min</th>
                  <th scope="col">Sum assured Max</th>
                  <th scope="col">Profit Ratio</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
				$sqlrec = "SELECT * FROM insurance_plan";
				$qsqlrec = mysqli_query($con,$sqlrec);
				while($rs = mysqli_fetch_array($qsqlrec))
				{
					$sqlrecinsurtype = "SELECT * FROM insurance_type WHERE insurance_type_id='$rs[insurance_type_id]'";
					$qsqlrecinsurtype = mysqli_query($con,$sqlrecinsurtype);
					$rsinsurtype = mysqli_fetch_array($qsqlrecinsurtype);
					$sqlrecinsurscheme = "SELECT * FROM insurance_scheme WHERE insurance_scheme_id='$rs[insurance_scheme_id]'";
					$qsqlrecinsurscheme = mysqli_query($con,$sqlrecinsurscheme);
					$rsinsurscheme = mysqli_fetch_array($qsqlrecinsurscheme);
					
                	echo " <tr>
						  <td>&nbsp;$rsinsurtype[insurance_type]</td>
						  <td>&nbsp;$rsinsurscheme[insurance_scheme]</td>
						  <td>&nbsp;$rs[policy_term_min]</td>
						  <td>&nbsp;$rs[policy_term_max]</td>
						  <td>&nbsp;$rs[min_age]</td>
						  <td>&nbsp;$rs[max_age]</td>
						  <td>&nbsp;$rs[sum_assured_min]</td>
						  <td>&nbsp;$rs[sum_assured_max]</td>
						  <td>&nbsp;$rs[profit_ratio]</td>
						  <td>&nbsp;$rs[status]</td>
						  <td>&nbsp;<a href='insurplan.php?editid=$rs[insurance_plan_id]' class='btn btn-info' >Edit</a> |  <a href='viewinsuranceplan.php?delid=$rs[insurance_plan_id]' onclick='return deleteconfirm()' class='btn btn-danger' >Delete</a></td>
						</tr>";
				}
				?>
              </table>
              </tbody>
           
   </div>
<div class="cleaner"></div>
</div>
<div class="cleaner"></div> 

<?php include("footer.php");
?>
<script type="application/javascript">
function deleteconfirm()
{
	if(confirm("Are you sure you want to delete this record") == true)
	{
		return true;
	}
	else
	{
		return false;
	}
}