<?php
	include 'studio/assets/php/bannerCtrl.php';
?>
<div class="bd-example">
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
			<?php
			//echo json_encode($services);
          	for($l = 0; $l < sizeof($services); $l++){
			?>
			<div class="carousel-item <?php if($l == 0){?>active<?php } ?>">
				<img src="<?=$services[$l]->services_photo?>" class="d-block w-100" alt="slider 1" height="450">
				<div class="carousel-caption d-none d-md-block">
				<h5><?=$services[$l]->name?></h5>
				<p><?=$services[$l]->description?></p>
				</div>
			</div>
			<?php } ?>

			<!-- <div class="carousel-item">
				<img src="images/banner/banner_2.jpg" class="d-block w-100" alt="Slider 2" height="450">
				<div class="carousel-caption d-none d-md-block">
				<h5>Second slide label</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="images/banner/banner_3.jpg" class="d-block w-100" alt="Slider 3" height="450">
				<div class="carousel-caption d-none d-md-block">
				<h5>Third slide label</h5>
				<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
				</div>
			</div> -->
			</div>
			<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a>
		</div>
	</div>