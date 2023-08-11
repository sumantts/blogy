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

    

    <div class="site-cover site-cover-sm same-height overlay single-page" <?php if($post_image != ''){?> style="background-image: url('<?=$post_image?>');" <?php } ?>>
        <div class="container">
        <div class="row same-height justify-content-center">
            <div class="col-md-10">
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

                    <div class="post-content-body" style="text-align: justify;" >
                        <?=$post_description?>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium nam quas inventore, ut iure iste modi eos adipisci ad ea itaque labore earum autem nobis et numquam, minima eius. Nam eius, non unde ut aut sunt eveniet rerum repellendus porro.</p>
                        <p>Sint ab voluptates itaque, ipsum porro qui obcaecati cumque quas sit vel. Voluptatum provident id quis quo. Eveniet maiores perferendis officia veniam est laborum, expedita fuga doloribus natus repellendus dolorem ab similique sint eius cupiditate necessitatibus, magni nesciunt ex eos.</p>
                        <p>Quis eius aspernatur, eaque culpa cumque reiciendis, nobis at earum assumenda similique ut? Aperiam vel aut, ex exercitationem eos consequuntur eaque culpa totam, deserunt, aspernatur quae eveniet hic provident ullam tempora error repudiandae sapiente illum rerum itaque voluptatem. Commodi, sequi.</p> -->
                        
                        <!-- 4 Images betwen 2 paragraph -->
                        <!-- <div class="row my-4">
                        <div class="col-md-12 mb-4">
                            <img src="images/hero_1.jpg" alt="Image placeholder" class="img-fluid rounded">
                        </div>
                        <div class="col-md-6 mb-4">
                            <img src="images/img_2_horizontal.jpg" alt="Image placeholder" class="img-fluid rounded">
                        </div>
                        <div class="col-md-6 mb-4">
                            <img src="images/img_3_horizontal.jpg" alt="Image placeholder" class="img-fluid rounded">
                        </div>
                        </div> -->
                        <!-- 4 Images betwen 2 paragraph -->

                        <!-- <p>Quibusdam autem, quas molestias recusandae aperiam molestiae modi qui ipsam vel. Placeat tenetur veritatis tempore quos impedit dicta, error autem, quae sint inventore ipsa quidem. Quo voluptate quisquam reiciendis, minus, animi minima eum officia doloremque repellat eos, odio doloribus cum.</p>
                        <p>Temporibus quo dolore veritatis doloribus delectus dolores perspiciatis recusandae ducimus, nisi quod, incidunt ut quaerat, magnam cupiditate. Aut, laboriosam magnam, nobis dolore fugiat impedit necessitatibus nisi cupiditate, quas repellat itaque molestias sit libero voluptas eveniet omnis illo ullam dolorem minima.</p>
                        <p>Porro amet accusantium libero fugit totam, deserunt ipsa, dolorem, vero expedita illo similique saepe nisi deleniti. Cumque, laboriosam, porro! Facilis voluptatem sequi nulla quidem, provident eius quos pariatur maxime sapiente illo nostrum quibusdam aliquid fugiat! Earum quod fuga id officia.</p>
                        <p>Illo magnam at dolore ad enim fugiat ut maxime facilis autem, nulla cumque quis commodi eos nisi unde soluta, ipsa eius aspernatur sint atque! Nihil, eveniet illo ea, mollitia fuga accusamus dolor dolorem perspiciatis rerum hic, consectetur error rem aspernatur!</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus magni explicabo id molestiae, minima quas assumenda consectetur, nobis neque rem, incidunt quam tempore perferendis provident obcaecati sapiente, animi vel expedita omnis quae ipsa! Obcaecati eligendi sed odio labore vero reiciendis facere accusamus molestias eaque impedit, consequuntur quae fuga vitae fugit?</p> -->
                    </div>

                    <div class="pt-5">
                        <p>Category:  <a href="#"><?=$category_name?></a></p>
                    </div>

                    <!-- Your share button code -->
                    <div class="fb-share-button" 
                    data-href="https://glocalcharcha.in/2022/01/03/deulgram-pathra/" 
                    data-layout="button_count">
                    </div>

                    <?php if(sizeof($comments) > 0){?>
                    <div class="pt-5 comment-wrap">
                        <h3 class="mb-5 heading">6 Comments</h3>
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
                            </div>
                        </li>
                        <?php }
                        } ?>
                        </ul>
                        <?php } ?>
                        <!-- <ul class="comment-list">
                        <li class="comment">
                            <div class="vcard">
                            <img src="images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                            <h3>Jean Doe</h3>
                            <div class="meta">January 9, 2018 at 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                            <p><a href="#" class="reply rounded">Reply</a></p>
                            </div>
                        </li>

                        <li class="comment">
                            <div class="vcard">
                            <img src="images/person_2.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                            <h3>Jean Doe</h3>
                            <div class="meta">January 9, 2018 at 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                            <p><a href="#" class="reply rounded">Reply</a></p>
                            </div>

                            <ul class="children">
                            <li class="comment">
                                <div class="vcard">
                                <img src="images/person_3.jpg" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                <h3>Jean Doe</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply rounded">Reply</a></p>
                                </div>


                                <ul class="children">
                                <li class="comment">
                                    <div class="vcard">
                                    <img src="images/person_4.jpg" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                    <h3>Jean Doe</h3>
                                    <div class="meta">January 9, 2018 at 2:21pm</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                    <p><a href="#" class="reply rounded">Reply</a></p>
                                    </div>

                                    <ul class="children">
                                    <li class="comment">
                                        <div class="vcard">
                                        <img src="images/person_5.jpg" alt="Image placeholder">
                                        </div>
                                        <div class="comment-body">
                                        <h3>Jean Doe</h3>
                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                        <p><a href="#" class="reply rounded">Reply</a></p>
                                        </div>
                                    </li>
                                    </ul>
                                </li>
                                </ul>
                            </li>
                            </ul>
                        </li>

                        <li class="comment">
                            <div class="vcard">
                            <img src="images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                            <h3>Jean Doe</h3>
                            <div class="meta">January 9, 2018 at 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                            <p><a href="#" class="reply rounded">Reply</a></p>
                            </div>
                        </li>
                        </ul> -->
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
                            <!-- <div class="form-group">
                            <label for="website">Website</label>
                            <input type="url" class="form-control" id="website">
                            </div> -->

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
                    <!-- <div class="sidebar-box search-form-wrap">
                        <form action="#" class="sidebar-search-form">
                        <span class="bi-search"></span>
                        <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                        </form>
                    </div> -->
                    <!-- END sidebar-box -->
                    <div class="sidebar-box">
                        <div class="bio text-center">
                        <img src="<?=$author_photo?>" alt="Image Placeholder" class="img-fluid mb-3">
                        <div class="bio-body">
                            <h2><?=$author_name?></h2>
                            <p class="mb-4"><?=substr($author_bio, 0, 300)?></p>
                            <p><a href="?p=my-bio&id=<?=$author_id?>" class="btn btn-primary btn-sm rounded px-2 py-2">Read my bio</a></p>
                            <p class="social">
                            <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                            <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                            <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                            <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                            </p>
                        </div>
                        </div>
                    </div>
                    <!-- END sidebar-box -->  
                    <?php if(sizeof($popu_posts) > 0){ ?>
                    <div class="sidebar-box">
                        <h3 class="heading">Popular Posts</h3>
                        <div class="post-entry-sidebar">
                            
                        <ul>
                            <?php for($p  = 0; $p < sizeof($popu_posts); $p++){ ?>
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
                        <!-- <li><a href="#">Travel <span>(22)</span></a></li>
                        <li><a href="#">Lifestyle <span>(37)</span></a></li>
                        <li><a href="#">Business <span>(42)</span></a></li>
                        <li><a href="#">Adventure <span>(14)</span></a></li> -->
                        </ul>
                    </div>
                    <!-- END sidebar-box -->

                    <?php  if(sizeof($filtered_tags) > 0){ ?>
                    <div class="sidebar-box">
                        <h3 class="heading">Tags</h3>
                        <ul class="tags">
                        <?php  for($t = 0; $t < sizeof($filtered_tags); $t++){ ?>
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
                <!-- END sidebar -->

            </div>
        </div>
    </section>


    <!-- Start posts-entry -->
    <section class="section posts-entry posts-entry-sm bg-light">
        <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-uppercase text-black">More Blog Posts</div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
            <div class="blog-entry">
                <a href="single.html" class="img-link">
                <img src="images/img_1_horizontal.jpg" alt="Image" class="img-fluid">
                </a>
                <span class="date">Apr. 14th, 2022</span>
                <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><a href="#" class="read-more">Continue Reading</a></p>
            </div>
            </div>
            <div class="col-md-6 col-lg-3">
            <div class="blog-entry">
                <a href="single.html" class="img-link">
                <img src="images/img_2_horizontal.jpg" alt="Image" class="img-fluid">
                </a>
                <span class="date">Apr. 14th, 2022</span>
                <h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><a href="#" class="read-more">Continue Reading</a></p>
            </div>
            </div>
            <div class="col-md-6 col-lg-3">
            <div class="blog-entry">
                <a href="single.html" class="img-link">
                <img src="images/img_3_horizontal.jpg" alt="Image" class="img-fluid">
                </a>
                <span class="date">Apr. 14th, 2022</span>
                <h2><a href="single.html">UK sees highest inflation in 30 years</a></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><a href="#" class="read-more">Continue Reading</a></p>
            </div>
            </div>
            <div class="col-md-6 col-lg-3">
            <div class="blog-entry">
                <a href="single.html" class="img-link">
                <img src="images/img_4_horizontal.jpg" alt="Image" class="img-fluid">
                </a>
                <span class="date">Apr. 14th, 2022</span>
                <h2><a href="single.html">Don’t assume your user data in the cloud is safe</a></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p><a href="#" class="read-more">Continue Reading</a></p>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End posts-entry -->

	<!-- Footer Start -->
	<?php include('common/footer.php');?>
	<!-- Footer End -->