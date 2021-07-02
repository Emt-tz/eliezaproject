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
                <h2>View Insurance Account detail</h2>              
            </div> 
          
            <div class="row contact-wrap" > 
                <div class="status alert alert-success" style="display: none"></div>
                <form method="get" action="">
                    <table  border="1"  class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                            <th width="4" scope="col">From Date</th>
                            <td width="4" scope="col"><input type="date"  class="form-control" name="fdate"  value="<?php echo $_GET['fdate']; ?>"/></td>
                              <th width="4" scope="col">To Date</th>
                            <td width="4" scope="col"><input type="date"  class="form-control" name="tdate"  value="<?php echo $_GET['tdate']; ?>"  /></td>
                              <th width="4" scope="col"><input type="submit" name="btnsearch"  class="form-control" value="Search" /</th>
                            </tr>
                        </thead>
                    </table>
                </form>
                   <div id="printarea">
                  <table  border="1"  id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
               <thead>
                <tr>
                <th width="4" scope="col">Customer</th>
                  <th width="4" scope="col">Account Number</th>
                  <th width="4" scope="col">Insurance type</th>
                  <th width="4" scope="col">Insurance scheme</th>
                  <th width="4" scope="col">Date Create</th>
                  <th width="4" scope="col">Maturity Date</th>
                  <th width="4" scope="col">Policy Term</th>
                  <th width="4" scope="col">Total Premium Amount</th>
                  <th width="4" scope="col">Profit Ratio</th>
                  <th width="4" scope="col">Sum Assured</th>
                  <th width="4" scope="col">View</th>
                </tr>
                </thead>
                <tbody>
                <?php
				$sqlrec = "SELECT * FROM insurance_account where status='Active'";
				if(isset($_GET['btnsearch']))
				{
					$sqlrec = $sqlrec . " AND date_create between '$_GET[fdate]' AND '$_GET[tdate]'";
				}
				$qsqlrec = mysqli_query($con,$sqlrec);
				while($rs = mysqli_fetch_array($qsqlrec))
				{
					$sqlreccust="SELECT * FROM customer where customer_id='$rs[customer_id]'";
					$qsqlreccust = mysqli_query($con,$sqlreccust);
					$rscust = mysqli_fetch_array($qsqlreccust);
					
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
					      <td>&nbsp;$rscust[customer_name] <br>($rscust[login_id]) </td>
						  <td>&nbsp;$rs[0]</td>
						  <td>&nbsp;$rsinsurance_type[insurance_type]</td>
						  <td>&nbsp;$rsinsurance_scheme[insurance_scheme]</td>
						  <td>&nbsp;$rs[date_create]</td>
						  <td>&nbsp;$rs[maturity_date]</td>
						  <td>&nbsp;$rs[policy_term]</td>
						  <td>&nbsp;₹ $rs[sum_assured]</td>
						  <td>&nbsp;$rs[profit_ratio]%</td>
						  <td>&nbsp;₹ $rs[total_amt]</td>
						  <td>&nbsp;<a href='viewcustomerinsuranceaccountmore.php?insacid=$rs[0]'>View More</a></td>
						</tr>";
				}
				?>
              </table>
              </tbody>
              </div>
              <center><input type="submit" value="Print" id="submit" name="submit" class="btn btn-primary btn-lg" onclick="printarea('printarea') ;" /></center>
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

function printarea(elem)
{
		var mywindow = window.open('', 'PRINT', 'height=400,width=600');

        mywindow.document.write('</head><body >');
      	mywindow.document.write('<h1>' + document.title  + '</h1>');
        mywindow.document.write(document.getElementById(elem).innerHTML);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10*/

        mywindow.print();
        mywindow.close();

        return true;
}
</script>