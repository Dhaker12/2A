<?PHP
include "../core/feedC.php";
$feedC=new feedC();
$list=$feedC->afficherfeed();

//var_dump($listeEmployes->fetchAll());
?>
<html>
	<head>
		<title>CNCI - Centre National du Cinéma et de l’Image</title>
		<!-- Web Fonts  -->
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />

		<!-- Invoice Print Style -->
		<link rel="stylesheet" href="assets/stylesheets/invoice-print.css" />
	</head>
	<body>
		<div class="invoice">
			<header class="clearfix">
				<div class="row">
					<div class="col-sm-6 mt-md">
						
					</div>
					<div class="col-sm-6 text-right mt-md mb-md">
						
						<div class="ib">
							<img src="assets/images/feedback.png" alt="OKLER Themes" style="width:250px;height:100px;" />
						</div>
					</div>
				</div>
			</header>
			<div class="bill-info">
				<div class="row">
					<div class="col-md-6">
						<div class="bill-to">
							<p class="h5 mb-xs text-dark text-semibold"></p>
							<address>
							
							</address>

						</div>
                   <?PHP
											foreach($list as $row){
										?>
										<div class="col-md-12">
											<section class="panel-group mb-xlg">
											<div class="widget-twitter-profile">
											
												<div class="profile-info">
													<div class="profile-picture">
														<img src="assets/images/!happy-face.png" alt="">
													</div>
													<div class="profile-account">
														<h3 class="name text-semibold"><?PHP echo $row['nom']; ?></h3>
														<a href="#" class="account"><?PHP echo $row['mail']; ?></a>
														<input type="hidden" name="mail" value="<?PHP echo $row['mail']; ?>">
													</div>
													
												</div>
												<div class="profile-quote">
													<blockquote>
														<p>
															<?PHP echo $row['bio']; ?>
														</p>
													</blockquote>
													<div class="quote-footer">
													
												
													</div>
												</div>
											</div>
										</section>
										<p class="h5 mb-xs text-dark text-semibold"></p>
									</div>
									<?PHP
										}
										?>
					</div>

					
		</div>

		<script>
			window.print();
		</script>
	</body>
</html>