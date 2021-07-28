<?php
include("header.php");
if(isset($_GET['delid']))
{
	$sqlrec = "DELETE FROM policy_payment where policy_payment_id='$_GET[delid]'";
	$qsqlrec = mysqli_query($con,$sqlrec);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Policy ayment record deleted successfully..');</script>";
	}
}
?>
?>
<div id="tooplate_main" style="width:1050px;">
    
   

            <h2>View Policy Payment</h2>
        <p>view and edit olicy payment records</p>
     
            <?php
include("datatables.php");
?>
            <div id="contact_form">
              <table border="1"  id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th scope="col">Insurance Account</th>
                  <th scope="col">Paid Amount</th>
                  <th scope="col">Tax Amount</th>
                  <th scope="col">Paid Date</th>
                  <th scope="col">Trans Type</th>
                  <th scope="col">Particulars</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
               <?php
				$sqlrec = "SELECT * FROM policy_payment";
				$qsqlrec = mysqli_query($con,$sqlrec);
				while($rs = mysqli_fetch_array($qsqlrec))
				{
					$sqlrecpp = "SELECT * FROM nsurance_account WHERE insurance_account_id='$rs[insurance_account_id]'";
					$qsqlrecpp = mysqli_query($con,$sqlrecpp);
					$rspp = mysqli_fetch_array($qsqlrecpp);	
                	echo " <tr>
						  <td>&nbsp;$rspp[insurance_account_id]</td>
						  <td>&nbsp;$rs[paid_amt]</td>
						  <td>&nbsp;$rs[tax_amt]</td>
						  <td>&nbsp;$rs[paid_date]</td>
						  <td>&nbsp;$rs[trans_type]</td>
						  <td>&nbsp;$rs[particulars]</td>
						  <td>&nbsp;$rs[status]</td>
						  <td>&nbsp;<a href='policypay.php?editid=$rs[policy_payment_id]' class='btn btn-info' >Edit</a> | <a href='viewpolicypayment.php?delid=$rs[policy_payment_id]' onclick='return deleteconfirm()' class='btn btn-danger' >Delete</a></td>
						</tr>";
				}
				?>
              </table>
              </tbody>
            </div>           
            
    </div>
    
       <?php include("sidebar.php");
	   ?>
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
</script>