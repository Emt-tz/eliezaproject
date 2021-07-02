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
       <?php
include("datatables.php");
?> 
        <div class="container">
            <div class="center">        
                <h2>View Agent Records</h2>
                <p class="lead">Kindly enter the credentials</p>
              
            </div> 
          
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
              
                  <table  border="1"  id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
               <thead>
                <tr>
                  <th width="63" scope="col">Customer</th>
                  <th width="4" scope="col">Insurance Plan</th>
                  <th width="4" scope="col">Date Create</th>
                  <th width="4" scope="col">Maturity Date</th>
                  <th width="4" scope="col">Policy Term</th>
                  <th width="4" scope="col">Sum Assured</th>
                  <th width="4" scope="col">Profit Ratio</th>
                  <th width="4" scope="col">Total Amount</th>
                  <th width="65" scope="col">Status</th>
                  <th width="35" scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
				$sqlrec = "SELECT * FROM insurance_account inner join customer ON insurance_account.customer_id = customer.customer_id";
				$qsqlrec = mysqli_query($con,$sqlrec);
				while($rs = mysqli_fetch_array($qsqlrec))
				{
					$sqlreccustomer = "SELECT * FROM customer WHERE customer_id='$rs[customer_id]'";
					$qsqlreccustomer = mysqli_query($con,$sqlreccustomer);
					$rscustomer = mysqli_fetch_array($qsqlreccustomer);
					$sqlrecinsurplan = "SELECT * FROM insurance_plan WHERE insurance_plan_id='$rs[insurance_plan_id]'";
					$qsqlrecinsurplan = mysqli_query($con,$sqlrecinsurplan);
					$rsinsurplan = mysqli_fetch_array($qsqlrecinsurplan);	
                	echo " <tr>
						  <td>&nbsp;$rscustomer[customer_name]</td>
						  <td>&nbsp;$rsinsurplan[insurance_plan_id]</td>
						  <td>&nbsp;$rs[date_create]</td>
						  <td>&nbsp;$rs[maturity_date]</td>
						  <td>&nbsp;$rs[policy_term]</td>
						  <td>&nbsp;$rs[sum_assured]</td>
						  <td>&nbsp;$rs[profit_ratio]</td>
						  <td>&nbsp;$rs[total_amt]</td>
						  <td>&nbsp;$rs[status]</td>
						  <td>&nbsp; <a href='insuracc.php?editid=$rs[insurance_account_id]' class='btn btn-info' >Edit</a> |  <a href='viewinsuranceaccount.php?delid=$rs[insurance_account_id]' onclick='return deleteconfirm()' class='btn btn-danger' >Delete</a></td>
						</tr>";
				}
				?>
              </table>
              </tbody>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

    <?php
	include("footer.php"); include("datatables.php");
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