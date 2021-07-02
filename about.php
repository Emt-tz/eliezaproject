<?php
include("header.php");
?>

    <section id="about-us">
        <div class="container">
			<div class="center wow fadeInDown">
				<h2>About Online Insurance</h2>
				<p class="lead">This project deals with Insurance in online. This tool taking care of the policy in online using tracking the details of the customer .Customer can apply and view their insurance policy details. 
          The main objective of the application is to automate all the possible functionalities of insurance and provide the online insurance service to the customers . Using this system agents and customers can know the details about present policies, new policies, policy specifications, policy terms and conditions, etc. This system also calculates agent commission is based upon customer policy registration.
</p>
			</div>
			
			<!-- about us slider -->
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
				  	<ol class="carousel-indicators visible-xs">
					    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-slider" data-slide-to="1"></li>
					    <li data-target="#carousel-slider" data-slide-to="2"></li>
				  	</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="images/p10.jpg" class="img-responsive" style="width: 100%;height: 550px;"  alt=""> 
					   </div>
					   <div class="item">
							<img src="images/p8.jpg" class="img-responsive" style="width: 100%;height: 550px;" alt=""> 
					   </div> 
					   <div class="item">
							<img src="images/p6.jpg" class="img-responsive" style="width: 100%;height: 550px;" alt=""> 
					   </div> 
                       <div class="item">
							<img src="images/life3.jpg" class="img-responsive" style="width: 100%;height: 550px;" alt=""> 
					   </div> 
                       <div class="item">
							<img src="images/p3.jpg" class="img-responsive" style="width: 100%;height: 550px;" alt=""> 
					   </div> 
                       
					</div>
					
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->
			

		</div><!--/.container-->
    </section><!--/about-us-->
	
    <?php
	include("footer.php"); include("datatables.php");
	?>