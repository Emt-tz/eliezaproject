<?php
include("header.php");
?>

<section id="contact-page">
    <div class="container">
        <div class="center">

            <h2>Motor Vehicle Insurance Application Form</h2>
            <p class="lead">Enter the login details...</p>
        </div>
        <button type="button" data-toggle="collapse" class="btn btn-fill btn-primary" data-target="#edituser"
            aria-expanded="false" aria-controls="edituser">Applicant Information</button>
        <button type="button" data-toggle="collapse" class="btn btn-fill btn-primary" data-target="#edituser1"
            aria-expanded="false" aria-controls="edituser">Vehicle Information</button>
        <button type="button" data-toggle="collapse" class="btn btn-fill btn-primary" data-target="#edituser4"
            aria-expanded="false" aria-controls="edituser">Mode of Payment</button>
        <button type="button" data-toggle="collapse" class="btn btn-fill btn-primary" data-target="#edituser5"
            aria-expanded="false" aria-controls="edituser">Statement</button>
        <div class="collapse" id="edituser">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-5 pr-md-1">
                                <div class="form-group">
                                    <label>policy holder full name</label>
                                    <input type="text" class="form-control" id="policyfname" name="policyfname"
                                        placeholder="Full name">
                                </div>
                            </div>
                            <div class="col-md-3 px-md-1">
                                <div class="form-group">
                                    <label>Date of birth</label>
                                    <input type="date" class="form-control" placeholder="Username" id="dob" name="dob"
                                        placeholder="Date of birth">
                                </div>
                            </div>
                            <div class="col-md-4 pl-md-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nationality</label>
                                    <input type="text" class="form-control" placeholder="nationality" id="nationality"
                                        name="nationality">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-md-1">
                                <div class="form-group">
                                    <label>Occupation</label>
                                    <input type="text" class="form-control" placeholder="Fill occupation"
                                        id="occupation" name="occupation">
                                </div>
                            </div>
                            <div class="col-md-6 pl-md-1">
                                <div class="form-group">
                                    <label>Home address</label>
                                    <input type="text" class="form-control" placeholder="Home Address" id="HomeAddress"
                                        name="HomeAddress">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" placeholder="Email" id="email"
                                        name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-md-1">
                                <div class="form-group">
                                    <label>period of insurance from</label>
                                    <input type="text" class="form-control" placeholder="fill date" id="period"
                                        name="period">
                                </div>
                            </div>
                            <div class="col-md-4 px-md-1">
                                <div class="form-group">
                                    <label>National identity number</label>
                                    <input type="text" class="form-control" placeholder="Id number" id="nida"
                                        name="nida">
                                </div>
                            </div>
                            <div class="col-md-4 px-md-1">
                                <div class="form-group">
                                    <p>Please select the type of policy cover:</p>
                                      <input type="radio" id="html" name="fav_language" placeholder="HTML">
                                      <label for="html">Thirdy party only</label><br>
                                      <input type="radio" id="css" name="fav_language" placeholder="CSS">
                                      <label for="css">Thirdy party fire and theft</label><br>
                                      <input type="radio" id="javascript" name="fav_language" placeholder="JavaScript">
                                      <label for="javascript">Comprehensive</label>

                                    <br>
                                </div>
                            </div>

                            <div class="col-md-4 pl-md-1">
                                <div class="form-group">
                                    <p>Please select type of motor vehicle</p>
                                    <input type="radio" id="html" name="fav_language" placeholder="HTML">
                                      <label for="html">Private car</label><br>
                                      <input type="radio" id="css" name="fav_language" placeholder="CSS">
                                      <label for="css">commercial vehicle</label><br>
                                      <input type="radio" id="javascript" name="fav_language" placeholder="JavaScript">
                                      <label for="javascript">motorcycle</label>
                                    <input type="radio" id="html" name="fav_language" placeholder="HTML">
                                      <label for="html">Taxi</label><br>
                                    <input type="radio" id="html" name="fav_language" placeholder="HTML">
                                      <label for="html">bus</label><br>
                                    <label for="fname">other:</label><br>
                                    <input type="text" id="fname" name="fname"><br>
                                    <br>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>


            </div>
        </div>
        <div class="collapse" id="edituser1">
            <div class="card">

                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-5 pr-md-1">
                                <div class="form-group">
                                    <label>Registration number</label>
                                    <input type="text" class="form-control" placeholder="reg no" id="regno"
                                        name="regno">
                                </div>
                            </div>
                            <div class="col-md-3 px-md-1">
                                <div class="form-group">
                                    <label>chasis number</label>
                                    <input type="text" class="form-control" placeholder="enter chasis no" id="chasis"
                                        name="chasis">
                                </div>
                            </div>
                            <div class="col-md-4 pl-md-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Engine number</label>
                                    <input type="text" class="form-control" placeholder="engine no" id="engno"
                                        name="engno">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-md-1">
                                <div class="form-group">
                                    <label>Year of manufacture</label>
                                    <input type="text" class="form-control" placeholder="year of manufacture" id="manf"
                                        name="manf">
                                </div>
                            </div>
                            <div class="col-md-6 pl-md-1">
                                <div class="form-group">
                                    <label>estimate the present value ( including duty)</label>
                                    <input type="text" class="form-control" placeholder="enter value" id="est"
                                        name="est">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Make & Body type</label>
                                    <input type="text" class="form-control" placeholder="enter type" id="make"
                                        name="make">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-md-1">
                                <div class="form-group">
                                    <label>Cubic capacity</label>
                                    <input type="text" class="form-control" placeholder="enter capacity" id="cubic"
                                        name="cubic">
                                </div>
                            </div>
                            <div class="col-md-4 px-md-1">
                                <div class="form-group">
                                    <label>carrying capacity</label>
                                    <input type="text" class="form-control"
                                        placeholder="enter goods or passenger capacity" id="capacity" name="capacity">
                                </div>
                            </div>
                            <div class="col-md-4 pl-md-1">
                                <div class="form-group">
                                    <label>Date of purchase</label>
                                    <input type="number" class="form-control" placeholder="Date" id="dpurchase"
                                        name="dpurchase">
                                    <label for="myfile">please attach a car card registration document:</label>
                                    <input type="file" id="myfile" name="myfile1"><br><br>

                                    <label for="myfile">for comprehensive cover attach a photo of a car picture taken in
                                        atleast three different sides :</label>
                                    <input type="file" id="myfile" name="myfile2"><br><br>

                                </div>
                            </div>
                        </div>

                    </form>
                </div>


            </div>
        </div>

        <div class="collapse" id="edituser4">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Payment</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-5 pr-md-1">
                                <div class="form-group">
                                    <label>enter mode of payment used</label>
                                    <input type="text" class="form-control" placeholder="enter mode of paymenty"
                                        id="paymode" name="paymode">
                                </div>
                            </div>
                            <div class="col-md-3 px-md-1">
                                <div class="form-group">
                                    <label>total amount paid</label>
                                    <input type="text" class="form-control" placeholder="amount" id="amount"
                                        name="amount">
                                </div>
                            </div>
                            <label for="myfile">please attach a receipt of bank payment or screeshot of the payment
                                message :</label>
                            <input type="file" id="myfile" name="myfile3"><br><br>

                        </div>


                    </form>
                </div>


            </div>
        </div>
        <div class="collapse" id="edituser5">
            <div class="card">

                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-9 pr-md-1">
                                <div class="form-group">
                                    <label>I declare that to my knowledge the answers and particulars given in this form
                                        are true and completethat i not withheld any material and the vehicles described
                                        is good condition. i further agee that this form and declaration shall be the
                                        basis of the contract between me and the insurance company whose policy is
                                        applicable to this insurance,I agree to accept</label>
                                    <div class="form-group">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" placeholder="Bike">
                                        <label for="vehicle1"> Yes,I agree</label><br>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" placeholder="Car">
                                        <label for="vehicle2"> No, I disagree</label><br>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-5 px-md-1">
                                <div class="form-group">
                                    <label>date of application of insurance </label>
                                    <input type="date" class="form-control" placeholder="date of completion"
                                        id="datecompl" name="datecompl">
                                </div>
                            </div>



                        </div>



                    </form>
                </div>

                <div class="card-footer">
                    <button class="btn btn-fill btn-primary" onclick="edit()">Apply</button>
                </div>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#contact-page-->
<script>
function edit() {
    var str = $("form").serializeArray();
    $.ajax({
        type: 'POST',
        url: 'formpost.php',
        data: str,
        success: function(data) {
           console.log(data);
        }
    })
}
</script>
<?php
include("footer.php");
?>