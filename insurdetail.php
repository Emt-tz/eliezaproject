<?php
include("header.php");
if(isset($_GET['viewid']))
{
	$sqlrecedit = "SELECT * FROM insurance_scheme WHERE insurance_scheme_id='$_GET[viewid]'";
	$qsqlrecedit = mysqli_query($con,$sqlrecedit);
	$rsedit = mysqli_fetch_array($qsqlrecedit);
	$insurplan="SELECT * FROM insurance_plan WHERE insurance_scheme_id='$_GET[viewid]'";
	$insurplan1=mysqli_query($con,$insurplan);
	$rsedit1=mysqli_fetch_array($insurplan1);
}
?>
<section id="contact-page" style="background-color:#fff">
    <div class="container">

        <h2>
            <font size="+3" color="#990000">
                <center><strong><?php echo $rsedit['insurance_scheme']; ?></strong></center>
            </font>
        </h2>

        <div class="image_wrapper fr_img">
            <center><img src='<?php echo "insuranceimg/" . $rsedit['img']; ?>' alt='Image 01' width='250'
                    height='250' />
        </div>
        <p><?php echo $rsedit['note']; ?></p>
        </center>

        <div class="center">
            <div class="cleaner_h30 horizon_divider"></div>
            <div class="cleaner_h30"></div><br />
            <div align="center">

                
    </div>
    <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#contact-page-->

<?php
include("footer.php");
include("datatables.php");
?>

<script type="application/javascript">
function calculateinterest() {
    if (document.getElementById("month").value == "1 Month") {
        document.getElementById("instllamt").value = parseFloat(document.getElementById("invstamt").value / (document
            .getElementById("nyear").value * 12)).toFixed(2);
        document.getElementById("inttamt").value = parseFloat((document.getElementById("invstamt").value * document
            .getElementById("percentage").value) / 100).toFixed(2);

        document.getElementById("tamt").value = parseFloat(parseFloat(document.getElementById("invstamt").value) + (
            document.getElementById("invstamt").value * document.getElementById("percentage").value) / 100).toFixed(
            2);

    } else if (document.getElementById("month").value == "3 Month") {
        document.getElementById("instllamt").value = parseFloat(document.getElementById("invstamt").value / (document
            .getElementById("nyear").value * 4)).toFixed(2);
        document.getElementById("inttamt").value = parseFloat((document.getElementById("invstamt").value * document
            .getElementById("percentage").value) / 100).toFixed(2);

        document.getElementById("tamt").value = parseFloat(parseFloat(document.getElementById("invstamt").value) + (
            document.getElementById("invstamt").value * document.getElementById("percentage").value) / 100).toFixed(
            2);

    } else if (document.getElementById("month").value == "6 Month") {
        document.getElementById("instllamt").value = parseFloat(document.getElementById("invstamt").value / (document
            .getElementById("nyear").value * 2)).toFixed(2);
        document.getElementById("inttamt").value = parseFloat((document.getElementById("invstamt").value * document
            .getElementById("percentage").value) / 100).toFixed(2);

        document.getElementById("tamt").value = parseFloat(parseFloat(document.getElementById("invstamt").value) + (
            document.getElementById("invstamt").value * document.getElementById("percentage").value) / 100).toFixed(
            2);

    } else if (document.getElementById("month").value == "1 Year") {
        document.getElementById("instllamt").value = parseFloat(document.getElementById("invstamt").value / (document
            .getElementById("nyear").value * 1)).toFixed(2);
        document.getElementById("inttamt").value = parseFloat((document.getElementById("invstamt").value * document
            .getElementById("percentage").value) / 100).toFixed(2);

        document.getElementById("tamt").value = parseFloat(parseFloat(document.getElementById("invstamt").value) + (
            document.getElementById("invstamt").value * document.getElementById("percentage").value) / 100).toFixed(
            2);

    }
}

function validateform() {
    var i = 0;

    var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
    var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets with space
    var alphanumericExp = /^[a-zA-Z0-9]+$/; //Variable to validate only alphanumerics
    var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
    var mobileno = /^\d{10}$/;
    if (parseFloat(document.frminsurdetail.invstamt.value) < parseFloat(document.frminsurdetail.sum_assured_min
        .value)) {
        document.getElementById("errninvstamt").innerHTML =
            "<font color='red'>Entered amount is  less than Min. Investment amount.</font>";
        document.frminsurdetail.invstamt.focus();
        i = 1;
    }
    if (parseFloat(document.frminsurdetail.invstamt.value) > parseFloat(document.frminsurdetail.sum_assured_max
        .value)) {
        document.getElementById("errninvstamt").innerHTML =
            "<font color='red'>Entered amount is  greater than Max. Investment amount...</font>";
        document.frminsurdetail.invstamt.focus();
        i = 1;
    }

    if (i == 0) {
        return true;
    } else {
        return false;
    }
}
// policy_term_max min_age max_age sum_assured_min sum_assured_max nyear invstamt month frminsurdetail
</script>