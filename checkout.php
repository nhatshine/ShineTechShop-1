<?php include 'header.php'; ?>

		<div id="breadcrumb" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Checkout</li>
						</ul>
					</div>
				</div>
				</div>
			</div>
		<div class="section">
			<div class="container">
				<div class="row">

					<div class="col-md-7">
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Billing address</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="First Name">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" placeholder="Last Name">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Address">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="City">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Country">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" placeholder="ZIP Code">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Telephone">
							</div>
							<div class="form-group">
								<div class="input-checkbox">
									<input type="checkbox" id="create-account">
									<label for="create-account">
										<span></span>
										Create Account?
									</label>
									<div class="caption">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
										<input class="input" type="password" name="password" placeholder="Enter Your Password">
									</div>
								</div>
							</div>
						</div>
						<div class="shiping-details">
							<div class="section-title">
								<h3 class="title">Shiping address</h3>
							</div>
							<div class="input-checkbox">
								<input type="checkbox" id="shiping-address">
								<label for="shiping-address">
									<span></span>
									Ship to a diffrent address?
								</label>
								<div class="caption">
									<div class="form-group">
										<input class="input" type="text" name="first-name" placeholder="First Name">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="last-name" placeholder="Last Name">
									</div>
									<div class="form-group">
										<input class="input" type="email" name="email" placeholder="Email">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="address" placeholder="Address">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="city" placeholder="City">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="country" placeholder="Country">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="zip-code" placeholder="ZIP Code">
									</div>
									<div class="form-group">
										<input class="input" type="tel" name="tel" placeholder="Telephone">
									</div>
								</div>
							</div>
						</div>
						<div class="order-notes">
							<textarea class="input" placeholder="Order Notes"></textarea>
						</div>
						</div>

					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCT</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<div class="order-products">
									<div class="order-col">
										<div style="display:flex;align-items:center;">
											<img src="./img/macpro.jpg" alt="" style="width:60px;height:auto;margin-right:10px;border:1px solid #eee;padding:2px;">
											<div>1x MacBook Pro M4</div>
										</div>
										<div>$1299.00</div>
									</div>
									<div class="order-col">
										<div style="display:flex;align-items:center;">
											<img src="./img/razer.jpg" alt="" style="width:60px;height:auto;margin-right:10px;border:1px solid #eee;padding:2px;">
											<div>2x Razer Nari - Wireless</div>
										</div>
										<div>$260.00</div>
									</div>
							</div>
							<div class="order-col">
								<div>Shiping</div>
								<div><strong>FREE</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">$2940.00</strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Cash on delivery
								</label>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2">
								<label for="payment-2">
									<span></span>
									Card Payment
								</label>
								<div class="caption card-form">
									<form>
										<div class="form-group">
											<label for="card-name">Name on Card</label>
											<input class="input" type="text" id="card-name" placeholder="Name on Card">
										</div>
										<div class="form-group">
											<label for="card-number">Card Number</label>
											<input class="input" type="text" id="card-number" placeholder="Card Number">
										</div>
										<div class="form-group">
											<label for="card-expiry">Expiry Date</label>
											<input class="input" type="text" id="card-expiry" placeholder="MM / YY">
										</div>
										<div class="form-group">
											<label for="card-cvc">CVC</label>
											<input class="input" type="text" id="card-cvc" placeholder="CVC">
										</div>
									</form>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3">
								<label for="payment-3">
									<span></span>
									Paypal 
								</label>
								<div class="caption paypal-form">
									<form>
										<p>Paypal is easiest way to pay online</p>
										<button class="primary-btn"><i class="fa fa-paypal"></i> Log into my Paypal</button>
									</form>
								</div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								I've read and accept the <a href="#">terms & conditions</a>
							</label>
						</div>
						<a href="#" class="primary-btn order-submit">Place order</a>
					</div>
					</div>
				</div>
			</div>
		<?php include 'footer.php'; ?>