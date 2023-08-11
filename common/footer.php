<?php 
    include 'studio/assets/php/footerCtrl.php';
?>

<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h3 class="mb-4">About</h3>
						<p><?=$about_us?></p>
					</div> <!-- /.widget -->
					<div class="widget">
						<h3>Social</h3>
						<ul class="list-unstyled social">
							
						<?php if($socials["instagram"] != ''){?>
							<li><a href="<?=$socials["instagram"]?>" target="_blank"><span class="icon-instagram"></span></a></li>
						<?php }?>
						<?php if($socials["twitter"] != ''){?>
							<li><a href="<?=$socials["twitter"]?>" target="_blank"><span class="icon-twitter"></span></a></li>
						<?php }?>
						<?php if($socials["facebook"] != ''){?>
							<li><a href="<?=$socials["facebook"]?>" target="_blank"><span class="icon-facebook"></span></a></li>
						<?php }?>
						<?php if($socials["linkedin"] != ''){?>
							<li><a href="<?=$socials["linkedin"]?>" target="_blank"><span class="icon-linkedin"></span></a></li>
						<?php }?>
						<?php if($socials["pinterest"] != ''){?>
							<li><a href="<?=$socials["pinterest"]?>" target="_blank"><span class="icon-pinterest"></span></a></li>
						<?php }?>
						<?php if($socials["dribbble"] != ''){?>
							<li><a href="<?=$socials["dribbble"]?>" target="_blank"><span class="icon-dribbble"></span></a></li>
						<?php }?>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4 ps-lg-5">
					<div class="widget">
						<h3 class="mb-4">Company</h3>
						<ul class="list-unstyled float-start links">
							<li><a href="?p=art_work">Art Work</a></li>
							<li><a href="?p=cinemania">Cinemania</a></li>
							<li><a href="?p=photo_stories">Photo Stories</a></li>
							<li><a href="?p=public_history">Public History</a></li>
						</ul>
						<ul class="list-unstyled float-start links">
							<li><a href="?p=adda">Adda</a></li>
							<li><a href="?p=satire">Satire</a></li>
							<li><a href="?p=op_ed">Op-Ed</a></li>
							<li><a href="?p=public_culture">Public Culture</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<div class="widget">
						<h3 class="mb-4">Recent Post Entry</h3>
						<div class="post-entry-footer">
							<ul>
								<?php if(sizeof($recent_posts) > 0){
									for($f = 0; $f < sizeof($recent_posts); $f++){?>
								<li>
									<a href="?p=read-more&pi=<?=$recent_posts[$f]->post_id?>">
										<?php if($recent_posts[$f]->post_image != ''){?>
										<img src="<?=$recent_posts[$f]->post_image?>" alt="Image placeholder" class="me-4 rounded">
										<?php } ?>
										<div class="text">
											<h4><?=substr($recent_posts[$f]->post_title, 0, 100) . '...'?></h4>
											<div class="post-meta">
												<span class="mr-2"><?=date('jS. F, Y', strtotime($recent_posts[$f]->created_on))?></span>
											</div>
										</div>
									</a>
								</li>
								<?php } } ?>								
							</ul>
						</div>


					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
			</div> <!-- /.row -->

			<div class="row">
				<div class="col-12 text-center">
          <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here #/license/  
              **==========
            -->

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved.</p>
          </div>
        </div>
      </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border text-primary" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>

    <script src="js/flatpickr.min.js"></script>


    <script src="js/aos.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- <script>
		document.addEventListener('contextmenu', event => event.preventDefault());		
	</script> -->
	<script>
		// disable right click
		/*document.addEventListener('contextmenu', event => event.preventDefault());
	
		document.onkeydown = function (e) {
	
			// disable F12 key
			if(e.keyCode == 123) {
				return false;
			}
	
			// disable I key
			if(e.ctrlKey && e.shiftKey && e.keyCode == 73){
				return false;
			}
	
			// disable J key
			if(e.ctrlKey && e.shiftKey && e.keyCode == 74) {
				return false;
			}
	
			// disable S key
			if(e.ctrlKey && e.keyCode == 83) {
				return false;
			}
	
			// disable U key
			if(e.ctrlKey && e.keyCode == 85) {
				return false;
			}
	
			// disable Print Screen key
			if(e.keyCode == 44) {
				alert('print')
				return false;
			}
		}*/
	
	</script>

	<!-- <script language="javascript">
		var noPrint=true;
		var noCopy=true;
		var noScreenshot=true;
		var autoBlur=true;
	</script>
	
	<script type="text/javascript" src="https://pdfanticopy.com/noprint.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="js/function.js"></script>

  </body>
  </html>