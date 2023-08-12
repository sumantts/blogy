<?php 
include('common/header.php');
include 'studio/assets/php/authorsCtrl.php';

?>
	<!-- <body oncopy="return false;" oncut="return false;" onpaste="return false;" oncontextmenu="return false;"> -->
	<body>
	
	<!-- Navigation start -->
	<?php include('common/nav.php');?>
	<!-- Navigation end -->

    <div class="section">
		<div class="container">
			
			<div class="row mb-5">
				<div class="col-lg-5 mx-auto text-center" data-aos="fade-up">
					<h2 class="heading text-primary"><?=$title?></h2>
					<p><?=$author_text?></p>
				</div>
			</div>

			<div class="row">
				<?php
				if(sizeof($authors) > 0){
					for($i = 0; $i < sizeof($authors); $i++){
						
						
				?>
				<div class="col-lg-4 mb-4 text-center" data-aos="fade-up" data-aos-delay="0">
					<?php if($authors[$i]->author_photo != ''){?>
						<img src="<?=$authors[$i]->author_photo?>" alt="<?=$authors[$i]->author_name?>" class="img-fluid w-50 rounded-circle mb-3">
					<?php }else{?>
						<img src="images/no_images.png" alt="<?=$authors[$i]->author_name?>" class="img-fluid w-50 rounded-circle mb-3">
					<?php } ?>
					<h5 class="text-black"><?=$authors[$i]->author_name?></h5>
					<div class="text ellipsis">
						<span class="text-concat"><?=$authors[$i]->author_bio?></span>
					</div>
					<p>
						<a href="?p=my-bio&id=<?=$authors[$i]->author_id?>" class="btn btn-primary btn-sm rounded px-2 py-2">Read my bio</a>
					</p>
				</div>
				<?php }
				} ?>
			</div>

		</div>
	</div>

	<!-- Footer Start -->
	<?php include('common/footer.php');?>
	<!-- Footer End -->