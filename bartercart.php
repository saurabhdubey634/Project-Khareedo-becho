<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
require_once ("include/initialize.php");
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Goggles Ecommerce Category Bootstrap responsive Web Template | Single :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/home.css" rel="stylesheet">
	<link rel="stylesheet" href="css/cart.css" type="text/css">
	<link rel="stylesheet" href="product/css/cart.css" type="text/css">
	<link href="product/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="product/css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="product/css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="product/css/shop.css" type="text/css" />
	<link rel="stylesheet" href="product/css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="product/css/owl.theme.css" type="text/css" media="all">
	<link rel="stylesheet" type="text/css" href="product/css/jquery-ui1.css">
	<link href="product/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="product/css/flexslider.css" type="text/css" media="screen" />
	<link href="product/css/style.css" rel='stylesheet' type='text/css' />
	<link href="product/css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  
  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
	
    <![endif]--> 
	
	<link href="css/developer.css" rel="stylesheet">
	<link href="css/category1.css" rel="stylesheet">
	<link href="css/tendermenu.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="web1/css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="web1/css/JiSlider.css" rel="stylesheet">
	<!-- //banner-slider -->
	<link rel="stylesheet" href="web1/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="web1/css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Archivo+Black&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-Fonts -->
	
	
	 
  
</head>

<body >
	 <header id="header">
  <!--header-->
  
    <div class="header_top"><!--header_top-->
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="contactinfo">
              <ul class="nav nav-pills" id="t1">
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
				<li>For Bulk Order Helpline Number: +919967857789</li>
              </ul>
            </div>
          </div>
         
        </div>
      </div>
    </div><!--/header_top-->
    
    <div class="header-middle"><!--header-middle-->
      <div class="container">
        <div class="row">
          <div class="col-md-8 clearfix">
            <div class="logo pull-left" id="top">
            <a class="navbar-brand" href="index.html">
				<h1 id="logo">Khareedo Becho.COM</h1>
			</a>
            </div> 
          </div>
		  
		
			



          <div class="col-md-4 clearfix">
            <div class="shop-menu clearfix pull-right">
              <ul class="nav navbar-nav">     
               
                <?php if (isset($_SESSION['CUSID'] )) { ?>  
                     
                  <li><a   href="<?php echo web_root?>logout.php"><i class="fa fa-lock"></i> Logout</a></li>
                <?php }else{ ?> 
                <li><a data-target="#smyModal" data-toggle="modal"  href=""><i class="fa fa-lock"></i> Login/signup</a></li>
				
              <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!--/header-middle-->
  
    <div class="header-middle"><!--header-bottom-->
      <div class="container">
        <div class="row">
          <div class="col-sm-9">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="mainmenu pull-left">
              <ul class="nav navbar-nav collapse navbar-collapse">
			  
               
                <li class="dropdown"><a href="#"><i class="fa fa-bars"></i>Categories<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                       <?php 
                                            $mydb->setQuery("SELECT * FROM `tblcategory`");
                                            $cur = $mydb->loadResultList();
                                           foreach ($cur as $result) { 
                                       echo '<li><a href="index.php?q=product&category='.$result->CATEGORIES.'" >'.$result->CATEGORIES.'</a></li>';
                                        } ?> 
                                    </ul>
                                </li> 

				     
                
                <li><a href="<?php web_root?>index.php?q=product">Service</a></li>
                <li><a href="<?php web_root?>index.php?q=contact">Help</a></li>
              </ul>
            </div>
          </div>
          
        </div>
      </div>
    </div><!--/header-bottom-->
  </header><!--/header-->

		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container">
				<div class="inner-sec-shop pt-lg-4 pt-3">
					<div class="row">
					 <?php
						$con=mysqli_connect("localhost","root","","khareedo");
				  	$query = "SELECT * FROM `tblpromopro` pr , `tblproduct` p , `tblcategory` c
                                                 WHERE pr.`PROID`=p.`PROID` AND  p.`CATEGID` = c.`CATEGID`  and p.`PROID` = '{$_GET['proid']}'";
						
						
						if($result=$con->query($query))
							
						{	
						$numrow=mysqli_num_rows($result);
						
							while($row=$result->fetch_assoc()){
								$image1=$row["image1"];
								$image2=$row["image2"];
								$image3=$row["image3"];
								
								
								$productname=$row["ProductName"];
								$aboutproduct1=$row["AboutProduct1"];
								$aboutproduct2=$row["AboutProduct2"];
								$aboutproduct3=$row["AboutProduct3"];
								$specification=$row["Specification"];
								$price=$row["PRODISPRICE"];
								$descr=$row["PRODESC"];
								$mobileno=$row["OWNERPHONE"];
                                
							echo '<div class="col-lg-4 single-right-left ">
									<div class="grid images_3_of_2">
										<div class="flexslider1">
					
											<ul class="slides">
												<li data-thumb="admin/products/'.$image1.'">
													<div class="thumb-image"> <img src="admin/products/'.$image1.'" data-imagezoom="true" class="img-fluid" alt=" ">  </div>
												</li>
												<li data-thumb="admin/products/'.$image2.'">
													<div class="thumb-image"> <img src="admin/products/'.$image2.'" data-imagezoom="true" class="img-fluid" alt=" ">  </div>
												</li>
												<li data-thumb=" admin/products/'.$image3.'">
													<div class="thumb-image"> <img src="admin/products/'.$image3.'" data-imagezoom="true" class="img-fluid" alt=" ">  </div>
												</li>
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>
							</div>
								<div class="col-lg-8 single-right-left simpleCart_shelfItem">
								
								
								<div class="card">
									<div class="container">
										<p><strong>Product Name:</strong> '.$productname.'</p>
									</div>
								</div>
								<div class="card">
									<div class="container">
										<p>'.$aboutproduct1.'</p>
									</div>
								</div>
								<div class="card">
									<div class="container">
										<p> '.$aboutproduct2.'</p>
									</div>
								</div>
								<div class="card">
									<div class="container">
										<p>'.$aboutproduct3.'</p>
									</div>
								</div>
								

									
									
	<section>
	   <div class="header-bottom"><!--header-bottom-->
      <div class="container">
	<nav>
		<ul id="mainMenu">
		
		
		
	


				 <li><div class="status alert alert-success" style="display: none"></div>
					
						<div class="container">				
           
                        <form id="main-contact-form" action="https://imjo.in/QGxrCr" class="contact-form row" name="contact-form" >
                           
                            <div class="form-group col-md-20">
                              
								
                            </div>
							<div class="form-group col-md-24" id="t5">
								<p>Contact at this no for further dealing  :- '.$mobileno.'</p>
                            </div>
                        </form>
                    </div>
                </div></li>
				
				</div>
				</div>
				
				</ul>
				</nav>
	</div>
	</div>				
		</section>					
									

									
								</div>
								
								
								<!--/tabs-->
								<div class="clearfix"> </div>
									<div class="responsive_tabs">
									<div id="horizontalTab">
										<ul class="resp-tabs-list">
											<li>Description</li>
											<li>Specification</li>
											<li>About Brand</li>
										</ul>
										<div class="resp-tabs-container">
											<!--/tab_one-->
											<div class="tab1">
					
												<div class="single_page">
													
													<p>'.$descr.'</p>
													
												</div>
											</div>
											<!--//tab_one-->
											<div class="tab2">
					
												<div class="single_page">
													
													<p>'.$specification.'</p>
													
												</div>
											</div>
											<div class="tab3">
					
												<div class="single_page">
													
													<p>'.$specification.'</p>
													
												</div>
											</div>
										</div>
									</div>
								</div>';
								}
							$result->free();
						}
						?> 
								<!--//tabs-->
					
				<div class="testimonials p-lg-5 p-3 mt-4">
				<div><h2>What More</h2></div>
					<div class="row last-section">
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-gift"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Products</h3>
								<p>100% Original and quality assured products from leading <br> manufacturers/suppliers</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-dollar-sign"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Payment</h3>
								<p>Secured Online payments available</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-truck"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Delivery</h3>
								<p>Delivery of products will be within promised time <br>and as per your desired location</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-info"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Help Desk</h3>
								<p>24/7 help for our customers for any problem <br> call on:+919967857789</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //clients-sec -->
				 
			</div>
		</div>
		
	</div>
</section>
		<!--footer -->
<footer class="py-lg-5 py-3">
			<div class="container-fluid px-lg-5 px-3">
				<div class="row footer-top-w3layouts">
					<div class="col-lg-3 footer-grid-w3ls">
						<div class="footer-title">
							<h3>About Us</h3>
						</div>
						<div class="footer-text">
							<p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at
								tellus. Nulla porttitor accumsana tincidunt.</p>
							<ul class="footer-social text-left mt-lg-4 mt-3">

								<li class="mx-2">
									<a href="#">
										<span class="fab fa-facebook-f"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fab fa-twitter"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fab fa-google-plus-g"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fab fa-linkedin-in"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fas fa-rss"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fab fa-vk"></span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 footer-grid-w3ls">
						<div class="footer-title">
							<h3>Get in touch</h3>
						</div>
						<div class="contact-info">
							<h4>Location :</h4>
							<p>0926k 4th block building, king Avenue, New York City.</p>
							<div class="phone">
								<h4>Contact :</h4>
								<p>Phone : +121 098 8907 9987</p>
								<p>Email :
									<a href="mailto:info@example.com">info@example.com</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 footer-grid-w3ls">
						<div class="footer-title">
							<h3>Quick Links</h3>
						</div>
						<ul class="links">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="about.html">About</a>
							</li>
							<li>
								<a href="404.html">Error</a>
							</li>
							<li>
								<a href="shop.html">Shop</a>
							</li>
							<li>
								<a href="contact.html">Contact Us</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 footer-grid-w3ls">
						<div class="footer-title">
							<h3>Sign up for your offers</h3>
						</div>
						<div class="footer-text">
							<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
							<form action="#" method="post">
								<input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
								<button class="btn1">
									<i class="far fa-envelope" aria-hidden="true"></i>
								</button>
								<div class="clearfix"> </div>
							</form>
						</div>
					</div>
				</div>
				<div class="copyright-w3layouts mt-4">
					<p class="copy-right text-center ">&copy; 2018 Goggles. All Rights Reserved | Design by
						<a href="http://w3layouts.com/"> W3layouts </a>
					</p>
				</div>
			</div>
		</footer>
		<!-- //footer -->

		<!--jQuery-->
		<script src="product/js/jquery-2.2.3.min.js"></script>
		<!-- newsletter modal -->
		<!--search jQuery-->
		<script src="product/js/modernizr-2.6.2.min.js"></script>
		<script src="product/js/classie-search.js"></script>
		<script src="product/js/demo1-search.js"></script>
		<!--//search jQuery-->
		<!-- cart-js -->
		<script src="product/js/minicart.js"></script>
		<script>
			googles.render();

			googles.cart.on('googles_checkout', function (evt) {
				var items, len, i;

				if (this.subtotal() > 0) {
					items = this.items();

					for (i = 0, len = items.length; i < len; i++) {}
				}
			});
		</script>
		<!-- //cart-js -->
		<script>
			$(document).ready(function () {
				$(".button-log a").click(function () {
					$(".overlay-login").fadeToggle(200);
					$(this).toggleClass('btn-open').toggleClass('btn-close');
				});
			});
			$('.overlay-close1').on('click', function () {
				$(".overlay-login").fadeToggle(200);
				$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
				open = false;
			});
		</script>
		<!-- carousel -->
		<!-- price range (top products) -->
		<script src="product/js/jquery-ui.js"></script>
		<script>
			//<![CDATA[ 
			$(window).load(function () {
				$("#slider-range").slider({
					range: true,
					min: 0,
					max: 9000,
					values: [50, 6000],
					slide: function (event, ui) {
						$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
					}
				});
				$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

			}); //]]>
		</script>
		<!-- //price range (top products) -->

		<script src="product/js/owl.carousel.js"></script>
		<script>
			$(document).ready(function () {
				$('.owl-carousel').owlCarousel({
					loop: true,
					margin: 10,
					responsiveClass: true,
					responsive: {
						0: {
							items: 1,
							nav: true
						},
						600: {
							items: 2,
							nav: false
						},
						900: {
							items: 3,
							nav: false
						},
						1000: {
							items: 4,
							nav: true,
							loop: false,
							margin: 20
						}
					}
				})
			})
		</script>

		<!-- //end-smooth-scrolling -->

		<!-- single -->
		<script src="product/js/imagezoom.js"></script>
		<!-- single -->
		<!-- script for responsive tabs -->
		<script src="product/js/easy-responsive-tabs.js"></script>
		<script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function (event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>
		<!-- FlexSlider -->
		<script src="product/js/jquery.flexslider.js"></script>
		<script>
			// Can also be used with $(document).ready()
			$(window).load(function () {
				$('.flexslider1').flexslider({
					animation: "slide",
					controlNav: "thumbnails"
				});
			});
		</script>
		<!-- //FlexSlider-->

		<!-- dropdown nav -->
		<script>
			$(document).ready(function () {
				$(".dropdown").hover(
					function () {
						$('.dropdown-menu', this).stop(true, true).slideDown("fast");
						$(this).toggleClass('open');
					},
					function () {
						$('.dropdown-menu', this).stop(true, true).slideUp("fast");
						$(this).toggleClass('open');
					}
				);
			});
		</script>
		<!-- //dropdown nav -->
	<script src="product/js/move-top.js"></script>
    <script src="product/js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->


		<script src="product/js/bootstrap.js"></script>
		<!-- js file -->
		
		
		
		
		
		
		
</body>

</html>