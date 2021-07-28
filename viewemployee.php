<?php
include("header.php");
if(isset($_GET['delid']))
{
	$sqlrec = "DELETE FROM employee where employee_id='$_GET[delid]'";
	$qsqlrec = mysqli_query($con,$sqlrec);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Employee record deleted successfully..');</script>";
	}
}
include("datatables.php");
?>
    <section id="contact-page">
      
        <div class="container">
            <div class="center"> <br>       
                <h2>View Employee Records</h2>
                <p class="lead"></p>
              
            </div> 
          
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
              
                 <table border="1"  id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th scope="col">Emp Type</th>
                  <th scope="col">Emp Name</th>
                  <th scope="col">Login ID</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
               <?php
				$sqlrec = "SELECT * FROM employee";
				$qsqlrec = mysqli_query($con,$sqlrec);
				while($rs = mysqli_fetch_array($qsqlrec))
				{
                	echo " <tr>
						  <td>&nbsp;$rs[emp_type]</td>
						  <td>&nbsp;$rs[emp_name]</td>
						  <td>&nbsp;$rs[login_id]</td>
						  <td>&nbsp;$rs[status]</td>
						  <td>&nbsp;<a href='employee.php?editid=$rs[employee_id]' class='btn btn-info' >Edit</a> |  <a href='viewemployee.php?delid=$rs[employee_id]' onclick='return deleteconfirm()' class='btn btn-danger' >Delete</a></td>
						</tr>";
				}
				?>
              </table>
              </tbody>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

    <?php
	include("footer.php");
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