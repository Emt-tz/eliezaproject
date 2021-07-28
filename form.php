<?php
include "header.php";
?>
<section id="contact-page">
    <div class="container">
        <div class="center">
            <br>
            <h2>Motor Vehicle Insurance Application Form</h2>
            <br>
        </div>

        <div id="edituser">
            <div class="card">
                <div class="card-body">
                    <form>
                        <h2><u>Personal Information</u></h2>
                        <div class="row">

                            <div class="col-md-5 pr-md-1">
                                <div class="form-group">

                                    <input type="text" class="form-control" id="fullName" name="fullName"
                                        placeholder="Full name">
                                </div>
                            </div>
                            <div class="col-md-3 px-md-1">
                                <div class="form-group">

                                    <input type="text" class="form-control" placeholder="Date of birth(dd/mm/yyyy)"
                                        id="dob" name="dob" placeholder="Date of birth">
                                </div>
                            </div>
                            <div class="col-md-4 pl-md-1">
                                <div class="form-group">

                                    <input type="text" class="form-control" placeholder="Nationality" id="nationality"
                                        name="nationality">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 pr-md-1">
                                <div class="form-group">
                                    <div class="form-group">

                                        <select class="form-control inputstl" id="gender1" placeholder="gender"
                                            name="gender">
                                            <option>Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 px-md-1">
                                <div class="form-group">

                                    <input type="text" class="form-control" placeholder="Home Address" id="HomeAddress"
                                        name="homeAddress">
                                </div>
                            </div>
                            <div class="col-md-4 pl-md-1">
                                <div class="form-group">

                                    <input type="email" class="form-control" placeholder="Email" id="email"
                                        name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 pr-md-1">
                                <div class="form-group">

                                    <input type="text" class="form-control"
                                        placeholder="Insurance application date (dd/mm/yyyy)" id="period"
                                        name="formFillDate">
                                </div>
                            </div>
                            <div class="col-md-3 px-md-1">
                                <div class="form-group">

                                    <input type="text" class="form-control"
                                        placeholder="Nida/Passport/Drivers license/Voters id" id="nida" name="nida">
                                </div>
                            </div>
                        </div>


                </div>

            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h2><u>Vehicle Information</u></h2>
                <div class="row">
                    <div class="col-md-5 pr-md-1">
                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="Registration number" id="regno"
                                name="vehicleRegistrationNumber">
                        </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                        <div class="form-group">

                            <input type="number" class="form-control" placeholder="Vehicle chasis number" id="chasis"
                                name="chasisNumber">
                        </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                        <div class="form-group">

                            <input type="number" class="form-control" placeholder="Vehicle engine number" id="engno"
                                name="vehicleEngineNumber">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 pr-md-1">
                        <div class="form-group">

                            <input type="number" class="form-control" placeholder="Engine capacity" id="regno"
                                name="vehicleEngineCapacity">
                        </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="Vehicle model" id="vehiclemodel"
                                name="vehicleModel">
                        </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="Vehicle color" id="engno"
                                name="vehicleColor">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 pr-md-1">
                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="Vehicle year of manufacture" id="manf"
                                name="vehicleManufactureYear">
                        </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="Vehicle make and body type" id="make"
                                name="vehicleMake">
                        </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter goods or passenger capacity"
                                id="capacity" name="vehicleCapacity">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <input type="text" class="form-control" placeholder="Date of purchase (dd/mm/yyyy)"
                            id="dpurchase" name="vehicleDateofPurchase">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3 px-md-1">
                        <div class="form-group">
                             <select class="form-control inputstl" id="policycover" name="policyCover">
                                <option value="" disabled selected>Please select the type of policy cover</option>
                                <option>Comprehensive</option>
                                <option>Third_party</option>
                            </select>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                        <div class="form-group">
                            <label for=""></label>
                            <select class="form-control inputstl" id="motorvehicle" name="motorVehicle">
                                <option value="" disabled selected>Please select type of motor vehicle</option>
                                <option>Commercial_vehicle</option>
                                <option>Bajaji</option>
                                <option>Motorcycle</option>
                                <option>Private_vehicle</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                        <div class="form-group">
                            <label></label>
                            <input type="number" class="form-control" placeholder="Vehicle value" id="vehiclevalue">
                        </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                        <div class="form-group">
                            <label class="list-group">Estimates</label>
                            <ul class="list-group">
                                <li class="list-group-item" id="estimateTotal"></li>
                                <li class="list-group-item" id="estimatePremium"></li>
                                <li class="list-group-item" id="estimateVAT"></li>

                            </ul>

                        </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="Total" id="commercialTotal" value="nil"
                                disabled>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <h2><u>Vehicle Documents</u></h2>
                    <div class="col-md-4 pl-md-1">
                        <div class="form-group">
                            <br>
                            <label for="myfile">Upload car registration document (pdf)</label>
                            <input type="file" id="carDocument" name="vehicleRegistrationDocument"><br>
                            <label for="myfile" class="comprehensive">For comprehensive cover attach a photo of a
                                car picture taken in
                                atleast three different sides :</label>
                            <input class="comprehensive" type="file" id="comprehensivefile" name="vehiclePhotos">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="card">
            <div class="card-body">

                <div class="row">
                    <h2><u>Form Payment</u></h2>
                    <br>
                    <div class="col-md-5 pr-md-1">
                        <div class="form-group">
                            <select class="form-control inputstl" id="payment" name="paymentMode">
                                <option value="" disabled selected>Please select mode of payment used</option>
                                <option>Mpesa</option>
                                <option>TigoPesa</option>
                                <option>AirtelMoney</option>
                                <option>T-Pesa</option>
                                <option>Crdb</option>
                                <option>Nmb</option>
                                <option>Nbc</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="amount" id="amount"
                                name="paymentAmount">
                        </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter payment reference number"
                                id="refno" name="paymentReference">
                        </div>
                    </div>


                </div>



            </div>
        </div>
        </form>
        <br>
        <div class="card">
            <div class="card-footer">
                <center><button class="btn btn-fill btn-primary" onclick="edit()">Apply</button>
                    <div class="toast">
                        <div class="toast-body">

                        </div>
                    </div>

                </center>
            </div>
        </div>


        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#contact-page-->
<script>
$(document).ready(function() {
    $('.list-group').hide();
    $('#commercialTotal').hide();
    $('#vehiclevalue').hide();
    $('.comprehensive').hide();
    $('#policycover').change(function() {
        if ($('#policycover option:selected').val() == "Comprehensive") {
            $('#vehiclevalue').show();
            $('#commercialTotal').show();
            $('.list-group').hide();
            $('.comprehensive').show();
            $('#motorvehicle').change(function() {
                if ($('#motorvehicle option:selected').val() ==
                    "Commercial_vehicle") {
                    $('#vehiclevalue').change(function() {
                        $('#commercialTotal').val("Total " + Math.floor($(
                            '#vehiclevalue').val() * (4.25 / 100)));
                    });
                } else if ($('#motorvehicle option:selected').val() ==
                    "Bajaji") {
                    $('#commercialTotal').val("Total " + Math.floor($('#vehiclevalue').val() * (
                        5 / 100)));
                } else if ($('#motorvehicle option:selected').val() ==
                    "Motorcycle") {
                    $('#commercialTotal').val("Total " + Math.floor($('#vehiclevalue').val() * (
                        6 / 100)));
                } else if ($('#motorvehicle option:selected').val() ==
                    "Private_vehicle") {
                    $('#commercialTotal').val("Total " + Math.floor($('#vehiclevalue').val() * (
                        3.5 / 100)));
                }
            });

        } else if ($('#policycover option:selected').val() == "Third_party") {
            $('#vehiclevalue').hide();
            $('#commercialTotal').hide();
            $('.list-group').show();
            $('.comprehensive').hide();
            $('#motorvehicle').change(function() {
                if ($('#motorvehicle option:selected').val() ==
                    "Commercial_vehicle") {
                    $("#estimateTotal").html("Total Tsh 177,000");
                    $("#estimatePremium").html("Premium Tsh 150,000");
                    $("#estimateVAT").html("Vat Tsh 27,000");
                } else if ($('#motorvehicle option:selected').val() ==
                    "Bajaji") {
                    $("#estimateTotal").html("Total Tsh 88,500");
                    $("#estimatePremium").html("Premium Tsh 75,000");
                    $("#estimateVAT").html("Vat Tsh 13,500");
                } else if ($('#motorvehicle option:selected').val() ==
                    "Motorcycle") {
                    $("#estimateTotal").html("Total Tsh 59,000");
                    $("#estimatePremium").html("Premium Tsh 50,000");
                    $("#estimateVAT").html("Vat Tsh 9,000");
                } else if ($('#motorvehicle option:selected').val() ==
                    "Private_vehicle") {
                    $("#estimateTotal").html("Total Tsh 118,000");
                    $("#estimatePremium").html("Premium Tsh 100,000");
                    $("#estimateVAT").html("Vat Tsh 18,000");
                }
            });
        }
    });
});
</script>
<script>
function edit() {
    var myFile = $('#carDocument').prop('files')[0];
    var formData = new FormData($("form")[0]);
    formData.append("vehicleRegistrationDocument", myFile);
    $.ajax({
        url: 'formpost.php',
        type: 'POST',
        data: formData,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function(returndata) {
            $(".toast-body").html(returndata);
            $(".toast").show();
        },
        error: function(returndata) {
            $(".toast-body").html(returndata);
            $(".toast").toast('show');
        }
    });

    // var str = $("form").serializeArray();
    // $.ajax({
    //     type: 'POST',
    //     url: 'formpost.php',
    //     data: str,
    //     success: function(dara) {
    //         alert(dara);
    //     }
    // })
}
</script>

<?php
include "footer.php";
?>