
<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-2">
							<a href="?p=home" class="logo m-0 float-start">
								<img src="images/golocal_logo.png" style="width: 100%;">
							</a>
						</div>
						<div class="col-8 text-center">
							<!-- <form action="#" class="search-form d-inline-block d-lg-none">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="bi-search"></span>
							</form> -->

							<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
								<li <?php if($p == 'home'){?>  class="active" <?php } ?>><a href="?p=home">Home</a></li>

								<li class="has-children <?php if($p == 'articulture' || $p == 'art-work' || $p == 'photo_stories'){?> active <?php } ?>">
									<a href="javascript: void(0)">Artify</a>
									<ul class="dropdown">
										<li><a href="?p=articulture">Articulture</a></li>
										<li><a href="?p=art-work">Art Work</a></li>
										<li><a href="?p=photo_stories">Photo Stories</a></li>
									</ul>
								</li>
								<!-- <li class="has-children">
									<a href="category.html">Pages</a>
									<ul class="dropdown">
										<li><a href="search-result.html">Search Result</a></li>
										<li><a href="blog.html">Blog</a></li>
										<li><a href="single.html">Blog Single</a></li>
										<li><a href="category.html">Category</a></li>
										<li><a href="about.html">About</a></li>
										<li><a href="contact.html">Contact Us</a></li>
										<li><a href="#">Menu One</a></li>
										<li><a href="#">Menu Two</a></li>
										<li class="has-children">
											<a href="#">Dropdown</a>
											<ul class="dropdown">
												<li><a href="#">Sub Menu One</a></li>
												<li><a href="#">Sub Menu Two</a></li>
												<li><a href="#">Sub Menu Three</a></li>
											</ul>
										</li>
									</ul>
								</li> -->
								<li <?php if($p == 'cinemania'){?>  class="active" <?php } ?>><a href="?p=cinemania">Cinemania</a></li>
								<li class="has-children <?php if($p == 'adda' || $p == 'satire' || $p == 'op_ed' || $p == 'letters-to-the-editor' || $p == 'indept-reportage' || $p == 'righting-the-wrong'){?> active <?php } ?>">
									<a href="javascript: void(0)">Polity Adda</a>
									<ul class="dropdown">
										<li><a href="?p=adda">Adda</a></li>
										<li><a href="?p=satire">Satire</a></li>
										<li><a href="?p=op_ed">Op-Ed</a></li>
										<li><a href="?p=letters-to-the-editor">Letters to the Editor</a></li>
										<li><a href="?p=indept-reportage">Indept Reportage</a></li>
										<li><a href="?p=righting-the-wrong">Righting the Wrong</a></li>
									</ul>
								</li>
								<li <?php if($p == 'public_culture'){?>  class="active" <?php } ?>><a href="?p=public_culture">Public Culture</a></li>
								<li <?php if($p == 'public-history'){?>  class="active" <?php } ?>><a href="?p=public-history">Public History</a></li>
								<li class="has-children <?php if($p == 'podcasts-sahityacharcha'){?> active <?php } ?>">
									<a href="javascript: void(0)">Tell Tale</a>
									<ul class="dropdown">
										<li><a href="?p=podcasts-sahityacharcha">Podcasts Sahityacharcha</a></li>
									</ul>
								</li>
								<li <?php if($p == 'authors' || $p == 'my-bio'){?>  class="active" <?php } ?>><a href="?p=authors">Authors</a></li>
							</ul>
						</div>
						<div class="col-2 text-end">
							<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
								<span></span>
							</a>
							<!-- <form action="#" class="search-form d-none d-lg-inline-block">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="bi-search"></span>
							</form> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>