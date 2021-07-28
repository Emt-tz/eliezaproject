<?php
include("header.php");
if(isset($_GET['delid']))
{
	$sqlrec = "DELETE FROM insurance_type where insurance_type_id='$_GET[delid]'";
	$qsqlrec = mysqli_query($con,$sqlrec);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Insurance type record deleted successfully..');</script>";
	}
}
include("datatables.php");
?>
    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>View Insurance Type</h2>
                <p class="lead"></p>
              
            </div> 
          
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
              
                  <table border="1"  id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th scope="col">Insurance Type</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                 <?php
				$sqlrec = "SELECT * FROM insurance_type";
				$qsqlrec = mysqli_query($con,$sqlrec);
				while($rs = mysqli_fetch_array($qsqlrec))
				{
                	echo " <tr>
						  <td>&nbsp;$rs[insurance_type]</td>
						  <td>&nbsp;$rs[status]</td>
						  <td>&nbsp;<a href='insurtype.php?editid=$rs[insurance_type_id]' class='btn btn-info' >Edit</a> |  <a href='viewinsurtype.php?delid=$rs[insurance_type_id]' onclick='return deleteconfirm()' class='btn btn-danger' >Delete</a></td>
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