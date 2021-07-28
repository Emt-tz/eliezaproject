<?php
include "header.php";
if (!isset($_SESSION['customer_id'])) {
    echo "<script>window.location.assign('login.php');</script>";
}
?>

<section id="services" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Welcome </h2>

            <p class="lead"><?php
if (isset($_SESSION['customer_id'])) {
    $sqlreccustomerac = "SELECT * FROM customer WHERE customer_id='$_SESSION[customer_id]'";
    $varcustomerac = mysqli_query($con, $sqlreccustomerac);
    $rscustomerac = mysqli_fetch_array($varcustomerac);
    echo $rscustomerac['customer_name'];
}
?>

            </p>

        </div>

        <br />
        <div class="row">


            <br /><br />
            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/custprofile.png" height="100" width="100">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading"><a class="preview" href="customerprofile.php"
                                rel="prettyPhoto">Profile </a>
                            <p>

                            </p>

                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/custdoc1.ico" height="100" width="100">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <h3 class="media-heading"><a class="preview" href="custdoc.php"
                                    rel="prettyPhoto">Documents</a></h3>
                            <p></p>

                    </div>
                </div>
            </div>



            <!-- <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/custinsur.jpg" height="100" width="100">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <h3 class="media-heading"><a class="preview" href="viewcustomerinsuranceaccount.php"
                                    rel="prettyPhoto">Insurance Account</a></h3>
                            <p> </p>

                    </div>
                </div>
            </div> -->

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/custfeed.jpg" height="100" width="100">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <h3 class="media-heading"><a class="preview" href="feedback.php" rel="prettyPhoto">Query or
                                    Feedback</a></h3>
                            <p></p>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/feed.jpg" width="100">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <h3 class="media-heading"><a class="preview" href="viewqueries.php" rel="prettyPhoto">View
                                    Feedback</a></h3>
                            <p>

                            </p>
                    </div>
                </div>
            </div>

            <?php
            $sqlrecedit = "SELECT * FROM customer WHERE customer_id='$_SESSION[customer_id]'";
            $qsqlrecedit = mysqli_query($con, $sqlrecedit);
            $rsedit = mysqli_fetch_array($qsqlrecedit);
            $sqlrec = "SELECT * FROM motor_vehicle_application WHERE fullName='$rsedit[customer_name]'";
            $qsqlrec = mysqli_query($con, $sqlrec);
            $rs = mysqli_fetch_array($qsqlrec);
            $status = "";
            if (!empty($rs)) {
                if($rs['status'] == 1){
            echo "
            <div class='col-sm-6 col-md-4'>
                <div class='media services-wrap wow fadeInDown'>
                    <div class='pull-left'>
                        <img class='img-responsive' src='images/custinsur.jpg' height='100' width='100'>
                    </div>
                    <div class='media-body'>
                        <h3 class='media-heading'>
                            <h3 class='media-heading'><a class='preview' href='custclaim.php' rel='prettyPhoto'>Policy
                                    Claim</a></h3>
                                    <p><span><b>Status </b><span>$status</p>

                    </div>
                </div>
            </div>
            ";}
        }
            ?>

            <?php
$sqlrecedit = "SELECT * FROM customer WHERE customer_id='$_SESSION[customer_id]'";
$qsqlrecedit = mysqli_query($con, $sqlrecedit);
$rsedit = mysqli_fetch_array($qsqlrecedit);
$sqlrec = "SELECT * FROM motor_vehicle_application WHERE fullName='$rsedit[customer_name]'";
$qsqlrec = mysqli_query($con, $sqlrec);
$rs = mysqli_fetch_array($qsqlrec);
$status = "";

if (!empty($rs)) {
    if ($rs['status'] == 0) {
        $status = "pending";
    }
    if ($rs['status'] == 1) {
        $status = "approved";
    }
    if ($rs['status'] == 2) {
        $status = "declined";
    }
    echo "
            <div class='col-sm-6 col-md-4'>
                <div class='media services-wrap wow fadeInDown'>
                    <div class='pull-left'>
                        <img class='img-responsive' src='images/custinsur.jpg' height='100' width='100'>
                    </div>
                    <div class='media-body'>
                        <h3 class='media-heading'>


                            <h3 class='media-heading'><a class='preview' href='viewdetails.php?name=$rs[fullName]' rel='prettyPhoto'>My
                                    Application</a></h3>

                            <p><span><b>Status </b><span>$status</p>






                    </div>
                </div>
            </div>";
} else {
    echo "";
}
?>
            <?php
$sqlrecedit = "SELECT * FROM customer WHERE customer_id='$_SESSION[customer_id]'";
$qsqlrecedit = mysqli_query($con, $sqlrecedit);
$rsedit = mysqli_fetch_array($qsqlrecedit);
$sqlrec = "SELECT * FROM motor_vehicle_application WHERE fullName='$rsedit[customer_name]'";
$qsqlrec = mysqli_query($con, $sqlrec);
$rs = mysqli_fetch_array($qsqlrec);
if (empty($rs)) {
    echo "
            <div class='col-sm-6 col-md-4'>
                <div class='media services-wrap wow fadeInDown'>
                    <div class='pull-left'>
                        <img class='img-responsive' src='images/custinsur.jpg' height='100' width='100'>
                    </div>
                    <div class='media-body'>
                        <h3 class='media-heading'>
                            <h3 class='media-heading'><a class='preview' href='form.php' rel='prettyPhoto'>Insurance
                                    Application</a></h3>
                            <p>




                            </p>

                    </div>
                </div>
            </div>";
} else {
    echo "";
}
?>



        </div>
        <!--/.row-->
        <center> <a href="logout.php"> <img class="img-responsive" src="images/logout.jpg" height="150" width="100"></a>
        </center>
    </div>
    <!--/.container-->
</section>
<!--/#services-->



<?php
include "footer.php";?>