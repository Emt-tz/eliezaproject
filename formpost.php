<?php
include "dbconnection.php";
include "includes.php";
if (isset($_POST)) {
    $Data = $_POST;
    //$query = "INSERT INTO motor_vehicle_application ( " . implode(', ', array_keys($Data)) . ") VALUES (" . implode(', ', array_values($Data)) . ")";

    $columns = array_keys($Data);
    $values = array_values($Data);

    $query = "INSERT INTO motor_vehicle_application (" . implode(", ", $columns) . ") VALUES ('" . implode("', '", $values) . "')";
    $res = mysqli_query($con, $query);
    // echo  mysqli_error($con);
    if ($res) {
        echo "Success";

    } else {
        print_r(array_keys($Data));
        echo mysqli_error($con);
    }

} else {
    echo "none";
}
?>


<!-- $sqlrec = "INSERT INTO motor_vehicle_application (state_id,city,status) VALUES ('$Data['policyfname']','$Data['policyfname']',)"; -->
