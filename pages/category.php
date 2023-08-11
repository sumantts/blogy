	<?php 
	include('common/header.php');
    include 'studio/assets/php/categoryCtrl.php';
	
	?>
	<!-- <body oncopy="return false;" oncut="return false;" onpaste="return false;" oncontextmenu="return false;"> -->
	<body>
	
	<!-- Navigation start -->
	<?php include('common/nav.php');?>
	<!-- Navigation end -->

    <div class="section search-result-wrap">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="heading">Category: <?=$title?></div>
				</div>
			</div>
			<div class="row posts-entry">
				<?php
				if(sizeof($categories_data) > 0){
				?>
				<div class="col-lg-8">
				<?php
				for($c = 0; $c < sizeof($categories_data); $c++){
				?>
					<div class="blog-entry d-flex blog-entry-search-item">
						<?php if($categories_data[$c]->post_image != ''){?>
							<a href="?p=read-more&pi=<?=$categories_data[$c]->post_id?>" class="img-link me-4">
								<img src="<?=$categories_data[$c]->post_image?>" alt="Image" class="img-fluid">
							</a>
						<?php } ?>
						<?php if($categories_data[$c]->post_video != ''){?>
							<iframe width="250" height="250" src="https://www.youtube.com/embed/<?=$categories_data[$c]->post_video?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
						<?php } ?>

						<div>
							<span class="date"><?=date('jS. F, Y', strtotime($categories_data[$c]->created_on))?> &bullet; <a href="#"><?=$title?></a></span>
							<h2><a href="?p=read-more&pi=<?=$categories_data[$c]->post_id?>"><?=$categories_data[$c]->post_title?></a></h2>
							<p><?=substr($categories_data[$c]->post_description, 0, 200)?></p>
							<!-- <div><?=substr($categories_data[$c]->post_description, 0, 100)?></div>
							<div class="text ellipsis">
								<span class="text-concat"><?=$categories_data[$c]->post_description?></span>
							</div> -->
							<p><a href="?p=read-more&pi=<?=$categories_data[$c]->post_id?>" class="btn btn-sm btn-outline-primary">Read More</a></p>
						</div>
					</div>
				<?php } ?>

					<!-- <div class="blog-entry d-flex blog-entry-search-item">
						<a href="?p=read-more" class="img-link me-4">
							<img src="images/img_2_sq.jpg" alt="Image" class="img-fluid">
						</a>
						<div>
							<span class="date">Apr. 14th, 2022 &bullet; <a href="#">Business</a></span>
							<h2><a href="?p=read-more">Thought you loved Python? Wait until you meet Rust</a></h2>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
							<p><a href="?p=read-more" class="btn btn-sm btn-outline-primary">Read More</a></p>
						</div>
					</div>

					<div class="blog-entry d-flex blog-entry-search-item">
						<a href="?p=read-more" class="img-link me-4">
							<img src="images/img_3_sq.jpg" alt="Image" class="img-fluid">
						</a>
						<div>
							<span class="date">Apr. 14th, 2022 &bullet; <a href="#">Business</a></span>
							<h2><a href="?p=read-more">Thought you loved Python? Wait until you meet Rust</a></h2>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
							<p><a href="?p=read-more" class="btn btn-sm btn-outline-primary">Read More</a></p>
						</div>
					</div>

					<div class="blog-entry d-flex blog-entry-search-item">
						<a href="?p=read-more" class="img-link me-4">
							<img src="images/img_4_sq.jpg" alt="Image" class="img-fluid">
						</a>
						<div>
							<span class="date">Apr. 14th, 2022 &bullet; <a href="#">Business</a></span>
							<h2><a href="?p=read-more">Thought you loved Python? Wait until you meet Rust</a></h2>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
							<p><a href="?p=read-more" class="btn btn-sm btn-outline-primary">Read More</a></p>
						</div>
					</div>

					<div class="blog-entry d-flex blog-entry-search-item">
						<a href="?p=read-more" class="img-link me-4">
							<img src="images/img_5_sq.jpg" alt="Image" class="img-fluid">
						</a>
						<div>
							<span class="date">Apr. 14th, 2022 &bullet; <a href="#">Business</a></span>
							<h2><a href="?p=read-more">Thought you loved Python? Wait until you meet Rust</a></h2>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas.</p>
							<p><a href="?p=read-more" class="btn btn-sm btn-outline-primary">Read More</a></p>
						</div>
					</div>

					<div class="row text-start pt-5 border-top">
						<div class="col-md-12">
							<div class="custom-pagination">
								<span>1</span>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<span>...</span>
								<a href="#">15</a>
							</div>
						</div>
					</div> -->

				</div>
				<?php }else{?>
					<div class="blog-entry d-flex blog-entry-search-item">
						<h2>Sorry! No Post Available</h2>						
					</div>
				<?php } ?>

				<div class="col-lg-4 sidebar">
					
					<!-- <div class="sidebar-box search-form-wrap mb-4">
						<form action="" class="sidebar-search-form">
							<span class="bi-search"></span>
							<input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
						</form>
					</div> -->
					<!-- END sidebar-box -->
					<?php
					if(sizeof($popu_posts) > 0){
					?>
					<div class="sidebar-box">
						<h3 class="heading">Popular Posts</h3>
						<div class="post-entry-sidebar">
							<ul>
							<?php
							for($p  = 0; $p < sizeof($popu_posts); $p++){
							?>
							<li>
								<a href="?p=read-more&pi=<?=$popu_posts[$p]->post_id?>">
									<?php if($popu_posts[$p]->post_image != ''){?>
									<img src="<?=$popu_posts[$p]->post_image?>" alt="Image placeholder" class="me-4 rounded">
									<?php } ?>
									<div class="text">
									<h4><?=$popu_posts[$p]->post_title?></h4>
									<div class="post-meta">
										<span class="mr-2"><?=date('jS. F, Y', strtotime($popu_posts[$p]->created_on))?></span>
									</div>
									</div>
								</a>
							</li>
							<?php } ?>
								<!-- <li>
									<a href="">
										<img src="images/img_2_sq.jpg" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
											<div class="post-meta">
												<span class="mr-2">March 15, 2018 </span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="">
										<img src="images/img_3_sq.jpg" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
											<div class="post-meta">
												<span class="mr-2">March 15, 2018 </span>
											</div>
										</div>
									</a>
								</li> -->
							</ul>
						</div>
					</div>
					<?php } ?>
					<!-- END sidebar-box -->

					<div class="sidebar-box">
						<h3 class="heading">Categories</h3>
						<ul class="categories">
						<?php
						if(sizeof($categories) > 0){
							for($k = 0; $k < sizeof($categories); $k++){
								if($categories[$k]->category_post_count > 0){
								?>
								<li><a href="?p=<?=$categories[$k]->category_slug?>"><?=$categories[$k]->category_name?> <span>(<?=$categories[$k]->category_post_count?>)</span></a></li>
						<?php } } }?>
							<!-- <li><a href="?p=art_work">Art Work <span>(22)</span></a></li>
							<li><a href="?p=photo_stories">Photo Stories <span>(37)</span></a></li>
							<li><a href="?p=adda">Adda <span>(42)</span></a></li>
							<li><a href="?p=satire">Satire <span>(14)</span></a></li>
							<li><a href="?p=op_ed">Op-Ed <span>(12)</span></a></li>
							<li><a href="?p=letters_to_the_editor">Letters to the Editor <span>(22)</span></a></li>
							<li><a href="?p=indept-reportage">Indept Reportage <span>(32)</span></a></li>
							<li><a href="?p=righting-the-wrong">Righting the Wrong <span>(12)</span></a></li>
							<li><a href="?p=public_culture">Public Culture <span>(22)</span></a></li>
							<li><a href="?p=public_history">Public History <span>(32)</span></a></li>
							<li><a href="?p=podcasts_sahityacharcha">Podcasts Sahityacharcha <span>(22)</span></a></li>
							<li><a href="?p=videos">Videos <span>(14)</span></a></li> -->
						</ul>
					</div>
					<!-- END sidebar-box -->
					<?php 
					if(sizeof($filtered_tags) > 0){
					?>
					<div class="sidebar-box">
						<h3 class="heading">Tags</h3>
						<ul class="tags">
							<?php 
							for($t = 0; $t < sizeof($filtered_tags); $t++){
							?>
							<li><a href="?p=<?=$filtered_tags[$t]->category_slug?>"><?=$filtered_tags[$t]->post_tag_n?></a></li>
							<?php } ?>
							<!-- <li><a href="#">Adventure</a></li>
							<li><a href="#">Food</a></li>
							<li><a href="#">Lifestyle</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Freelancing</a></li>
							<li><a href="#">Travel</a></li>
							<li><a href="#">Adventure</a></li>
							<li><a href="#">Food</a></li>
							<li><a href="#">Lifestyle</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Freelancing</a></li> -->
						</ul>
					</div>
                	<?php } ?>

				</div>
			</div>
		</div>
	</div>

	<!-- Footer Start -->
	<?php include('common/footer.php');?>
	<!-- Footer End -->