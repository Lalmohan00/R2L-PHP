<?php include 'Navbar.php'; ?>
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta2-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="index.php">Home</a></li>
							<li>Contact</li>
						</ul>
						<h1 class="white-text">Get In Touch</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Contact -->
		<div id="contact" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- contact form -->
					<div class="col-md-6">
						<div class="contact-form">
							<h4>Send A Message</h4>
							<form action="cont.php" method="post" role="form">
								<input class="input" type="text" name="name" placeholder="Name" required>  
								<input class="input" type="email" name="email" placeholder="Email" required>
								<input class="input" type="text" name="subject" placeholder="Subject" required>
								<textarea class="input" name="message" placeholder="Enter your Message" required></textarea>
								<button onclick="Swal.fire('Good job!','You clicked the button!','success');" class="main-button icon-button pull-right" >Send Message</button>
								
							</form>
						</div>
					</div>
					<!-- /contact form -->

					<!-- contact information -->
					<div class="col-md-5 col-md-offset-1">
						<h4>Contact Information</h4>
						<ul class="contact-details">
							<li><i class="fa fa-envelope"></i>engineergyan07@gmail.com</li>
							<li><i class="fa fa-phone"></i>+91 7091102502</li>
							<li><i class="fa fa-map-marker"></i>Jamshedpur, Jharkhand</li>
						</ul>

						<!-- contact map -->
						<div id="contact-map"></div>
						<!-- /contact map -->

					</div>
					<!-- contact information -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact -->
<?php include 'Footer.php'; ?>