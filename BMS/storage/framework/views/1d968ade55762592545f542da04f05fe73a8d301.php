<!doctype html>
<html lang="en">
 
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bms/main.css">
        <link rel="stylesheet" href="css/bms/linearicons.css">
        <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/libs/css/style.css">
        <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
        <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
        <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
        <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
        <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
        <title>BMS - Let us guide you home</title>
        <style>
            body {
                font-family: 'Circular Std Book';
                font-style: normal;
                font-weight: normal;
                font-size: 14px;
                color: #ffffff;
                background-color: #101326;
                -webkit-font-smoothing: antialiased;
            }
            .col-centered{
                float: none;
                margin: 0 auto;
            }
            h1{
                color: #06aed5;
            }
            .navbar-custom {
                color: #FFFFFF;
                background-color: #1399C6;
            }
        </style>
    </head>

    <body>
        <div class="dashboard-main-wrapper">
                <!-- ============================================================== -->
                <!-- navbar -->
                <!-- ============================================================== -->
                <div class="dashboard-header">
                    <nav class="navbar navbar-expand-lg fixed-top navbar-custom">
                        <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="assets/images/BMS.png" width="30px"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto navbar-right-top">
                                <li class="nav-item"> 
                                    <a  style="color:#FFFFFF;" class="nav-link" href="<?php echo e(route('AllBoardings')); ?>" id="navbarDropdown" role="button"  aria-haspopup="true" ><i class="fas fa-home"></i>&nbspSelect Your Boarding</a> 
                                </li>
                                <li class="nav-item"> 
                                    <a  style="color:#FFFFFF;" class="nav-link" href="<?php echo e(url('/findboarding')); ?>" id="navbarDropdown" role="button"  aria-haspopup="true" ><i class="fas fa-home"></i>&nbspFind Your Boarding</a> 
                                </li>
                                
                                <li class="nav-item"> 
                                    <a  style="color:#FFFFFF;" class="nav-link" href="#about" id="navbarDropdown" role="button"  aria-haspopup="true" ><i class="fas fa-info-circle"></i>&nbspAbout</a> 
                                </li>
                                <li class="nav-item">
                                        <a style="color:#FFFFFF;" class="nav-link nav-user-img" href="<?php echo e(route('login')); ?>" id="navbarDropdownMenuLink2" aria-haspopup="true" aria-expanded="false"><i class="fas fa-power-off"></i>&nbspLogin</a>
                                    </li>
                                <li class="nav-item">
                                    <a  style="color:#FFFFFF;" class="nav-link" href="<?php echo e(route('register')); ?>" id="navbarDropdown" role="button"  aria-haspopup="true" > <i class="fas fa-user-plus"></i>&nbspRegister</a>
                                </li>
                                
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- ============================================================== -->
                <!-- Content -->
                <!-- ============================================================== -->
                <br/><br/>
                <h1 class="text-uppercase" align="center">
                    Become a Host				
                </h1>

                <div class="mapouter ">
                    <div class="card">
                        <div class="card-body">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class=" w-100" src="../assets/images/uoj.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="w-100" src="../assets/images/fort.jpeg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="w-100" src="../assets/images/kovil1.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>   </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>  </a>
                            </div>
                        </div>
                    </div>
                </div> 

<br>
<br><br><br><br><br><br><br><br><br><br>
<br>
           
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=University%20of%20Jaffna&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen style="width:100%;height:100%;">
                </iframe>
                </div>
                <style>.mapouter{text-align:right;height:391px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:391px;width:100%;}
                </style>
            </div>
            <br/>
            <br/> <h1 class="text-uppercase" align="center">Recommended for you</h1>
            
            <div class="row" id="toprated">
                    
                    <div class="col-10 col-centered">
                        <div class="row">
                            
                                                        
                                            

                            
                                
                                                            
                                                     
                        </div>
                    </div>
            </div>
            <br/><br/>
            <div class="row">
                <div class="col-5 col-centered" id ="about">
                    <h1 class="text-uppercase" align="center"> About </h1>
                    <h4  style="color:#FFFFFF;">Our goal is to help every boarding from all around the Jaffna, 
                            provide exceptional care for their boarding students.<br>
                            We are providing the details about boarding places which is helpful for students 
                            who are studying at University of Jaffna.<br>
                            We prioritise our energy to your biggest challenges and pains in finding the perfect boarding.</h4>
                </div>
                <div class="col-4 col-centered">
                        <h1 class="text-uppercase" align="center"> Contact Us </h1>
                        <h4  style="color:#FFFFFF;">By Traditional Methods, Or though Social Media Pages<br/>Here are the way to connect with us</h4>
                    </div>
            </div>
        </div>
        
        <footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Quick links</h6>
								<ul>
									<li><a href="#">Find Nearby Boardings</a></li>
									<li><a href="#">Reviews</a></li>
									<li><a href="#">Blog</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Features</h6>
								<ul>
									<li><a href="#">Help</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Resources</h6>
								<ul>
									<li><a href="#">Finding the perfect Boarding</a></li>
								</ul>								
							</div>
						</div>												
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>							
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" action="" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>	
						<p class="mt-80 mx-auto footer-text col-lg-12">
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This service is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">BMS</a>
						</p>											
					</div>
				</div>
				
			</footer>	
                
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>        
</body>