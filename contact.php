<?php include 'header.php';?>


        <div class="page-header-pic" data-parallax="scroll" data-image-src="assets/images/contact.jpg">
        	<h1 class="lead">Contact</h1>
        </div>

	<div class="container">
		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Say Hello</h1>
				</header>
				<p>
					We’d love to hear from you. Interested in working together? Fill out the form below with some info and we'll get back to you. Ask us about our services, recruiting, or anything in general.
				</p>
				<br>
					<form action="mail.php" method="POST">
						<div class="row">
							<div class="col-sm-6">
								<input class="form-control" type="text" placeholder="Name" name="name">
							</div>
							<div class="col-sm-6">
								<input class="form-control" type="text" placeholder="Email" name="email">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<textarea placeholder="Type your message here..." class="form-control" rows="9" name="message"></textarea>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12 text-right">
								<input class="btn btn-primary" type="submit" value="Send">
							</div>
						</div>
					</form>

			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<p>
						General Inquires: <a href="mailto:info.voyagerconsulting@gmail.com" target="_blank"><br>info.voyagerconsulting@gmail.com</a><br><br>
						Recruiting: <a href="mailto:recruit.voyagerconsulting@gmail.com" target="_blank"><br>recruit.voyagerconsulting@gmail.com</a><br><br>
						Business Inquires: <a href="mailto:business.voyagerconsulting@gmail.com" target="_blank"><br>business.voyagerconsulting@gmail.com</a><br><br>
					</p>	
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->

<?php include 'footer.php';?>