<?php
include "header.php";

if (isset($_GET['delid'])) {
    $sqlrec = "DELETE FROM customer where customer_id='$_GET[delid]'";
    $qsqlrec = mysqli_query($con, $sqlrec);
    if (mysqli_affected_rows($con) == 1) {
        echo "<script>alert('Customer record deleted successfully..');</script>";
    }
}
include "datatables.php";
?>
<div class="container">
    <div class="center">
        <h2>View Customer Records</h2>
        <p class="lead"></p>

    </div>

    <div class="row contact-wrap">
        <div class="status alert alert-success" style="display: none"></div>
        <div id="printarea">
        <?php 
        $form = "SELECT * FROM motor_vehicle_application";

        $qsqlrec = mysqli_query($con, $form);
        $rs = mysqli_fetch_array($qsqlrec);
        if ($rs): ?>
<table  border="1" id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($rs))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($rs as $row): array_map('htmlentities', $row);?>
		    <tr>
		      <td><?php echo implode('</td><td>', $row); ?></td>
		    </tr>
		<?php endforeach;?>
  </tbody>
</table>
<?php endif;?>
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