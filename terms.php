<?php include 'header.php'; ?>

		<div id="breadcrumb" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Terms & Conditions</h3>
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Home</a></li>
							<li class="active">Terms & Conditions</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Terms and Conditions</h2>
						<p>Last updated: <?php echo date('F d, Y'); ?></p>
						
						<h4>1. Acceptance of Terms</h4>
						<p>By accessing and using ShineTechShop, you accept and agree to be bound by the terms and provision of this agreement.</p>

						<h4>2. Order Acceptance and Pricing</h4>
						<p>All prices are subject to change without notice. We reserve the right to refuse or cancel any orders placed for products listed at incorrect prices.</p>

						<h4>3. Shipping & Delivery</h4>
						<p>We strive to deliver products purchased from us as soon as possible. We process all orders in the order they are placed.</p>

						<h4>4. Return Policy</h4>
						<p>Our return policy lasts 30 days. If 30 days have passed since your purchase, we cannot offer you a refund or exchange.</p>

						<h4>5. Product Warranty</h4>
						<p>All products sold on ShineTechShop come with a standard manufacturer's warranty. Extended warranty options may be available for certain products.</p>

						<h4>6. Contact Information</h4>
						<p>If you have any questions about our Terms & Conditions, please contact us at:</p>
						<p>Email: <?php echo $contact['email']; ?><br>
						Phone: <?php echo $contact['phone']; ?><br>
						Address: <?php echo $contact['address']; ?></p>
					</div>
				</div>
			</div>
		</div>

<?php include 'footer.php'; ?>