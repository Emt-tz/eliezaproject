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
include("datatables.php");
?> 
    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>View Feedback</h2>
                <p class="lead"></p>
              
            </div> 
          
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
              
                 <table  border="1"  id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th scope="col">Customer</th>
                  <th scope="col">Title</th>
                  <th scope="col">Message</th>
                  <th scope="col">Contact Date</th>
                  <th scope="col">Reply</th>
<?php
 						if(isset($_SESSION['employee_id']))
						  {
?>
                  <th scope="col">Action</th>
<?php
						  }
?>
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
						  <td>&nbsp;$rs[contact_date]</td>";
						 if(isset($_SESSION['employee_id']))
						  {
						   echo " <td><textarea name='replymsg' onchange='sendreply($rs[0],this.value)' onkeyup='sendreply($rs[0],this.value)'>$rs[reply]</textarea></td>";
						  }
						 if(isset($_SESSION['customer_id']))
						  {
						   echo " <td>$rs[reply]</td>";
						  }
						   if(isset($_SESSION['employee_id']))
						  {
						 echo " <td><a href='viewqueries.php?delid=$rs[contact_id]' onclick='return deleteconfirm()' class='btn btn-danger' class='btn btn-danger' >Delete</a></td>";
						  }
						echo "</tr>";
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
function sendreply(empid,replymsg)
{
	 	if (window.XMLHttpRequest) 
		{
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
		else 
		{
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.open("GET","ajaxfeedback.php?empid="+empid+"&replymsg="+replymsg,true);
        xmlhttp.send();
}
</script>