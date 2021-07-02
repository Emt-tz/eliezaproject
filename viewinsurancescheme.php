<?php
include("header.php");
if(isset($_GET['delid']))
{
	$sqlrec = "DELETE FROM insurance_scheme where insurance_scheme_id='$_GET[delid]'";
	$qsqlrec = mysqli_query($con,$sqlrec);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Insurance scheme record deleted successfully..');</script>";
	}
}
?>
<div id="tooplate_main" style="width:1050px;">
      <h2>View Insurance Scheme</h2>
        <p>view and edit insurance scheme records</p>
<?php
include("datatables.php");
?>
            
            <div id="contact_form">
              <table  border="1"  id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
               <thead>
                <tr>
                  <th scope="col">Insurance type</th>
                  <th scope="col">Insurance scheme</th>
                  <th scope="col">Registration Commission</th> 
                  <th scope="col">Renewal Commission</th>                 
                  <th scope="col">Note</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
				$sqlrec = "SELECT * FROM insurance_scheme";
				$qsqlrec = mysqli_query($con,$sqlrec);
				while($rs = mysqli_fetch_array($qsqlrec))
				{
					$sqlrecinsurplan = "SELECT * FROM insurance_type WHERE insurance_type_id='$rs[insurance_type_id]'";
					$qsqlrecinsurplan = mysqli_query($con,$sqlrecinsurplan);
					$rsinsurplan = mysqli_fetch_array($qsqlrecinsurplan);
                	echo " <tr>
						  <td>&nbsp;$rsinsurplan[insurance_type]</td>
						  <td>&nbsp;$rs[insurance_scheme]</td>
						  <td>&nbsp;$rs[agent_commission]%</td>
						  <td>&nbsp;$rs[agent_commission2]%</td>
						  <td>&nbsp;$rs[note]</td>
						  <td>&nbsp;$rs[status]</td>
						  <td>&nbsp;<a href='insurscheme.php?editid=$rs[insurance_scheme_id]' class='btn btn-info' >Edit</a> |  <a href='viewinsurancescheme.php?delid=$rs[insurance_scheme_id]' onclick='return deleteconfirm()' class='btn btn-danger' >Delete</a></td>
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