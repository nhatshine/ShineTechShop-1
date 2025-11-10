<?php include 'header.php'; ?>

		<div id="breadcrumb" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Privacy Policy</h3>
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Home</a></li>
							<li class="active">Privacy Policy</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Privacy Policy</h2>
						<p>Last updated: <?php echo date('F d, Y'); ?></p>
						
						<h4>1. Information We Collect</h4>
						<p>At ShineTechShop, we collect information that you provide directly to us, including:</p>
						<ul>
							<li>Name and contact information</li>
							<li>Billing and shipping addresses</li>
							<li>Payment information</li>
							<li>Order history</li>
						</ul>

						<h4>2. How We Use Your Information</h4>
						<p>We use the information we collect to:</p>
						<ul>
							<li>Process your orders and payments</li>
							<li>Communicate with you about your orders</li>
							<li>Send you marketing communications (with your consent)</li>
							<li>Improve our services</li>
						</ul>

						<h4>3. Information Security</h4>
						<p>We implement appropriate security measures to protect your personal information. However, no method of transmission over the Internet is 100% secure.</p>

						<h4>4. Contact Us</h4>
						<p>If you have any questions about our Privacy Policy, please contact us at:</p>
						<p>Email: <?php echo $contact['email']; ?><br>
						Phone: <?php echo $contact['phone']; ?><br>
						Address: <?php echo $contact['address']; ?></p>
					</div>
				</div>
			</div>
		</div>

<?php include 'footer.php'; ?>