<?php
include("header.php");
if(isset($_GET['delid']))
{
	$sqlrec = "DELETE FROM commission_master where commission_master_id='$_GET[delid]'";
	$qsqlrec = mysqli_query($con,$sqlrec);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Commission record deleted successfully..');</script>";
	}
}
?>
    <section id="contact-page"> 
        <div class="container">
            <div class="center">        
                <h2>View Commission Records</h2>
                <p class="lead"></p><br/>
              
            </div> 
<?php
include("datatables.php");
?>
                  <table  border="1"  id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                <tr>
                  <th scope="col">Insurance A/C No.</th>
                  <th scope="col">Agent</th>
                  <th scope="col">Date</th>
                  <th scope="col">Customer</th>
                  <th scope="col">Insurance scheme</th>
                  <th scope="col">Commission Amount</th>
                </tr>
                </thead>
                <tbody>
                <?php
				$sqlrec = "SELECT * FROM commission_master WHERE transaction_type='Credit' ";
				if(isset($_SESSION['agent_id']))
				{
					$sqlrec = $sqlrec . " and agent_id='$_SESSION[agent_id]'";
				}
				$qsqlrec = mysqli_query($con,$sqlrec);
				$totamt =0;
				while($rs = mysqli_fetch_array($qsqlrec))
				{
					$sqlrecinsurplan = "SELECT * FROM insurance_scheme WHERE insurance_scheme_id='$rs[insurance_scheme_id]'";
					$qsqlrecinsurplan = mysqli_query($con,$sqlrecinsurplan);
					$rsinsurplan = mysqli_fetch_array($qsqlrecinsurplan);
					
				 	$sqlrecinsurance_account = "SELECT * FROM insurance_account INNER JOIN customer on insurance_account.customer_id = customer.customer_id INNER JOIN insurance_scheme WHERE insurance_account.insurance_account_id='$rs[insurance_account_id]'";
					$qsqlrecinsurance_account = mysqli_query($con,$sqlrecinsurance_account);
					$rsinsurance_account = mysqli_fetch_array($qsqlrecinsurance_account);
					
					$sqlrecagent = "SELECT * FROM agent WHERE agent_id='$rs[agent_id]'";
					$qsqlrecagent = mysqli_query($con,$sqlrecagent);
					$rsagent = mysqli_fetch_array($qsqlrecagent);
					
                	echo " <tr>
						  <td>$rs[insurance_account_id]</td>
							<td>$rsagent[agent_name]</td>
						  <td>&nbsp;$rs[transaction_date]</td>
						  <td>&nbsp;$rsinsurance_account[customer_name] ($rsinsurance_account[login_id])</td>
						  <td>&nbsp;$rsinsurplan[insurance_scheme]</td>
						  <td>Rs. $rs[commission_amt]</td>
						</tr>";
						$totamt = $totamt+ $rs['commission_amt'];
				}
				?>
                </tbody>
                <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col" >Total</th>
                      <th scope="col">Rs. <?php echo $totamt; ?></th>
                    </tr>
                </thead>
              </table>
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