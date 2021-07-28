<?php
include("header.php");
if(isset($_GET['delid']))
{
	$sqlrec = "DELETE FROM insurance_account where insurance_account_id='$_GET[delid]'";
	$qsqlrec = mysqli_query($con,$sqlrec);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Insurance account record deleted successfully..');</script>";
	}
}
?>
    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>View Insurance Account detail</h2>              
            </div> 
          
            <div class="row contact-wrap" > 
                <div class="status alert alert-success" style="display: none"></div>
              
                  <table  border="1"  id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
               <thead>
                <tr>
                  <th width="4" scope="col">Account Number</th>
                  <th width="4" scope="col">Insurance type</th>
                  <th width="4" scope="col">Insurance scheme</th>
                  <th width="4" scope="col">Date Create</th>
                  <th width="4" scope="col">Maturity Date</th>
                  <th width="4" scope="col">Premium Type</th>
                  <th width="4" scope="col">Total Premium Amount</th>
                  <th width="4" scope="col">Profit Ratio</th>
                  <th width="4" scope="col">Sum Assured</th>
                  <th width="4" scope="col">View</th>
                </tr>
                </thead>
                <tbody>
                <?php
				$sqlrec = "SELECT * FROM insurance_account where status='Active' AND customer_id='$_SESSION[customer_id]'";
				$qsqlrec = mysqli_query($con,$sqlrec);
				while($rs = mysqli_fetch_array($qsqlrec))
				{
					$sqlrecinsurplan = "SELECT * FROM insurance_plan WHERE insurance_plan_id='$rs[insurance_plan_id]'";
					$qsqlrecinsurplan = mysqli_query($con,$sqlrecinsurplan);
					$rsinsurplan = mysqli_fetch_array($qsqlrecinsurplan);
					
					$sqlrecinsurance_scheme = "SELECT * FROM insurance_scheme WHERE insurance_scheme_id='$rsinsurplan[insurance_scheme_id]'";
					$qsqlrecinsurance_scheme = mysqli_query($con,$sqlrecinsurance_scheme);
					$rsinsurance_scheme = mysqli_fetch_array($qsqlrecinsurance_scheme);	
					
					$sqlrecinsurance_type = "SELECT * FROM insurance_type WHERE insurance_type_id='$rsinsurance_scheme[insurance_type_id]'";
					$qsqlrecinsurance_type = mysqli_query($con,$sqlrecinsurance_type);
					$rsinsurance_type = mysqli_fetch_array($qsqlrecinsurance_type);
					
                	echo " <tr>
						  <td>&nbsp;$rs[0]</td>
						  <td>&nbsp;$rsinsurance_type[insurance_type]</td>
						  <td>&nbsp;$rsinsurance_scheme[insurance_scheme]</td>
						  <td>&nbsp;$rs[date_create]</td>
						  <td>&nbsp;$rs[maturity_date]</td>
						  <td>&nbsp;$rs[policy_term]</td>
						  <td>&nbsp;₹ $rs[sum_assured]</td>
						  <td>&nbsp;$rs[profit_ratio]%</td>
						  <td>&nbsp;₹ $rs[total_amt]</td>
						  <td>&nbsp;<a href='viewcustomerinsuranceaccountmore.php?insacid=$rs[0]' class='btn btn-info'>View More</a></td>
						</tr>";
				}
				?>
              </table>
              </tbody>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

<?php
include("footer.php");
include("datatables.php");
?>
	<script type="application/javascript">
function deleteconfirm()
{
	if(confirm("Are you sure want to delete this record") == true)
	{
		return true;
	}
	else
	{
		return false;
	}
}
</script>