    <?php 
    include('common/header.php');
    include 'studio/assets/php/readMoreCtrl.php';
    ?>
	<!-- <body oncopy="return false;" oncut="return false;" onpaste="return false;" oncontextmenu="return false;"> -->
	<body>

    <!-- FB Share Code -->
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
	<!-- //FB Share Code -->

	<!-- Navigation start -->
	<?php include('common/nav.php');?>
	<!-- Navigation end -->
    
    <div class="site-cover site-cover-sm same-height overlay single-page" <?php if($post_image != ''){?>style="background-image: url('<?=$post_image?>');" <?php } ?>>
    <div class="container">
      <div class="row same-height justify-content-center">
        <div class="col-md-6">
          <div class="post-entry text-center">
            <h1 class="mb-4"><?=$post_title?></h1>
            <div class="post-meta align-items-center text-center">
              <figure class="author-figure mb-0 me-3 d-inline-block"><img src="<?=$author_photo?>" alt="Image" class="img-fluid"></figure>
              <span class="d-inline-block mt-1">By <?=$author_name?></span>
              <span>&nbsp;-&nbsp; <?=date('jS. F, Y', strtotime($created_on))?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section">
    <div class="container">

      <div class="row blog-entries element-animate">

        <div class="col-md-12 col-lg-8 main-content">

          <div class="post-content-body">
          <?=$post_description?>
          </div>


          <div class="pt-5">
            <p>Categories:  <a href="javascript: void(0)"><?=$category_name?></a> </p>
          </div>


          <div class="pt-5 comment-wrap">
            <?php if(sizeof($comments) > 0){?>
            <h3 class="mb-5 heading"> Comments</h3>
            <ul class="comment-list">
              <?php for($x = 0; $x < sizeof($comments); $x++){
              if($comments[$x]->parent_cr_id == 0){?>
              <li class="comment">
                <div class="vcard">
                  <img src="images/no_images.png" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3><?=$comments[$x]->name?></h3>
                  <div class="meta"><?=date('jS. F, Y', strtotime($comments[$x]->created_at))?> at <?=date('h:i a', strtotime($comments[$x]->created_at))?></div>
                  <p><?=$comments[$x]->message?></p>
                  <p><a href="javascript: void(0)" onClick="$('#parent_cr_id').val(<?=$comments[$x]->cr_id?>)" class="reply rounded">Reply</a></p>
                </div>
                        <?php
                          $child_available1 = checkChildComments($comments[$x]->post_id, $comments[$x]->cr_id, $mysqli);
                          $child_available = json_decode($child_available1);
                          if(sizeof($child_available) > 0){  
                        ?>
                          <ul class="children">
                          <?php for($y = 0; $y < sizeof($child_available); $y++){?>
                          <li class="comment">
                              <div class="vcard">
                              <img src="images/no_images.png" alt="Image placeholder">
                              </div>
                              <div class="comment-body">
                              <h3><?=$child_available[$y]->name?></h3>
                              <div class="meta"><?=date('jS. F, Y', strtotime($child_available[$x]->created_at))?> at <?=date('h:i a', strtotime($child_available[$x]->created_at))?></div>
                              <p><?=$child_available[$y]->message?></p>
                              <!-- <p><a href="javascript: void(0)" onClick="$('#parent_cr_id').val(<?=$child_available[$y]->cr_id?>)" class="reply rounded">Reply</a></p> -->
                              </div>
                          </li>
                          <?php } ?>
                          </ul>
                        <?php } ?>
              </li>
              <?php } }?>
            </ul>
            <?php } ?>
            <!-- END comment-list -->

            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5">Leave a comment</h3>
              <form action="" class="p-5 bg-light" method="POST">
                <div class="form-group">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email" required>
                </div>

                <div class="form-group">
                <label for="message">Message</label>
                <textarea name="" id="message" cols="30" rows="10" class="form-control" required></textarea>
                </div>

                <div class="my-3">
                    <div class="loading" style="display: none">Posting Review...</div>
                    <div class="error-message" id="quote_error_msg1" style="display: none;  font-weight: bold;">Please enter the required fields</div>
                    <div class="sent-message" style="display: none">Your comment has been posted. After reviewed by Admin, it will display on our site. Thank you!</div>
                </div>
                <div class="form-group">                        
                <input type="hidden" class="form-control" id="post_id" value="<?=$_GET['pi']?>">                     
                <input type="hidden" class="form-control" id="parent_cr_id" value="0">
                <input type="button" value="Post Comment" class="btn btn-primary" id="sendReview">
                </div>
            </form>
            </div>
          </div>

        </div>

        <!-- END main-content -->

        <div class="col-md-12 col-lg-4 sidebar">
          <div class="sidebar-box search-form-wrap">
            <form action="" class="sidebar-search-form">
              <span class="bi-search"></span>
              <!-- <input type="text" class="form-control" id="search_content" placeholder="Type a keyword and hit enter"> -->
            </form>
          </div>
          <!-- END sidebar-box -->
          <div class="sidebar-box">
            <div class="bio text-center">
              <img src="<?=$author_photo?>" alt="Image Placeholder" class="img-fluid mb-3">
              <div class="bio-body">
                <h2><?=$author_name?></h2>
                <p class="mb-4"><?=substr($author_bio, 0, 300)?></p>
                <p><a href="?p=my-bio&id=<?=$author_id?>" class="btn btn-primary btn-sm rounded px-2 py-2">Read my bio</a></p>
                <!-- <p class="social">
                  <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                  <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                  <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                  <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                </p> -->
              </div>
            </div>
          </div>
          <!-- END sidebar-box -->  
          <div class="sidebar-box">            
            <?php if(sizeof($popu_posts) > 0){ ?>
            <h3 class="heading">Popular Posts</h3> 
            <div class="post-entry-sidebar">
              <ul>
                <?php for($p = 0; $p < sizeof($popu_posts); $p++){ ?>
                <li>
                  <a href="?p=read-more&pi=<?=$popu_posts[$p]->post_id?>">
                    <?php if($popu_posts[$p]->post_image != ''){?>
                    <img src="<?=$popu_posts[$p]->post_image?>" alt="Image placeholder" class="me-4 rounded">
                    <?php } ?>
                    <div class="text">
                      <h4><?=substr($popu_posts[$p]->post_title, 0, 50) . '...'?></h4>
                      <div class="post-meta">
                        <span class="mr-2"><?=date('jS. F, Y', strtotime($popu_posts[$p]->created_on))?></span>
                      </div>
                    </div>
                  </a>
                </li>
                <?php } ?>
              </ul>
            </div>
            <?php } ?>
          </div>
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
            </ul>
          </div>
          <!-- END sidebar-box -->

          <div class="sidebar-box">
            <?php  if(sizeof($filtered_tags) > 0){ ?>
            <h3 class="heading">Tags</h3>
            <ul class="tags">              
              <?php  for($t = 0; $t < sizeof($filtered_tags); $t++){ ?>                            
              <li><a href="?p=<?=$filtered_tags[$t]->category_slug?>"><?=$filtered_tags[$t]->post_tag_n?></a></li>              
              <?php } ?>
            </ul>
            <?php } ?>
          </div>
        </div>
        <!-- END sidebar -->

      </div>
    </div>
  </section>
  

	<!-- Footer Start -->
	<?php include('common/footer.php');?>
	<!-- Footer End -->