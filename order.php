<?php 
	require "./backend/database_connection.php";
	require "./backend/loginSession.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
	<title>Check Out</title>
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
			<form action="./backend/checkOut.php" method="POST" class="checkOutContainer">
					<div class="billingDetail">
                        <div class="billingDetailHeader">
                            <h2>Billing Details</h2>
                        </div>
						<div class="detail">
                            <div class="row">
                                <div class="name">
                                    <input type="text"  placeholder="First Name" name="firstName">
                                    <input type="text"  placeholder="Last Name" name="lastName">
                                </div>
                                <textarea name="address" row="20" cols="40" placeholder="Address"></textarea>
                                <input type="text"  placeholder="City" name="city">
                                <input type="number"  placeholder="Pincode" name="pincode">
                                <input type="text"  placeholder="State" name="state">
                                <input type="number"  placeholder="Phone Number" name="phoneNumber">
                                <input type="email" placeholder="Email" name="email">
                            </div>
						</div>
					</div>

					<div class="cartTotalAndPayment">
						<div class="row">
							<div class="cartTotal">
                                <div class="cartTotalHeading">
                                    <h2>Cart Total</h2>
                                </div>
                                <div class="cartDetail">
									<input name="totalPrice" type="hidden" value="<?php echo $_SESSION['totalPrice'] ?>">
                                    <span>₹ <?php echo $_SESSION['totalPrice'] ?></span>
                                </div>
                                
                            </div>
						    <div class="payment">
								<div class="paymentHeader">
									<h2>Payment Method</h2>
                                </div>   
                                <div class="paymentDetail">
                                    <label><input type="radio" name="paymentMethod" value="UPI"> UPI </label>
                                    <label><input type="radio" name="paymentMethod" value="COD"> Cash On Delivery</label>
                                </div>
							</div>
						</div>
					<div class="row">	
						<div class="paymentButton">
							<button type="submit" name="submit">Place Order</button>
						</div>
					</div>
				</div>
			</form>
		</div>

		<!--start footer-->
		<?php
		include('footer.php');
		?>
		<!--end footer-->
	</div>

	<!-- <div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div> -->
	
	<script src="./JS/order.js"></script>

	<!-- =============j-script=================== -->

    <script>
        const togglebtn = document.querySelector('.toggle_btn')
        const togglebtnicn = document.querySelector('.toggle_btn i')
        const dropdown = document.querySelector('#sidebar')

        togglebtn.onclick = function () {
            dropdown.classList.toggle('open')
            const isopen = dropdown.classList.contains('open')

            togglebtnicn.classList = isopen
                 ?'fa-solid fa-xmark'
                 :'fa-solid fa-bars' 
                
        }

        let searchbtn= document.querySelector('.searchbtn');
        let closebtn= document.querySelector('.closebtn');
        let searchbox= document.querySelector('.search_box');

        searchbtn.onclick=function(){
            searchbox.classList.add('active');
            closebtn.classList.add('active');
            searchbtn.classList.add('active');
        }
        closebtn.onclick=function(){
            searchbox.classList.remove('active');
            closebtn.classList.remove('active');
            searchbtn.classList.remove('active');
        }

        let sidesearchbtn=document.querySelector('.sidesearchbtn');
        let sideclosebtn=document.querySelector('.sideclosebtn');

        sidesearchbtn.onclick=function(){
            searchbox.classList.add('active');
            sideclosebtn.classList.add('active');
            sidesearchbtn.classList.add('active');
        }
        sideclosebtn.onclick=function(){
            searchbox.classList.remove('active');
            sideclosebtn.classList.remove('active');
            sidesearchbtn.classList.remove('active');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>



	</body>
</html>