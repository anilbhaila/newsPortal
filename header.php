<!DOCTYPE html>

<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes();?>>
<![endif]-->

<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes();?>>
<![endif]-->

<!--[if IE 9]>
<html class="ie ie9" <?php language_attributes();?>>
<![endif]-->

<!--[if !(IE 7) | !(IE 8) | !(IE 9)  ]><!-->
<html <?php language_attributes();?>>
<!--<![endif]-->

<head>
    <title>Magazine | Responsive Multipurpose HTML Template</title>
    <meta charset="<?php bloginfo('charset');?>">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri().'/images/favicon.png';?>" title="Favicon"/>
    <meta name="viewport" content="width=device-width" />

    <link rel='stylesheet' id='magz-style-css'  href='style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='swipemenu-css'  href='<?php echo get_template_directory_uri().'/css/swipemenu.css'; ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='flexslider-css'  href='<?php echo get_template_directory_uri().'/css/flexslider.css'; ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css'  href='<?php echo get_template_directory_uri().'/css/bootstrap.css'; ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-responsive-css'  href='<?php echo get_template_directory_uri().'/css/bootstrap-responsive.css'; ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='simplyscroll-css'  href='<?php echo get_template_directory_uri().'/css/jquery.simplyscroll.css'; ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='jPages-css'  href='<?php echo get_template_directory_uri().'/css/jPages.css'; ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='rating-css'  href='<?php echo get_template_directory_uri().'/css/jquery.rating.css'; ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='post-ratings-css'  href='<?php echo get_template_directory_uri().'/css/post-ratings.css';?> type='text/css' media='all' />
	<link rel='stylesheet' id='ie-styles-css'  href='<?php echo get_template_directory_uri().'/css/ie.css'; ?>' type='text/css' media='all' />
    <link rel='stylesheet' id='Roboto-css'  href='http://fonts.googleapis.com/css?family=Roboto' type='text/css' media='all' />

    <script type='text/javascript' src='<?php echo get_template_directory_uri().'/js/jquery-1.10.2.min.js'; ?>'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri().'/js/html5.js'; ?>'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri().'/js/bootstrap.min.js'; ?>'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri().'/js/jquery.flexslider.js'; ?>'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri().'/js/jquery.flexslider.init.js'; ?>'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri().'/js/jquery.bxslider.js'; ?>'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri().'/js/jquery.bxslider.init.js'; ?>'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri().'/js/jquery.rating.js'; ?>'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri().'/js/jquery.idTabs.min.js'; ?>'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri().'/js/jquery.simplyscroll.js'; ?>'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri().'/js/fluidvids.min.js'; ?>'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri().'/js/jPages.js'; ?>'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri().'/js/jquery.sidr.min.js'; ?>'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri().'/js/jquery.touchSwipe.min.js'; ?>'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri().'/js/post-ratings.js'; ?>'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri().'/js/custom.js'; ?>'></script>

    <!-- END -->
    <?php wp_head();?>
</head>

<body <?php body_class();?>>

<div id="page">

    <header id="header" class="container">
        <div id="mast-head">
            <div id="logo">
                <a href="index.html" title="Magazine" rel="home"><img src="<?php echo get_template_directory_uri().'/images/logo.png';?>" alt="Magazine" /></a>
            </div>
        </div>


        <nav class="navbar navbar-inverse clearfix nobot">

            <a id="responsive-menu-button" href="#swipe-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse" id="swipe-menu-responsive">

                <ul class="nav">
                    <li>
                        <span id="close-menu">
                            <a href="#" class="close-this-menu">Close</a>
                                <script type="text/javascript">
                                    jQuery('a.sidr-class-close-this-menu').click(function(){
                                        jQuery('div.sidr').css({
                                            'right': '-476px'
                                        });
                                        jQuery('body').css({
                                            'right': '0'
                                        });
                                    });
                                </script>
                        </span>
                    </li>
                    <li><a href="index.php"><img src="<?php echo get_template_directory_uri().'/images/home.png';?>" alt="Magazine"></a></li>

                    <!--
                    <li class="dropdown"><a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li><a href="magazine2.html">Homepage 2</a></li>
                            <li><a href="blog.html">Homepage 3</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li class="dropdown"><a href="##">Page Templates</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="index.html">Default</a></li>
                            <li><a href="404.html">Error 404</a></li>
                            <li><a href="fullwidth.html">Full Width</a></li>
                            <li><a href="gallery-2col.html">Galleries &#8211; 2 Columns</a></li>
                            <li><a href="gallery-3col.html">Galleries &#8211; 3 Columns</a></li>
                            <li><a href="gallery-4col.html">Galleries &#8211; 4 Columns</a></li>
                            <li><a href="index.html">Magazine 1</a></li>
                            <li><a href="magazine2.html">Magazine 2</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="blog.html">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="fashion-news.html">Fashion News</a></li>
                            <li><a href="#">Game News</a></li>
                            <li><a href="#">Sport News</a></li>
                            <li class="dropdown"><a href="#">Technology</a>
                                <ul class="sub-menu">
                                    <li><a href="fashion-news.html">Fashion News</a></li>
                                    <li><a href="#">Game News</a></li>
                                    <li><a href="#">Sport News</a></li>
                                    <li><a href="#">Technology</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="single-post.html">Single Post</a></li>
                    <li><a href="documentation/">Documentation</a></li>-->
                </ul>
                <?php
                    wp_nav_menu(array(
                        'container_class' => 'nav-collapse',
                        'container_id' => 'swipe-menu-responsive',
                        'menu_class' => 'nav') );
                ?>

            </div><!--/.nav-collapse -->

        </nav><!-- /.navbar -->

    </header><!-- #masthead -->
	<div id="headline" class="container">
        <div class="row-fluid">
            <?php
            $args = array();
            $myposts = get_posts($args);
            $count = 0;
            foreach($myposts as $post):setup_postdata($post);
                if($count > 4) break;
                $cat = get_the_category($post->ID);
                if($cat[0]->cat_name === 'technology'){
                    ?>
            <div class="span3">
                <article class="post">
                    <a href="<?php the_permalink();?>" title="<?php the_title();?>" rel="bookmark">
                        <?php  if(has_post_thumbnail()){
                            the_post_thumbnail("small-thumbnail");
                        }
                        ?>
<!--                        <img width="225" height="136" src="--><?php //echo get_template_directory_uri().'/images/dummy/photodune-2043745-college-student-s-225x136.jpg';?><!--" class="thumb" alt="photodune-2043745-college-student-s" />-->
                    </a>
                    <div class="entry">
                        <h3><a href="<?php the_permalink();?>" title="<?php the_title();?>" rel="bookmark">
                                <?php
                                the_title();
                                $count++;
                                ?></a>
                        </h3>
            <p>5 months ago </p>
        </div>
        <div class="clearfix"></div>
        </article>
    </div><?php
                }
                if($cat[0]->cat_name === 'fashion'){
                    ?>
                    <div class="span3">
                        <article class="post">
                            <a href="<?php the_permalink();?>" title="<?php the_title();?>" rel="bookmark">

                                <?php
                    if(has_post_thumbnail()){
                        the_post_thumbnail("small-thumbnail");
                    }

                                ?>
<!--                                <img width="225" height="136" src="--><?php //echo get_template_directory_uri().'/images/dummy/photodune-2043745-college-student-s-225x136.jpg';?><!--" class="thumb" alt="photodune-2043745-college-student-s" />-->
                            </a>
                            <div class="entry">
                                <h3><a href="<?php the_permalink();?>" title="<?php the_title();?>" rel="bookmark">
                                        <?php
                                        the_title();
                                        $count++;
                                        ?></a></h3>
                                <p>5 months ago </p>
                            </div>
                            <div class="clearfix"></div>
                        </article>
                    </div>

                <?php

                }
                if($cat[0]->cat_name === 'politics'){
                    ?>

                    <div class="span3">
                        <article class="post">
                            <a href="<?php the_permalink();?>" title="<?php the_title();?>" rel="bookmark">
                                <?php
                                if(has_post_thumbnail()){
                                    the_post_thumbnail("small-thumbnail");
                                }
                                ?>
<!--                                <img width="225" height="136" src="--><?php //echo get_template_directory_uri().'/images/dummy/photodune-2043745-college-student-s-225x136.jpg';?><!--" class="thumb" alt="photodune-2043745-college-student-s" />-->
                            </a>
                            <div class="entry">
                                <h3><a href="<?php the_permalink();?>" title="<?php the_title();?>" rel="bookmark">
                                        <?php
                                        the_title();
                                        $count++;
                                        ?></a></h3>
                                <p>5 months ago </p>
                            </div>
                            <div class="clearfix"></div>
                        </article>
                    </div>

                    <?php


                }
                if($cat[0]->cat_name === 'sports'){
                    ?>
                    <div class="span3">
                        <article class="post">
                            <a href="<?php the_permalink();?>" title="<?php the_title();?>" rel="bookmark">
                                <?php
                                if(has_post_thumbnail()){
                                    the_post_thumbnail("small-thumbnail");
                                }
                                ?>
<!--                                <img width="225" height="136" src="--><?php //echo get_template_directory_uri().'/images/dummy/photodune-2043745-college-student-s-225x136.jpg';?><!--" class="thumb" alt="photodune-2043745-college-student-s" />-->
                            </a>
                            <div class="entry">
                                <h3><a href="<?php the_permalink();?>" title="<?php the_title();?>" rel="bookmark">
                                        <?php
                                        the_title();
                                        $count++;
                                        ?></a></h3>
                                <p>5 months ago </p>
                            </div>
                            <div class="clearfix"></div>
                        </article>
                    </div>

                    <?php


                }
            endforeach;
            wp_reset_postdata();
            ?>



            <!--<div class="span3">
                <article class="post">
                    <a href="#" title="Permalink to Donec consectetuer ligula vulputate sem tristique cursus" rel="bookmark">
                        <img width="225" height="136" src="<?php /*echo get_template_directory_uri().'/images/dummy/photodune-2043745-college-student-s-225x136.jpg';*/?>" class="thumb" alt="photodune-2043745-college-student-s" />
                    </a>
                    <div class="entry">
                        <h3><a href="#" title="Permalink to Donec consectetuer ligula vulputate sem tristique cursus" rel="bookmark">Donec consectetuer ligula vulputate...</a></h3>
                        <p>5 months ago </p>
                    </div>
                    <div class="clearfix"></div>
                </article>
            </div>

            <div class="span3">
                <article class="post">
                    <a href="#" title="Permalink to Nam nibh arcu tristique eget pretium vitae libero ac risus" rel="bookmark">
                        <img width="225" height="136" src="<?php /*echo get_template_directory_uri().'/images/dummy/photodune-3517559-idea-s-225x136.jpg';*/?>" class="thumb" alt="photodune-3517559-idea-s" />
                    </a>
                    <div class="entry">
                        <h3><a href="#" title="Permalink to Nam nibh arcu tristique eget pretium vitae libero ac risus" rel="bookmark">Nam nibh arcu tristique eget pretiu...</a></h3>
                        <p>5 months ago </p>
                    </div>
                    <div class="clearfix"></div>
                </article>
            </div>

            <div class="span3">
                <article class="post">
                    <a href="#" title="Permalink to Aliquam quam lectus pulvinar urna leo dignissim lorem" rel="bookmark">
                        <img width="225" height="136" src="<?php /*echo get_template_directory_uri().'/images/dummy/shutterstock_2114081-225x136.jpg';*/?>" class="thumb" alt="shutterstock_2114081" />
                    </a>
                    <div class="entry">
                        <h3><a href="#" title="Permalink to Aliquam quam lectus pulvinar urna leo dignissim lorem" rel="bookmark">Aliquam quam lectus pulvinar urna l...</a></h3>
                        <p>6 months ago </p>
                    </div>
                    <div class="clearfix"></div>
                </article>
            </div>

            <div class="span3">
                <article class="post">
                    <a href="#" title="Permalink to Phasellus scelerisque massa molestie iaculis lectus pulvinar" rel="bookmark">
                        <img width="225" height="136" src="<?php /*echo get_template_directory_uri().'/images/dummy/shutterstock_109209743-225x136.jpg';*/?>" class="thumb" alt="shutterstock_109209743" />
                    </a>
                    <div class="entry">
                        <h3><a href="#" title="Permalink to Phasellus scelerisque massa molestie iaculis lectus pulvinar" rel="bookmark">Phasellus scelerisque massa molesti...</a></h3>
                        <p>6 months ago </p>
                    </div>
                    <div class="clearfix"></div>
                </article>
            </div>-->

        </div>
    </div>

    <div id="intr" class="container">
        <div class="row-fluid">
            <div class="brnews span9">
                <h3>Breaking News</h3>
                <ul id="scroller">
                    <li><p><a href="#" title="Permalink to Lectus non rutrum pulvinar urna leo dignissim lorem" rel="bookmark"><span class="title">Lectus non rutrum pu...</span> Nam nibh arcu, tristique eget pretium sed, porta i...</a></p></li>
                    <li><p><a href="#" title="Permalink to Suspen disse auctor dapibus neque pulvinar urna leo" rel="bookmark"><span class="title">Suspen disse auctor ...</span> Fusce aliquet non ipsum vitae scelerisque. Nullam ...</a></p></li>
                    <li><p><a href="#" title="Permalink to Porta lorem ipsum dolor sit amet, consectetur adipiscing risus" rel="bookmark"><span class="title">Porta lorem ipsum do...</span> Lorem ipsum dolor sit amet, consectetur adipiscing...</a></p></li>
                </ul>
            </div>

            <div class="search span3"><div class="offset1">
                    <form method="get" id="searchform" action="#">
                        <p><input type="text" value="Search here..." onfocus="if ( this.value == 'Search here...' ) { this.value = ''; }" onblur="if ( this.value == '' ) { this.value = 'Search here...'; }" name="s" id="s" />
                            <input type="submit" id="searchsubmit" value="Search" /></p>
                    </form>
                </div></div>
        </div>
    </div>
	<div id="content" class="container">
		<div id="main" class="row-fluid">
