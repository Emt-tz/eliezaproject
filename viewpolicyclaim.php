<?php
include("header.php");
if(isset($_GET['delid']))
{
	$sqlrec = "DELETE FROM policy_withdrawal where policy_withdrawal_id='$_GET[delid]'";
	$qsqlrec = mysqli_query($con,$sqlrec);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Policy withdrawal record deleted successfully..');</script>";
	}
}
?>

<?php 
if(isset($_POST['decline'])) // when click on Update button
{
   $cust_name = $_POST['cust_name'];
    $edit = mysqli_query($db,"update customer_claim set claim_status='Declined', cust_name='$cust_name'");
	
    if($edit)
    {
         // Close connection
        header("location:viewpolicycalim.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}else if(isset($_POST['approve'])){
	$cust_name = $_POST['cust_name'];
    $edit = mysqli_query($db,"update customer_claim set claim_status='Approved', cust_name='$cust_name'");
	
    if($edit)
    {
         // Close connection
        header("location:viewpolicycalim.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>
<section id="contact-page">
    <?php
include("datatables.php");
?>
    <div class="container">
        <div class="center">
            <h2>View Policy Claim Records</h2>
            <p class="lead"></p><br />

        </div>

        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>
            <div id="printarea">
                <form method="POST">
				<table border="1" id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Document</th>
                            <th scope="col">Approve</th>
                            <th scope="col">Dis-Approve</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
				$sqlrecpp = "SELECT * FROM customer_claim";
				$qsqlrecpp = mysqli_query($con,$sqlrecpp);
				while($rspp = mysqli_fetch_array($qsqlrecpp))
				{		
                	echo " <tr>
						  <td name='cust_name' value='$rspp[cust_name]'>&nbsp;$rspp[cust_name]</td>
						  <td>&nbsp;<a href='docs/$rspp[document_path]'>$rspp[document_path]</a></td>
						  <td>&nbsp;<a class='btn btn-info' name='approve'>Approve</a> </td>
						  <td>&nbsp;<a class='btn btn-info' style='background: #c52d2f;border:none;' name='decline'>Decline</a></td>
					
						</tr>";
				}
				?>

                    </tbody>
                </table>

				</form>
            </div>
            <center><input type="submit" value="Print" id="submit" name="submit" class="btn btn-primary btn-lg"
                    onclick="printarea('printarea') ;" /></center>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#contact-page-->

<?php
	include("footer.php"); include("datatables.php");
	?>
<script type="application/javascript">
function deleteconfirm() {
    if (confirm("Are you sure want to delete this record") == true) {
        return true;
    } else {
        return false;
    }
}

function printarea(elem) {
    var mywindow = window.open('', 'PRINT', 'height=400,width=600');

    mywindow.document.write('</head><body >');
    mywindow.document.write('<h1>' + document.title + '</h1>');
    mywindow.document.write(document.getElementById(elem).innerHTML);
    mywindow.document.write('</body></html>');

    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10*/

    mywindow.print();
    mywindow.close();

    return true;
}
</script>