<?php
	include 'studio/assets/php/videoCtrl.php';
?>
	
	<!-- Start Videos -->
	<?php if(sizeof($posts_videos) > 0){?>
	<section class="section posts-entry posts-entry-sm bg-light">
		<div class="container">
			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">VIDEOS</h2>
				</div>
				
			</div>

			<div class="row">
				<?php 
				$posts_n3 = sizeof($posts_videos);
				if($posts_n3 > 3){
					$posts_n3 = 3;
				}
				for($i = 0; $i < $posts_n3; $i++){ 
				?>
				<div class="col-md-6 col-lg-4">
					<div class="blog-entry">
						<a href="?p=read-more" class="img-link">
							<iframe width="350" height="220" src="<?=$posts_videos[$i]->post_video?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
						</a>
						<span class="date"><?=$posts_videos[$i]->category_name?></span>
					</div>
				</div>
				<?php } ?>
				<!-- <div class="col-md-6 col-lg-4">
					<div class="blog-entry">
						<a href="?p=read-more" class="img-link">
							<iframe width="350" height="220" src="https://www.youtube.com/embed/8mNlA4-NQ68" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
						</a>
						<span class="date">Apr. 14th, 2022</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="blog-entry">
						<a href="?p=read-more" class="img-link">
							<iframe width="350" height="220" src="https://www.youtube.com/embed/Jsv0008YGsM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
						</a>
						<span class="date">Apr. 14th, 2022</span>
					</div>
				</div> -->
			</div>
		</div>
	</section>
	<?php } ?>
	<!-- End videos -->