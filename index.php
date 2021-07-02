<?php
include("header.php");
?>

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
                <li data-target="#main-slider" data-slide-to="3"></li>
                <li data-target="#main-slider" data-slide-to="4"></li>
                <li data-target="#main-slider" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/life3.jpg)" >
                    <div class="container">
                   
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/p3.jpg)">
                    <div class="container">
                    </div>
                </div><!--/.item-->
                
                <div class="item" style="background-image: url(images/p15.jpg)">
                    <div class="container">
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/p7.jpeg)">
                    <div class="container">
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(images/p11.jpg)">
                    <div class="container">
                    </div>
                </div><!--/.item-->
                
                
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown" style="text-color:Indigo">
           
                <h2>Insurance Types</h2>
                <p class="lead"></p>
            </div>

            <div class="row"  align="center">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                              <img src="images/protection_plans.jpg" />
                            <h2> <?php
                        $sqlrecinsurance_type = "SELECT * FROM insurance_type WHERE insurance_type_id='1'";
                        $qsqlrecinsurance_type = mysqli_query($con,$sqlrecinsurance_type);
                        $rsinsurancy_type = mysqli_fetch_array($qsqlrecinsurance_type);
                       echo "<a href='insurschemeinfo.php?insurancetypeid=$rsinsurancy_type[insurance_type_id]'>PROTECTION PLANS</a></li>";
                        
                        ?> </h2>
                            <h3>Protection Plan that provides coverage against death, diseases and disabilities. Because you want your family to be safe and secure</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                             <img src="images/child_plans.jpg" />
                            <h2> <?php
                        $sqlrecinsurance_type = "SELECT * FROM insurance_type WHERE insurance_type_id='2'";
                        $qsqlrecinsurance_type = mysqli_query($con,$sqlrecinsurance_type);
                        $rsinsurancy_type = mysqli_fetch_array($qsqlrecinsurance_type);
                       echo "<a href='insurschemeinfo.php?insurancetypeid=$rsinsurancy_type[insurance_type_id]'>CHILD PLANS</a></li>";
                        
                        ?>  </h2>
                            <h3>Child Plan that takes care of your child education and extra curicular expenses with or without you. Because you want to make your childs dream come true.</h3>
                        </div>
                    </div><!--/.col-md-4-->
                           

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                           <img src="images/growth_plans.jpg" />
                            <h2> <?php
                        $sqlrecinsurance_type = "SELECT * FROM insurance_type WHERE insurance_type_id='5'";
                        $qsqlrecinsurance_type = mysqli_query($con,$sqlrecinsurance_type);
                        $rsinsurancy_type = mysqli_fetch_array($qsqlrecinsurance_type);
                       echo "<a href='insurschemeinfo.php?insurancetypeid=$rsinsurancy_type[insurance_type_id]'>GROWTH PLANS</a></li>";
                        
                        ?> </h2>
                            <h3>Growth plan provides life cover to the borrowers of banks/ financial institutions under one group master policy and ensures that in case of death of the borrower, amount of loan outstanding (as per the option chosen) is paid out by Us.</h3>
                        </div>
                    </div><!--/.col-md-4-->
                    
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img src="images/saving_plans.jpg" />
                            <h2> <?php
                        $sqlrecinsurance_type = "SELECT * FROM insurance_type WHERE insurance_type_id='4'";
                        $qsqlrecinsurance_type = mysqli_query($con,$sqlrecinsurance_type);
                        $rsinsurancy_type = mysqli_fetch_array($qsqlrecinsurance_type);
                       echo "<a href='insurschemeinfo.php?insurancetypeid=$rsinsurancy_type[insurance_type_id]'>SAVINGS PLAN</a></li>";
                        
                        ?> </h2>
                            <h3>Savings plan that gives you stable growth and provides you with higher securities. Because you want to save for your long-term goals.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                             <img src="images/group_plans.jpg" />
                            <h2> <?php
                        $sqlrecinsurance_type = "SELECT * FROM insurance_type WHERE insurance_type_id='6'";
                        $qsqlrecinsurance_type = mysqli_query($con,$sqlrecinsurance_type);
                        $rsinsurancy_type = mysqli_fetch_array($qsqlrecinsurance_type);
                       echo "<a href='insurschemeinfo.php?insurancetypeid=$rsinsurancy_type[insurance_type_id]'>GROUP PLANS</a></li>";
                        
                        ?> </h2>
                            <h3>Group plan that let you take advantage of market volatilities and are customised. Because you want to acheive your goals with your investment</h3>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.services-->
            </div><!--/.row-->
               
        </div><!--/.container-->
    </section><!--/#feature-->




    <section id="content" style="    background-color: aliceblue;" >
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 wow fadeInDown">
                   <div class="tab-wrap"> 
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Online Policy registration</a></li>
                                    <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">Customer Account</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Claims</a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Our Philosopy</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">What We Do?</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="tab1">
                                        <div class="media" >
                                           <div class="pull-left">
                                             
                                            </div>
                                            <div class="media-body">
                                                <h2>Online Policy registration </h2>
                                                 <p>the customers or policy holders can register their account and they can create their new policy account. The customer needs to enter their profile details to apply for policy. The system displays policy information and plan details before applying policy. After policy registration the system generates policy receipt.
												 </p>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="tab-pane fade active in" id="tab2">
                                        <div class="media">
                                           <div class="pull-left">
                                                
                                            </div>
                                            <div class="media-body">
                                                 <h2> <h2>After loging in to your account you can do the following:</h2>
                                                 <p>The customer can update their profile details and password. The customer can view registered policy details, track next payment date, number of premium, etc. Customer can withdraw  or cancel their registered policy by providing bank account details.</p>
                                            </div>
                                        </div>
                                     </div>

									<div class="tab-pane fade" id="tab3">
                                    <h2>Policy Claim Information</h2>
                                                 <p><ul>
                                                 <li>Policy can be claimed after the maturity date of registered policy. Claim procedure will be completed after 1month from the date of claim.
                                                 <li>Policy can be cancelled in middle of the policy term.
                                                 
                                                 </ul></p>
                                                 </div>
                                                 
                                     <div class="tab-pane fade" id="tab4">
                                        <p>This project deals with Insurance in online. This tool taking care of the policy in online using tracking the details of the customer </p>
                                     </div>

                                     <div class="tab-pane fade" id="tab5">
                                        <p>The main objective of the application is to automate all the possible functionalities of insurance and provide the online insurance service to the customers .</p>
                                     </div>
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->

                

                    </div>
                </div>

            </div><!--/.row-->
            
        </div><!--/.container-->
    </section><!--/#content-->

   <hr size="4" width="4">

    <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Have a question or need a custom quote?</h2>
                            <p>We are here to answer. Contact us at any time. Our Email ID is contact@onlineinsurance.com and Toll Free number is 1800-155-2477</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->
<?php
include("footer.php");
?>