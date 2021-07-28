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
?>
<div id="tooplate_main" style="width:1050px;">
    
    
            <h2>View Insurance Type</h2>
        <p>view and edit insurance type records</p>
     
<?php
include("datatables.php");
?>
            <div id="contact_form">
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
						  <td>&nbsp;<a href='insurtype.php?editid=$rs[insurance_type_id]' class='btn btn-info' >Edit</a> |  <a href='viewinsurancetype.php?delid=$rs[insurance_type_id]' onclick='return deleteconfirm()' class='btn btn-danger' >Delete</a></td>
						</tr>";
				}
				?>
              </table>
              </tbody>
         </div>
<div class="cleaner"></div>
</div>
<div class="cleaner"></div> 
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