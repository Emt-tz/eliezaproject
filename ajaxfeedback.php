<?php
include("dbconnection.php");
$sqlrecedit = "UPDATE contact SET reply='$_GET[replymsg]' WHERE contact_id='$_GET[empid]'";
mysqli_query($con,$sqlrecedit);
//echo mysqli_affected_rows($con);
?>