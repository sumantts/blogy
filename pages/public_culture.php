	<?php
		include 'studio/assets/php/publicCultureCtrl.php';
	?>
	<!-- Start posts-entry -->
	<?php if(sizeof($posts_pCul) > 0){?>
	<section class="section posts-entry">
		<div class="container">
			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">PUBLIC CULTURE</h2>
				</div>
				
				<?php if(sizeof($posts_pCul) > 5){?>
				<div class="col-sm-6 text-sm-end"><a href="?p=public_culture" class="read-more">View All</a></div>
				<?php } ?>
				
			</div>
			<div class="row g-3">
				<div class="col-md-9 order-md-2">
					<div class="row g-3">
						<?php 
						$posts_n = sizeof($posts_pCul);
						if($posts_n > 2){
							$posts_n = 2;
						}
						for($i = 0; $i < $posts_n; $i++){ 							
							if(strpos($posts_pCul[$i]->post_title, "A") == true || strpos($posts_pCul[$i]->post_title, "a") == true){
								$title_1 = substr($posts_pCul[$i]->post_title, 0, 80) . '...'; //English 100 
							}else{
								$title_2 = substr($posts_pCul[$i]->post_title, 0, 200);  //Bengali 300
								$title_1 = substr($title_2, 0, -2) . '...';
							}
						?>

						<div class="col-md-6">
							<div class="blog-entry">
							<?php if($posts_pCul[$i]->post_image != ''){?>
								<a href="?p=read-more&pi=<?=$posts_pCul[$i]->post_id?>" class="img-link">
									<img src="<?=$posts_pCul[$i]->post_image?>" alt="Image" class="img-fluid">
								</a>
							<?php } ?>
							<?php if($posts_pCul[$i]->post_video != ''){?>
								<iframe width="250" height="150" src="<?=$posts_pCul[$i]->post_video?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
							<?php } ?>
							<span class="date"><?=date('jS. F, Y', strtotime($posts_pCul[$i]->created_on))?></span>
							<h2><a href="?p=read-more&pi=<?=$posts_pCul[$i]->post_id?>"><?=$title_1?></a></h2>
							<!-- <p> </p> -->
							<div class="text ellipsis">
							<span class="text-concat"><?=$posts_pCul[$i]->post_description?></span>
							</div>
							
							</div>
							<p><a href="?p=read-more&pi=<?=$posts_pCul[$i]->post_id?>" class="btn btn-sm btn-outline-primary">Read More</a></p>
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

				<?php if(sizeof($posts_pCul) > 2){?>
				<div class="col-md-3">
					<ul class="list-unstyled blog-entry-sm">
						<?php 
						$posts_n1 = sizeof($posts_pCul);
						if($posts_n1 > 5){
							$posts_n1 = 5;
						}
						for($i = 2; $i < $posts_n1; $i++){ 							
							if(strpos($posts_pCul[$i]->post_title, "A") == true || strpos($posts_pCul[$i]->post_title, "a") == true){
								$title_1 = substr($posts_pCul[$i]->post_title, 0, 40) . '...'; //English 100 
							}else{
								$title_2 = substr($posts_pCul[$i]->post_title, 0, 200);  //Bengali 300
								$title_1 = substr($title_2, 0, -2) . '...';
							}
						?>
						<li>
							
						<span class="date"><?=date('jS. F, Y', strtotime($posts_pCul[$i]->created_on))?></span>
						<h3><a href="?p=read-more&pi=<?=$posts_pCul[$i]->post_id?>"><?=$title_1?></a></h3>
						<!-- <p> <?=$posts_pCul[$i]->post_description?></p> -->
						<div class="text ellipsis">
						<span class="text-concat"><?=$posts_pCul[$i]->post_description?></span>
						</div>
						<p><a href="?p=read-more&pi=<?=$posts_pCul[$i]->post_id?>" class="read-more">Continue Reading</a></p>
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
<?php } ?>