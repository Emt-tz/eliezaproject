<?php
include("header.php");
if(!isset($_SESSION['employee_id']))
{
	echo "<script>window.location='index.php';</script>";
}
?>
<section id="services" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>DASHBOARD</h2>
            <p class="lead">Records</p>
        </div>

        <div class="row">

            

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/employee.png" height="100" width="100">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Employee </h3>
                        <p> <?php
$sqlrec = "SELECT * FROM employee where status='Active'";
$qsqlrec = mysqli_query($con,$sqlrec);
echo "No. of records - ".mysqli_num_rows($qsqlrec);
?></p>
                        <a class="preview" href="viewemployee.php" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/cust.png" height="100" width="100">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Customer </h3>
                        <p> <?php
$sqlrec = "SELECT * FROM customer where status='Active'";
$qsqlrec = mysqli_query($con,$sqlrec);
echo "No. of records - ".mysqli_num_rows($qsqlrec);
?></p>
                        <a class="preview" href="viewcustomer.php" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/custdoc.png" height="100" width="100">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Customer Doc</h3>
                        <p> <?php
$sqlrec = "SELECT * FROM customer_document ";
$qsqlrec = mysqli_query($con,$sqlrec);
echo "No. of records - ".mysqli_num_rows($qsqlrec);
?></p>
                        <a class="preview" href="viewcustdocu.php" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                    </div>
                </div>
            </div>

            <!-- <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/insurtype.png" height="100" width="100">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Insurance Plans </h3>
                        <p> 
// $sqlrec = "SELECT * FROM insurance_type WHERE status='Active'";
// $qsqlrec = mysqli_query($con,$sqlrec);
// echo "No. of records - ".mysqli_num_rows($qsqlrec);
?></p>
                        <a class="preview" href="viewinsurtype.php" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                    </div>
                </div>
            </div> -->


            <!-- <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/plan.png" height="120" width="100">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Insurance Plan</h3>
                        <p>
                            <?php
                $sqlrec = "SELECT * FROM insurance_plan WHERE status='Active'";
                $qsqlrec = mysqli_query($con,$sqlrec);
                echo "No. of records - ".mysqli_num_rows($qsqlrec);
                ?>
                        </p>
                        <a class="preview" href="viewinsurplan.php" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                    </div>
                </div>
            </div> -->

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/account.png" height="100" width="100">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Insurance Account</h3>
                        <p> <?php
$sqlrec = "SELECT * FROM insurance_account where status='Active'";
$qsqlrec = mysqli_query($con,$sqlrec);
echo "No. of records - ".mysqli_num_rows($qsqlrec);
?></p>
                        <a class="preview" href="viewinsuranceaccount.php" rel="prettyPhoto"><i class="fa fa-eye"></i>
                            View</a>
                    </div>
                </div>
            </div>

            <!-- <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/pay.png" height="100" width="100">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Policy payment</h3>
                        <p> <?php
$sqlrec = "SELECT * FROM policy_payment where status='Active'";
$qsqlrec = mysqli_query($con,$sqlrec);
echo "No. of records - ".mysqli_num_rows($qsqlrec);
?></p>
                        <a class="preview" href="viewpolicypay.php" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                    </div>
                </div>
            </div> -->

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/claim.png" height="100" width="100">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Policy Claim</h3>
                        <p> <?php
$sqlrec = "SELECT * FROM policy_withdrawal ";
$qsqlrec = mysqli_query($con,$sqlrec);
echo "No. of records - ".mysqli_num_rows($qsqlrec);
?></p>
                        <a class="preview" href="viewpolicyclaim.php" rel="prettyPhoto"><i class="fa fa-eye"></i>
                            View</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/agent1.jpg" height="100" width="100">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Query</h3>
                        <p> <?php
$sqlrec = "SELECT * FROM contact";
$qsqlrec = mysqli_query($con,$sqlrec);
echo "No. of records - ".mysqli_num_rows($qsqlrec);
?></p>
                        <a class="preview" href="viewqueries.php" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/cust.png" height="100" width="100">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Applications</h3>
                        <p> <?php
$sqlrec = "SELECT * FROM motor_vehicle_application";
$qsqlrec = mysqli_query($con,$sqlrec);
echo "No. of records - ".mysqli_num_rows($qsqlrec);
?></p>
         
                        <a class="preview" href="viewapplied.php" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                    </div>
                </div>
            </div>

           



            <!-- <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/p7.jpeg" height="100" width="100">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Insurance Policy Details</h3>
                        <p> <?php
            // $sqlrec = "SELECT * FROM insurance_scheme where status='Active'";
            // $qsqlrec = mysqli_query($con,$sqlrec);
            // echo "No. of records - ".mysqli_num_rows($qsqlrec);
            ?></p>
                        <a class="preview" href="viewinsurscheme.php" rel="prettyPhoto"><i class="fa fa-eye"></i>
                            View</a>
                    </div>
                </div>
            </div> -->

            
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#services-->
<?php
include("footer.php");?>