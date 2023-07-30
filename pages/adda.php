	<!-- Start posts-entry -->
	<section class="section posts-entry posts-entry-sm bg-light">
		<div class="container">
			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Adda</h2>
				</div>
				<div class="col-sm-6 text-sm-end"><a href="?p=adda" class="read-more">View All</a></div>
			</div>

			<div class="row">
                <?php
                //echo json_encode($services);
                for($l = 0; $l < 2; $l++){
                ?>
				<div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="?p=read-more" class="img-link">
							<img src="<?=$services[$l]->services_photo?>" alt="Image" class="img-fluid" >
						</a>
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="?p=read-more">Thought you loved Python? Wait until you meet Rust</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="?p=read-more" class="read-more">Continue Reading</a></p>
					</div>
				</div>
			    <?php } ?>

				<!-- <div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="?p=read-more" class="img-link">
							<img src="images/adda/adda_2.png" alt="Image" class="img-fluid" >
						</a>
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="?p=read-more">Startup vs corporate: What job suits you best?</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="?p=read-more" class="read-more">Continue Reading</a></p>
					</div>
				</div>-->
				<div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="?p=read-more" class="img-link">
							<img src="images/img_3_horizontal.jpg" alt="Image" class="img-fluid" >
						</a>
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="?p=read-more">UK sees highest inflation in 30 years</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="?p=read-more" class="read-more">Continue Reading</a></p>
					</div>
				</div>
				<!--<div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="?p=read-more" class="img-link">
							<img src="images/img_4_horizontal.jpg" alt="Image" class="img-fluid" >
						</a>
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="?p=read-more">Don’t assume your user data in the cloud is safe</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="?p=read-more" class="read-more">Continue Reading</a></p>
					</div>
				</div> -->
			</div>
		</div>
	</section>
	<!-- End posts-entry -->