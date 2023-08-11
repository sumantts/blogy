	<?php
		include 'studio/assets/php/addaCtrl.php';
	?>
		<!-- Start posts_adda-entry -->
	<?php if(sizeof($posts_adda) > 0){?>
	<section class="section posts-entry posts-entry-sm bg-light">
		<div class="container">
			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Adda</h2>
				</div>
				<?php if(sizeof($posts_adda) > 4){?>
				<div class="col-sm-6 text-sm-end"><a href="?p=adda" class="read-more">View All</a></div>
				<?php } ?>
			</div>

			<div class="row">
				<?php 
				$posts_n = sizeof($posts_adda);
				if($posts_n > 4){
					$posts_n = 4;
				}
				for($i = 0; $i < $posts_n; $i++){ 							
					if(strpos($posts_adda[$i]->post_title, "A") == true || strpos($posts_adda[$i]->post_title, "a") == true){
						$title_1 = substr($posts_adda[$i]->post_title, 0, 40) . '...'; //English 100 
					}else{
						$title_2 = substr($posts_adda[$i]->post_title, 0, 180);  //Bengali 300
						$title_1 = substr($title_2, 0, -2) . '...';
					}
				?>
				<div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<?php if($posts_adda[$i]->post_image != ''){?>
							<a href="?p=read-more&pi=<?=$posts_adda[$i]->post_id?>" class="img-link">
								<img src="<?=$posts_adda[$i]->post_image?>" alt="Image" class="img-fluid">
							</a>
						<?php } ?>
						<?php if($posts_adda[$i]->post_video != ''){?>
							<iframe width="250" height="150" src="https://www.youtube.com/embed/<?=$posts_adda[$i]->post_video?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
						<?php } ?>
						<span class="date"><?=date('jS. F, Y', strtotime($posts_adda[$i]->created_on))?></span>
						<h2><a href="?p=read-more&pi=<?=$posts_adda[$i]->post_id?>"><?=$title_1?></a></h2>

						<!-- <p> </p> -->
						<div class="text ellipsis">
						<span class="text-concat"><?=$posts_adda[$i]->post_description?></span>
						</div>
					</div>
						<p><a href="?p=read-more&pi=<?=$posts_adda[$i]->post_id?>" class="btn btn-sm btn-outline-primary">Read More</a></p>
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
				</div>
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
				<div class="col-md-6 col-lg-3">
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
	<?php } ?>
	<!-- End posts_adda-entry -->