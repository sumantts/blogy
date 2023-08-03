<?php
	include 'studio/assets/php/artWorkCtrl.php';
?>
<section class="section">
		<div class="container">

			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Artwork</h2>
				</div>

				<?php if(sizeof($posts_aWork) > 3){?>
					<div class="col-sm-6 text-sm-end"><a href="?p=art-work" class="read-more">View All</a></div>
				<?php } ?>
			</div>

			<div class="row">
				<?php 
				$posts_n2 = sizeof($posts_aWork);
				if($posts_n2 > 3){
					$posts_n2 = 3;
				}
				for($i = 0; $i < $posts_n2; $i++){ 							
					if(strpos($posts_aWork[$i]->post_title, "A") == true || strpos($posts_aWork[$i]->post_title, "a") == true){
						$title_1 = substr($posts_aWork[$i]->post_title, 0, 80) . '...'; //English 100 
					}else{
						$title_2 = substr($posts_aWork[$i]->post_title, 0, 200);  //Bengali 300
						$title_1 = substr($title_2, 0, -2) . '...';
					}
				?>
				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt">
						<a href="?p=read-more" class="img-link"><img src="<?=$posts_aWork[$i]->post_image?>" alt="Image" class="img-fluid"></a>
						<div class="excerpt">
							<h2><a href="?p=read-more&pi=<?=$posts_aWork[$i]->post_id?>"><?=$posts_aWork[$i]->post_title?></a></h2>
							<p><?=$posts_aWork[$i]->post_description?></p>
							<p><a href="?p=read-more&pi=<?=$posts_aWork[$i]->post_id?>" class="read-more">View More</a></p>
						</div>
					</div>
				</div>
				<?php } ?>
				<!-- <div class="col-lg-4 mb-4">
					<div class="post-entry-alt">
						<a href="?p=read-more" class="img-link"><img src="images/art_work/art_work_2.jpg" alt="Image" class="img-fluid"></a>
						<div class="excerpt">
							

							<h2><a href="?p=read-more">Startup vs corporate: What job suits you best?</a></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
							<p><a href="?p=read-more" class="read-more">Continue Reading</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt">
						<a href="?p=read-more" class="img-link"><img src="images/art_work/art_work_3.jpg" alt="Image" class="img-fluid"></a>
						<div class="excerpt">
							

							<h2><a href="?p=read-more">Startup vs corporate: What job suits you best?</a></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
							<p><a href="?p=read-more" class="read-more">Continue Reading</a></p>
						</div>
					</div>
				</div> -->
				
			</div>
			
		</div>
	</section>