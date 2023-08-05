	<?php
		include 'studio/assets/php/cinemaniaCtrl.php';
	?>

	<!-- Start posts-entry -->
	<section class="section posts-entry">
		<div class="container">
			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Cinemania</h2>
				</div>
				<?php if(sizeof($posts) > 5){?>
					<div class="col-sm-6 text-sm-end"><a href="?p=cinemania" class="read-more">View All</a></div>
				<?php } ?>

			</div>
			<div class="row g-3">
				<div class="col-md-9">
					<div class="row g-3">
						<?php 
							for($i = 0; $i < 2; $i++){ 							
								if(strpos($posts[$i]->post_title, "A") == true){
									$title_1 = substr($posts[$i]->post_title, 0, 40) . '...'; //English 100 //Bengali 300
								}else{
									$title_2 = substr($posts[$i]->post_title, 0, 180); //English 100 //Bengali 300
									$title_1 = substr($title_2, 0, -2) . '...';
								}
							?>
						<div class="col-md-6">
							<div class="blog-entry">
								<?php if($posts[$i]->post_image != ''){?>
									<a href="?p=read-more&pi=<?=$posts[$i]->post_id?>" class="img-link">
										<img src="<?=$posts[$i]->post_image?>" alt="Image" class="img-fluid">
									</a>
								<?php } ?>
								<?php if($posts[$i]->post_video != ''){?>
									<iframe width="370" height="215" src="<?=$posts[$i]->post_video?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
								<?php } ?>
								<span class="date"><?=date('jS. F, Y', strtotime($posts[$i]->created_on))?></span>
								<h2><a href="?p=read-more&pi=<?=$posts[$i]->post_id?>"><?=$title_1?></a></h2>
								<!-- <p> </p> -->
								<div class="text ellipsis">
								<span class="text-concat"><?=$posts[$i]->post_description?></span>
								</div>
							</div>
							<p><a href="?p=read-more&pi=<?=$posts[$i]->post_id?>" class="btn btn-sm btn-outline-primary">Read More</a></p>
						</div>
						<?php } ?>
						<!-- <div class="col-md-6">
							<div class="blog-entry">
								<a href="?p=read-more" class="img-link">
									<img src="images/img_2_sq.jpg" alt="Image" class="img-fluid">
								</a>
								<span class="date">Apr. 14th, 2022</span>
								<h2><a href="?p=read-more">Startup vs corporate: What job suits you best?</a></h2>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
								<p><a href="?p=read-more" class="btn btn-sm btn-outline-primary">Read More</a></p>
							</div>
						</div> -->
					</div>
				</div>
				<?php if(sizeof($posts) > 2){?>
				<div class="col-md-3">
					<ul class="list-unstyled blog-entry-sm">
						<?php 
						for($j = 2; $j < 5; $j++){ 
							if(strpos($posts[$j]->post_title, "A") == true){
								$title1 = substr($posts[$j]->post_title, 0, 40) . '...'; //English 100 //Bengali 300
							}else{
								$title2 = substr($posts[$j]->post_title, 0, 40); //English 100 //Bengali 300
								$title1 = substr($title2, 0, -2) . '...';
							}

							if(strpos($posts[$j]->post_description, "A") == true){
								$post_description1 = substr($posts[$j]->post_description, 0, 60) . '...'; //English 100 //Bengali 300
							}else{
								$post_description2 = substr($posts[$j]->post_description, 0, 80); //English 100 //Bengali 300
								$post_description1 = substr($post_description2, 0, -2) . '...';
							}
						?>
							<li>
								<span class="date"><?=date('jS. F, Y', strtotime($posts[$j]->created_on))?></span>
								<h3><a href="?p=read-more&pi=<?=$posts[$j]->post_id?>"><?=$title1?></a></h3>
								
								<div class="text ellipsis">
									<span class="text-concat"><?=$posts[$j]->post_description?></span>
								</div>
								<p><a href="?p=read-more&pi=<?=$posts[$j]->post_id?>" class="read-more">Continue Reading</a></p>
							</li>
						<?php } ?>

						<!-- <li>
							<span class="date">Apr. 14th, 2022</span>
							<h3><a href="?p=read-more">Meta unveils fees on metaverse sales</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
							<p><a href="?p=read-more" class="read-more">Continue Reading</a></p>
						</li>

						<li>
							<span class="date">Apr. 14th, 2022</span>
							<h3><a href="?p=read-more">UK sees highest inflation in 30 years</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
							<p><a href="?p=read-more" class="read-more">Continue Reading</a></p>
						</li> -->
					</ul>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<!-- End posts-entry -->