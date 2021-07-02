<?php
include("header.php");
if(isset($_GET['delid']))
{
	$sqlrec = "DELETE FROM tax where tax_id='$_GET[delid]'";
	$qsqlrec = mysqli_query($con,$sqlrec);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Tax record deleted successfully..');</script>";
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
              
                   <table border="1"  id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
               <thead>
                <tr>
                  <th scope="col">Tax Perc</th>
                  <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
				$sqlrec = "SELECT * FROM tax";
				$qsqlrec = mysqli_query($con,$sqlrec);
				while($rs = mysqli_fetch_array($qsqlrec))
				{
					
                	echo " <tr>
						  <td>&nbsp;$rs[tax_perc]</td>
						  <td>&nbsp;<a href='tax.php?editid=$rs[tax_id]' class='btn btn-info' >Edit</a>  | <a href='viewtax.php?delid=$rs[tax_id]' onclick='return deleteconfirm()' class='btn btn-danger' >Delete</a></td>
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
</script>