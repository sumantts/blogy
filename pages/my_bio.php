<?php 
include('common/header.php');
include 'studio/assets/php/myBioCtrl.php';
?>
	<!-- <body oncopy="return false;" oncut="return false;" onpaste="return false;" oncontextmenu="return false;"> -->
	<body>
	
	<!-- Navigation start -->
	<?php include('common/nav.php');?>
	<!-- Navigation end -->

    <div class="section">
		<div class="container">
			
			<div class="row mb-5">
				<div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
					<img src="<?=$author_photo?>" alt="Image" class="img-fluid w-10 rounded-circle mb-3">
					<h2 class="heading text-primary"><?=$author_name?></h2>
					<p><?=$author_bio?></p>
				</div>
			</div>

		</div>
	</div>

	<!-- Footer Start -->
	<?php include('common/footer.php');?>
	<!-- Footer End -->