<?php include 'header.php'; ?>

		<div id="breadcrumb" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Help Center</h3>
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Home</a></li>
							<li class="active">Help</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>How Can We Help You?</h2>
						
						<div class="row">
							<div class="col-md-6">
								<h4>Frequently Asked Questions</h4>
								
								<div class="panel-group" id="accordion">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
													How do I track my order?</a>
											</h4>
										</div>
										<div id="collapse1" class="panel-collapse collapse in">
											<div class="panel-body">
												You can track your order by clicking on "Track My Order" in your account dashboard. 
												Enter your order number and email address to see the current status of your delivery.
											</div>
										</div>
									</div>

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
													What is your return policy?</a>
											</h4>
										</div>
										<div id="collapse2" class="panel-collapse collapse">
											<div class="panel-body">
												We accept returns within 30 days of purchase. Items must be unused and in their original packaging.
												Please contact our customer service team to initiate a return.
											</div>
										</div>
									</div>

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
													How can I change my order?</a>
											</h4>
										</div>
										<div id="collapse3" class="panel-collapse collapse">
											<div class="panel-body">
												If you need to modify your order, please contact us immediately. We can only make changes if your order hasn't been shipped yet.
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<h4>Contact Support</h4>
								<p>Need additional help? Our support team is available to assist you:</p>
								
								<div class="contact-info">
									<p><i class="fa fa-phone"></i> Phone: <?php echo $contact['phone']; ?></p>
									<p><i class="fa fa-envelope"></i> Email: <?php echo $contact['email']; ?></p>
									<p><i class="fa fa-clock-o"></i> Hours: Monday - Friday, 9:00 AM - 5:00 PM</p>
								</div>

								<h4 class="mt-4">Quick Links</h4>
								<ul class="list-unstyled">
									<li><a href="terms.php">Terms & Conditions</a></li>
									<li><a href="privacy.php">Privacy Policy</a></li>
									<li><a href="#">Shipping Information</a></li>
									<li><a href="#">Payment Methods</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<style>
			.panel-group {
				margin-top: 20px;
			}
			.panel-title {
				font-size: 16px;
			}
			.contact-info {
				background: #f4f4f4;
				padding: 20px;
				border-radius: 5px;
				margin: 20px 0;
			}
			.contact-info p {
				margin-bottom: 10px;
			}
			.mt-4 {
				margin-top: 20px;
			}
		</style>

<?php include 'footer.php'; ?>