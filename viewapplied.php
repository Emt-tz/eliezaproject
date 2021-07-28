<?php
include "header.php";


include "datatables.php";

if(isset($_GET['delid']))
{
	$sqlrec = "UPDATE motor_vehicle_application SET ststus='Approved' WHERE policyfname='$_GET[delid]'";
	$qsqlrec = mysqli_query($con,$sqlrec);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Approved successfully..');</script>";
	} else{
        echo "<script>alert('Something is wrong');</script>";
    }
}
?>
<div class="container">
    <div class="center">
        <h2>Motor Vehicle Applications</h2>
        <p class="lead"></p>

    </div>

    <div class="row contact-wrap">
        <div class="status alert alert-success" style="display: none"></div>
        <div id="printarea">
        
<table  border="1" id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
  <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Dob</th>
                  <th scope="col">Nationality</th>
                  <th scope="col">Email</th>
                  <th scope="col">Status</th>
                  <th scope="col">Preview</th>
                </tr>
  </thead>
  <tbody>
  <?php
			 	$sqlrec = "SELECT * FROM motor_vehicle_application";
				$qsqlrec = mysqli_query($con,$sqlrec);
				while($rs = mysqli_fetch_array($qsqlrec))
                
                
				{
                    if($rs['status']==0){
                        $status = "pending";
                    }
                    if($rs['status']==1){
                        $status = "approved";
                    }
                    if($rs['status']==2){
                        $status = "declined";
                    }
                	echo " <tr>
						  <td>&nbsp;$rs[fullName]</td>
                          <td>&nbsp;$rs[dob]</td>
                          <td>&nbsp;$rs[nationality]</td>
                          <td>&nbsp;$rs[email]</td>
                          <td>&nbsp;$status</td>
                          
						
						  <td>&nbsp; <a href='viewdetails.php?name=$rs[fullName]' onclick='' class='btn btn-danger' target='_blank'>Details</a></td>
						</tr>";
				}
				?>
  </tbody>
</table>

        </div>
        <center><input type="submit" value="Print" id="submit" name="submit" class="btn btn-primary btn-lg"
                onclick="printarea('printarea') ;" /></center>
        <br />
        <br /><br /><br />
    </div>
    <!--/.row-->
</div>

<!--/.container-->
</section>
<!--/#contact-page-->

<?php
include "footer.php";
include "datatables.php";
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