<?php
include "dbconnection.php";
include "includes.php";

if (isset($_POST)) {
    $Data = $_POST;

    $filename = $_FILES['vehicleRegistrationDocument']['name'];
    move_uploaded_file($_FILES['vehicleRegistrationDocument']['tmp_name'], "docs/applications/" . $filename);

    $Data["vehicleRegistrationDocument"] = $filename;
    $Data["status"] = 0;

    $columns = array_keys($Data);
    $values = array_values($Data);

    $query = "INSERT INTO motor_vehicle_application (" . implode(", ", $columns) . ") VALUES ('" . implode("', '", $values) . "')";
    $res = mysqli_query($con, $query);

    if ($res) {
        echo "Success";

    } else {

        echo mysqli_error($con);
    }

} else {
    echo "none";
}
