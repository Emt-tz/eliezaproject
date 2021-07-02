<?php
include("header.php");
if(isset($_GET['delid']))
{
	$sqlrec = "DELETE FROM contact where contact_id='$_GET[delid]'";
	$qsqlrec = mysqli_query($con,$sqlrec);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Contact record deleted successfully..');</script>";
	}
}
?>
<div id="tooplate_main" style="width:1050px;">
    
     <?php
include("datatables.php");
?> 

            <h2>View Contact </h2>
        <p>view and edit contact records</p>
     
<?php
include("datatables.php");
?>
              <table  border="1"  id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th scope="col">Customer</th>
                  <th scope="col">Title</th>
                  <th scope="col">Message</th>
                  <th scope="col">Contact Date</th>
                  <th scope="col">Reply</th>
                  <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
               <?php
				$sqlrec = "SELECT * FROM contact";
				$qsqlrec = mysqli_query($con,$sqlrec);
				while($rs = mysqli_fetch_array($qsqlrec))
				{					
					$sqlreccustomer = "SELECT * FROM customer WHERE customer_id='$rs[customer_id]'";
					$qsqlreccustomer = mysqli_query($con,$sqlreccustomer);
					$rscustomer = mysqli_fetch_array($qsqlreccustomer);					
                	echo " <tr>
						  <td>&nbsp;$rscustomer[customer_name]</td>
						  <td>&nbsp;$rs[title]</td>
						  <td>&nbsp;$rs[message]</td>
						  <td>&nbsp;$rs[contact_date]</td>
						   <td>&nbsp;$rs[reply]</td>
						  <td>&nbsp; <a href='contact1.php?editid=$rs[contact_id]' class='btn btn-info' >Edit</a> |  <a href='viewcontact.php?delid=$rs[contact_id]' onclick='return deleteconfirm()' class='btn btn-danger' >Delete</a></td>
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
</script>