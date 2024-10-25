<!DOCTYPE HTML>
<html>
	<head>
	<title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
	
    <link rel="stylesheet" href="./CSS/order.css">

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<!--start header-->
		<?php
		include('header.php');
		?>
		<!--end header-->



		<div class="checkOut">
			<div class="checkOutContainer">
					<div class="billingDetail">
                        <div class="billingDetailHeader">
                            <h2>Billing Details</h2>
                        </div>
						<form method="post" class="colorlib-form">
                            <div class="row">
                                <div class="name">
                                    <input type="text"  placeholder="First Name">
                                    <input type="text"  placeholder="Last Name">
                                </div>
                                <textarea name="" id="" row="20" cols="40" placeholder="Address"></textarea>
                                <input type="text"  placeholder="City">
                                <input type="text"  placeholder="State">
                                <input type="text"  placeholder="Pincode">
                                <input type="text"  placeholder="Phone Number">
                                <input type="text" placeholder="Email">
                            </div>
		             </form>
					</div>

					<div class="cartTotalAndPayment">
						<div class="row">
							<div class="cartTotal">
                                <div class="cartTotalHeading">
                                    <h2>Cart Total</h2>
                                </div>
                                <div class="cartDetail">
                                    <span>1 x Product Name = ₹1,000</span>
                                    <span>2 x Product Name = ₹1,000</span>
                                    <span>Shipping =  ₹0</span>
                                    <span>Total = ₹2,000</span>
                                </div>
                                
                            </div>


						    <div class="payment">
								<div class="paymentHeader">
									<h2>Payment Method</h2>
                                </div>   
                                <div class="paymentDetail">
									<label><input type="radio" name="optradio"> Direct Bank Tranfer</label>
                                    
                                    <label><input type="radio" name="optradio"> UPI </label>
                                    <label><input type="radio" name="optradio"> Cash On Delivery</label>
                                </div>
							</div>
						</div>
						<div class="row">
							<div class="paymentButton">
								<button>Place Order</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--start footer-->
		<?php
		include('footer.php');
		?>
		<!--end footer-->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
   <!-- popper -->
   <script src="js/popper.min.js"></script>
   <!-- bootstrap 4.1 -->
   <script src="js/bootstrap.min.js"></script>
   <!-- jQuery easing -->
   <script src="js/jquery.easing.1.3.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>