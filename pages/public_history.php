<?php
	include 'studio/assets/php/pHistoryCtrl.php';
?>
<?php if(sizeof($posts_pHistory) > 0){?>
	<div class="section bg-light">
		<div class="container">

			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">PUBLIC HISTORY</h2>
				</div>
				<?php if(sizeof($posts_pHistory) > 4){?>
					<div class="col-sm-6 text-sm-end"><a href="?p=public_history" class="read-more">View All</a></div>
				<?php } ?>
			</div>

			<div class="row align-items-stretch retro-layout-alt">
				<?php if(sizeof($posts_pHistory) > 1){
					?>	
				<div class="col-md-5 order-md-2">
					<a href="?p=read-more&pi=<?=$posts_pHistory[0]->post_id?>" class="hentry img-1 h-100 gradient">
						<?php if($posts_pHistory[0]->post_image != ''){?>
							<div class="featured-img" style="background-image: url('<?=$posts_pHistory[0]->post_image?>');"></div>
						<?php } ?>
						<?php if($posts_pHistory[0]->post_video != ''){?>
							<div class="featured-img" >
								<iframe width="250" height="150" src="https://www.youtube.com/embed/<?=$posts_adda[0]->post_video?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
							</div>
						<?php } ?>
						<div class="text">
							<span><?=date('jS. F, Y', strtotime($posts_pHistory[0]->created_on))?></span>
							<h2><?=$posts_pHistory[0]->post_title?></h2>
						</div>
					</a>
				</div>
				<?php } ?>

				<!-- <div class="col-md-5 order-md-2">
					<a href="?p=read-more" class="hentry img-1 h-100 gradient">
						<div class="featured-img" style="background-image: url('images/img_2_vertical.jpg');"></div>
						<div class="text">
							<span>1. February 12, 2019</span>
							<h2>Meta unveils fees on metaverse sales</h2>
						</div>
					</a>
				</div> -->

				<div class="col-md-7">
					<?php if(sizeof($posts_pHistory) >= 2){?>
					<a href="?p=read-more&pi=<?=$posts_pHistory[1]->post_id?>" class="hentry img-2 v-height mb30 gradient">
						<?php if($posts_pHistory[1]->post_image != ''){?>
							<div class="featured-img" style="background-image: url('<?=$posts_pHistory[1]->post_image?>');"></div>
						<?php } ?>
						<?php if($posts_pHistory[1]->post_video != ''){?>
							<div class="featured-img" >
								<iframe width="620" height="300" src="https://www.youtube.com/embed/<?=$posts_pHistory[1]->post_video?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
							</div>
						<?php } ?>
						<div class="text text-sm">
							<span><?=date('jS. F, Y', strtotime($posts_pHistory[1]->created_on))?></span>
							<h2><?=$posts_pHistory[1]->post_title?></h2>
						</div>
					</a>
					<?php } ?>
					<!-- <a href="?p=read-more" class="hentry img-2 v-height mb30 gradient">
						<div class="featured-img" style="background-image: url('images/img_1_horizontal.jpg');"></div>
						<div class="text text-sm">
							<span>2. February 12, 2019</span>
							<h2>AI can now kill those annoying cookie pop-ups</h2>
						</div>
					</a> -->
					
					<div class="two-col d-block d-md-flex justify-content-between">						
						<?php if(sizeof($posts_pHistory) >= 3){?>
						<a href="?p=read-more&pi=<?=$posts_pHistory[2]->post_id?>" class="hentry v-height img-2 gradient">
						<?php if($posts_pHistory[2]->post_image != ''){?>
							<div class="featured-img" style="background-image: url('<?=$posts_pHistory[2]->post_image?>');"></div>
						<?php } ?>
						<?php if($posts_pHistory[2]->post_video != ''){
							//echo $posts_pHistory[3]->post_video;
							?>
							<div class="featured-img" >
								<iframe width="300" height="300" src="https://www.youtube.com/embed/<?=$posts_pHistory[2]->post_video?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
							</div>
							
						<?php } ?>
							<div class="text text-sm">
								<span><?=date('jS. F, Y', strtotime($posts_pHistory[2]->created_on))?></span>
								<h2><?=$posts_pHistory[2]->post_title?></h2>
							</div>
						</a>
						<?php } ?>					

						<?php if(sizeof($posts_pHistory) >= 4){?>
						<a href="?p=read-more&pi=<?=$posts_pHistory[3]->post_id?>" class="hentry v-height img-2 gradient">
						<?php if($posts_pHistory[3]->post_image != ''){?>
							<div class="featured-img" style="background-image: url('<?=$posts_pHistory[3]->post_image?>');"></div>
						<?php } ?>
						<?php if($posts_pHistory[3]->post_video != ''){?>
							<div class="featured-img" >
								<iframe width="300" height="300" src="https://www.youtube.com/embed/<?=$posts_pHistory[3]->post_video?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
							</div>
						<?php } ?>
							<div class="text text-sm">
								<span><?=date('jS. F, Y', strtotime($posts_pHistory[3]->created_on))?></span>
								<h2><?=$posts_pHistory[3]->post_title?></h2>
							</div>
						</a>
						<?php } ?>
						<!-- <a href="?p=read-more" class="hentry v-height img-2 gradient">
							<div class="featured-img" style="background-image: url('images/img_2_sq.jpg');"></div>
							<div class="text text-sm">
								<span>3. February 12, 2019</span>
								<h2>Don’t assume your user data in the cloud is safe</h2>
							</div>
						</a>
						<a href="?p=read-more" class="hentry v-height img-2 ms-auto float-end gradient">
							<div class="featured-img" style="background-image: url('images/img_3_sq.jpg');"></div>
							<div class="text text-sm">
								<span>4. February 12, 2019</span>
								<h2>Startup vs corporate: What job suits you best?</h2>
							</div>
						</a> -->
					</div>  

				</div>
			</div>

		</div>
	</div>
	<?php } ?>