<?php
include("dbconnection.php");
$sqlrec = "UPDATE commission_master set particulars='$_GET[text]' where commission_master_id='$_GET[commid]'";
$qsqlrec = mysqli_query($con,$sqlrec);
?>