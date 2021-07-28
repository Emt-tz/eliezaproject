<?php
include "header.php";

include "datatables.php";

if (isset($_GET['approve'])) {
    $sqlrec = "UPDATE motor_vehicle_application SET status='1' WHERE fullName='$_GET[approve]'";
    $qsqlrec = mysqli_query($con, $sqlrec);
    if (mysqli_affected_rows($con) == 1) {
        echo "<script>alert('Approved successfully..');</script>";
    } else {
        echo "<script>alert('Something is wrong');</script>";
    }
}
if (isset($_GET['decline'])) {
    $sqlrec = "UPDATE motor_vehicle_application SET status='2' WHERE fullName='$_GET[decline]'";
    $qsqlrec = mysqli_query($con, $sqlrec);
    if (mysqli_affected_rows($con) == 1) {
        echo "<script>alert('Declined successfully..');</script>";
    } else {
        echo "<script>alert('Something is wrong');</script>";
    }
}
?>

<?php
			 	$sqlrec = "SELECT * FROM motor_vehicle_application WHERE fullName='$_GET[name]'";
				$qsqlrec = mysqli_query($con,$sqlrec); 
                $rs = mysqli_fetch_array($qsqlrec);
            
                    echo "

<div class='container'>
    <center>
        <h2><u>Applicant fullName application details</u></h2>
    </center>
    <br>

    <div class='row'>
        <h5><u>Personal particulars</U></h5><br>
        <div class='col'>
            <p><strong>Full Name:</strong>&nbsp;$rs[fullName]</p>
        </div>
        <div class='col'>
            <p><strong>Date of birth:</strong>&nbsp;$rs[dob]</p>
        </div>
        <div class='col'>
            <p><strong>Nationality:</strong>&nbsp;$rs[nationality]</p>
        </div>
    </div>

    <div class='row'>
        <div class='col'>
            <p><strong>Gender:</strong> $rs[gender]</p>
        </div>
        <div class='col'>
            <p><strong>Home address:</strong> $rs[homeAddress]</p>
        </div>
        <div class='col'>
            <p><strong>Email:</strong> $rs[email]</p>
        </div>
    </div>
    <div class='row'>
        <div class='col'>
            <p><strong>Filled:</strong> $rs[homeAddress]</p>
        </div>
        <div class='col'>
            <p><strong>Identity:</strong> $rs[nida]</p>
        </div>
        <div class='col'></div>

    </div>
    <br>
    <div class='row'>
        <h5><u>Vehicle particulars</U></h5><br>
        <div class='col'>
            <p><strong>Vehicle Reg no:</strong> $rs[vehicleRegistrationNumber]</p>
        </div>
        <div class='col'>
            <p><strong>Chasis:</strong> $rs[chasisNumber]</p>
        </div>
        <div class='col'>
            <p><strong>Engine number:</strong> $rs[vehicleEngineNumber]</p>
        </div>


    </div>

    <div class='row'>
        <div class='col'>
            <p><strong>Vehicle engine capacity:</strong> $rs[vehicleEngineCapacity]</p>
        </div>

        <div class='col'>
            <p><strong>Vehicle model:</strong> $rs[vehicleModel]</p>
        </div>
        <div class='col'>
            <p><strong>Vehicle color:</strong> $rs[vehicleColor]</p>
        </div>

    </div>
    <div class='row'>
        <div class='col'>
            <p><strong>Vehicle manufacture yr:</strong> $rs[vehicleManufactureYear]</p>
        </div>
        <div class='col'>
            <p><strong>Vehicle make:</strong> $rs[vehicleMake]</p>
        </div>
        <div class='col'>
            <p><strong>Vehicle capacity:</strong> $rs[vehicleCapacity]</p>
        </div>

    </div>
    <div class='row'>
        <div class='col'>
            <p><strong>Vehicle date of purchase:</strong> $rs[vehicleDateofPurchase]</p>
        </div>
        <div class='col'></div>
        <div class='col'></div>
    </div>
    <br>
    <div class='row'>
        <h5><u>Insurance policy</U></h5><br>
        <div class='col'>
            <p><strong>PolicyCover:</strong> $rs[policyCover]</p>
        </div>
        <div class='col'>
            <p><strong>Motor vehicle:</strong> $rs[motorVehicle]</p>
        </div>
        <div class='col'></div>
    </div>
    <br>
    <div class='row'>
        <h5><u>Payment mode</U></h5><br>
        <div class='col'>
            <p><strong>Payment mode:</strong> $rs[paymentMode]</p>
        </div>
        <div class='col'>
            <p><strong>Payment amount:</strong> $rs[paymentAmount]</p>
        </div>
        <div class='col'>
            <p><strong>Payment amount:</strong> $rs[paymentReference]</p>
        </div>
    </div>
    <br>
    <div class='row'>
        <h5><u>Applicant documents</U></h5><br>
        <div class='card text-center'>

            <div class='card-body'>
                <h5 class='card-title'>Applied customer documents</h5>
                <p class='card-text'>Click to preview and approve or decline</p>
                <div class='btn-group'>
                    <a href='docs/applications/$rs[vehicleRegistrationDocument]' class='btn btn-secondary'>Preview</a>
                    <a href='viewdetails.php?approve=$rs[fullName]' class='btn btn-success'>Approve</a>
                    <a href='viewdetails.php?decline=$rs[fullName]' class='btn btn-danger'>Decline</a>
                </div>
            </div>
            <div class='card-footer text-muted'>

            </div>
        </div>
    </div>
    <br><br><br>
</div>
</div>";
               
?>


<?php
include "footer.php";
include "datatables.php";
?>