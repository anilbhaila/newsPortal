<?php get_header();?>        
            <div id="main-left" class="span8">
                <div id="slider" class="clearfix">
                    <div id="slide-left" class="flexslider span8">
                        <ul class="slides">
                        <?php
                        query_posts('category_name=Photo News & posts_per_page=4');
                        while(have_posts()):the_post();
                            if(has_post_thumbnail()){
                                $imageUrl = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'photo-news' );
                                ?>
                                <li data-thumb="<?php echo $imageUrl[0];?>">
                                <a href="<?php the_permalink();?>" title="<?php the_title();?>" rel="bookmark">
                                    <?php the_post_thumbnail("photo-news");?>
                                </a>
                                <div class="entry">
                                    <h4><?php the_title();?></h4>
                                    <p><?php echo get_the_excerpt();?></p>
                                </div>
                            </li>
                            <?php
                            }
                        endwhile;

                        ?>

                            <!--<li data-thumb="<?php /*echo get_template_directory_uri().'/images/dummy/photodune-3834701-laughing-girl-xs-546x291.jpg';*/?>">
                                <a href="#" title="Permalink to Morbi est est lectus non rutrum commodo felis quis tortor" rel="bookmark">
                                    <img width="546" height="291" src="<?php /*echo get_template_directory_uri().'/images/dummy/photodune-3834701-laughing-girl-xs-546x291.jpg';*/?>" alt="photodune-3834701-laughing-girl-xs" />
                                </a>
                                <div class="entry">
                                    <h4>Morbi est est lectus non rutrum commodo felis quis tortor...</h4>
                                    <p>Fusce aliquet non ipsum vitae scelerisque. Nullam ultricies adipiscing erat, qui...</p>
                                </div>
                            </li>-->

                            <!--<li data-thumb="<?php /*echo get_template_directory_uri().'/images/dummy/photodune-2043745-college-student-s-546x291.jpg';*/?>">
                                <a href="#" title="Permalink to Donec consectetuer ligula vulputate sem tristique cursus" rel="bookmark">
                                    <img width="546" height="291" src="<?php /*echo get_template_directory_uri().'/images/dummy/photodune-2043745-college-student-s-546x291.jpg';*/?>" alt="photodune-2043745-college-student-s" />
                                </a>
                                <div class="entry">
                                    <h4>Donec consectetuer ligula vulputate sem tristique cursus...</h4>
                                    <p>Nam nibh arcu, tristique eget pretium sed, porta id quam. Praesent dignissim ant...</p>
                                </div>
                            </li>-->

                            <!--<li data-thumb="<?php /*echo get_template_directory_uri().'/images/dummy/shutterstock_123603871-546x291.jpg';*/?>">
                                <a href="#" title="Permalink to Quisque sodales viverra ornare vitae libero ac risus" rel="bookmark">
                                    <img width="546" height="291" src="<?php /*echo get_template_directory_uri().'/images/dummy/shutterstock_123603871-546x291.jpg';*/?>" alt="gallery-1" />
                                </a>
                                <div class="entry">
                                    <h4>Quisque sodales viverra ornare vitae libero ac risus...</h4>
                                    <p>Quisque sodales viverra ornare. Aenean posuere lacus sed facilisis gravida. Morb...</p>
                                </div>
                            </li>-->

                            <!--<li data-thumb="<?php /*echo get_template_directory_uri().'/images/dummy/shutterstock_109209743-546x291.jpg';*/?>">
                                <a href="#" title="Permalink to Vestibulum auctor dapibus neque pulvinar urna leo" rel="bookmark">
                                    <img width="546" height="291" src="<?php /*echo get_template_directory_uri().'/images/dummy/shutterstock_109209743-546x291.jpg';*/?>" alt="shutterstock_109209743" />
                                </a>
                                <div class="entry">
                                    <h4>Vestibulum auctor dapibus neque pulvinar urna leo...</h4>
                                    <p>Fusce aliquet non ipsum vitae scelerisque. Nullam ultricies adipiscing erat, qui...</p>
                                </div>
                            </li>-->
                        </ul>
                    </div>

                    <div id="slide-right" class="span4">
                        <h3>Most Popular News</h3>
                        <ul>
                        <?php query_posts('category_name=Most Popular News & posts_per_page=4');
                        while(have_posts()):the_post();?>
                            <li><a href="<?php the_permalink();?>" rel="bookmark"><h4 class="post-title"><?php the_title();?></h4></a></li>

                        <?php
                        endwhile;
                        wp_reset_postdata();
                        wp_reset_query();
                        ?>

<!--                            <li><a href="#" title="Permalink to Lectus non rutrum pulvinar urna leo dignissim lorem" rel="bookmark"><h4 class="post-title">Lectus non rutrum pulvinar urna leo dignissim lore...</h4></a></li>-->
<!--                            <li><a href="#" title="Permalink to Donec consectetuer ligula vulputate sem tristique cursus" rel="bookmark"><h4 class="post-title">Donec consectetuer ligula vulputate sem tristique ...</h4></a></li>-->
<!--                            <li><a href="#" title="Permalink to Quisque sodales viverra ornare vitae libero ac risus" rel="bookmark"><h4 class="post-title">Quisque sodales viverra ornare vitae libero ac ris...</h4></a></li>-->
<!--                            <li><a href="#" title="Permalink to Nam nibh arcu tristique eget pretium vitae libero ac risus" rel="bookmark"><h4 class="post-title">Nam nibh arcu tristique eget pretium vitae libero ...</h4></a></li>-->
                        </ul><div class="clear"></div>
                    </div>
                </div>

                <div id="home-top">
                    <h3 class="title"><span>Hot Stuff</span></h3>
                    <ul class="bxslider">
                        <li><a class="image_thumb_zoom" href="#" title="Permalink to Donec consectetuer ligula vulputate sem tristique cursus" rel="bookmark">
                                <img width="225" height="136" src="<?php echo get_template_directory_uri().'/images/dummy/photodune-2043745-college-student-s-225x136.jpg';?>" alt="photodune-2043745-college-student-s" />
                            </a>
                            <h4 class="post-title clearfix">
                                <img class="post-icon" alt="Text post" src="<?php echo get_template_directory_uri().'/images/text.png';?>">
                                <a href="#" title="Permalink to Donec consectetuer ligula vulputate sem tristique cursus" rel="bookmark">Donec consectetuer ligula vulputate...	</a>
                            </h4>
                            <div class="meta clearfix">
                                <span class="date">July 11, 2013</span>
                                <div class="ratings">
                                    <input class="star" type="radio" name="home-top-rating-1" value="1" disabled="disabled"/>
                                    <input class="star" type="radio" name="home-top-rating-1" value="2" disabled="disabled"/>
                                    <input class="star" type="radio" name="home-top-rating-1" value="3" disabled="disabled" checked="checked"/>
                                    <input class="star" type="radio" name="home-top-rating-1" value="4" disabled="disabled"/>
                                    <input class="star" type="radio" name="home-top-rating-1" value="5" disabled="disabled"/>
                                </div>
                            </div>
                        </li>
                        <li><a class="image_thumb_zoom" href="#" title="Permalink to Nam nibh arcu tristique eget pretium vitae libero ac risus" rel="bookmark">
                                <img width="225" height="136" src="<?php echo get_template_directory_uri().'/images/dummy/photodune-3517559-idea-s-225x136.jpg';?>" alt="photodune-3517559-idea-s" />
                            </a>
                            <h4 class="post-title clearfix">
                                <img class="post-icon" alt="Gallery post" src="<?php echo get_template_directory_uri().'/images/image.png';?>">
                                <a href="#" title="Permalink to Nam nibh arcu tristique eget pretium vitae libero ac risus" rel="bookmark">Nam nibh arcu tristique eget pretiu...</a>
                            </h4>
                            <div class="meta clearfix">
                                <span class="date">July 2, 2013</span>
                                <div class="ratings">
                                    <input class="star" type="radio" name="home-top-rating-2" value="1" disabled="disabled"/>
                                    <input class="star" type="radio" name="home-top-rating-2" value="2" disabled="disabled"/>
                                    <input class="star" type="radio" name="home-top-rating-2" value="3" disabled="disabled" checked="checked"/>
                                    <input class="star" type="radio" name="home-top-rating-2" value="4" disabled="disabled"/>
                                    <input class="star" type="radio" name="home-top-rating-2" value="5" disabled="disabled"/>
                                </div>
                            </div>
                        </li>
                        <li><a class="image_thumb_zoom" href="#" title="Permalink to Aliquam quam lectus pulvinar urna leo dignissim lorem" rel="bookmark">
                                <img width="225" height="136" src="<?php echo get_template_directory_uri().'/images/dummy/shutterstock_2114081-225x136.jpg';?>" alt="shutterstock_2114081" />
                            </a>
                            <h4 class="post-title clearfix">
                                <img class="post-icon" alt="Photo" src="<?php echo get_template_directory_uri().'/images/photo.png';?>">
                                <a href="#" title="Permalink to Aliquam quam lectus pulvinar urna leo dignissim lorem" rel="bookmark">Aliquam quam lectus pulvinar urna l...</a>
                            </h4>
                            <div class="meta clearfix">
                                <span class="date">June 16, 2013</span>
                                <div class="ratings">
                                    <input class="star" type="radio" name="home-top-rating-3" value="1" disabled="disabled"/>
                                    <input class="star" type="radio" name="home-top-rating-3" value="2" disabled="disabled"/>
                                    <input class="star" type="radio" name="home-top-rating-3" value="3" disabled="disabled"/>
                                    <input class="star" type="radio" name="home-top-rating-3" value="4" disabled="disabled" checked="checked"/>
                                    <input class="star" type="radio" name="home-top-rating-3" value="5" disabled="disabled"/>
                                </div>
                            </div>
                        </li>
                        <li><a class="image_thumb_zoom" href="#" title="Permalink to Phasellus scelerisque massa molestie iaculis lectus pulvinar" rel="bookmark">
                                <img width="225" height="136" src="<?php echo get_template_directory_uri().'/images/dummy/shutterstock_109209743-225x136.jpg';?>" class="attachment-post-thumbnail wp-post-image" alt="shutterstock_109209743" />
                            </a>
                            <h4 class="post-title clearfix">
                                <img class="post-icon" alt="Video post" src="<?php echo get_template_directory_uri().'/images/vid.png';?>">
                                <a href="#" title="Permalink to Phasellus scelerisque massa molestie iaculis lectus pulvinar" rel="bookmark">Phasellus scelerisque massa molesti...	</a>
                            </h4>
                            <div class="meta clearfix">
                                <span class="date">June 2, 2013</span>
                                <div class="ratings">
                                    <input class="star" type="radio" name="home-top-rating-4" value="1" disabled="disabled"/>
                                    <input class="star" type="radio" name="home-top-rating-4" value="2" disabled="disabled"/>
                                    <input class="star" type="radio" name="home-top-rating-4" value="3" disabled="disabled"/>
                                    <input class="star" type="radio" name="home-top-rating-4" value="4" disabled="disabled" checked="checked"/>
                                    <input class="star" type="radio" name="home-top-rating-4" value="5" disabled="disabled"/>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div id="home-middle" class="clearfix">
                    <div class="left span6">
                        <h3 class="title"><a href="#" title="Game News"><span>Game News</span></a></h3>
                        <div class="row-fluid">
                            <article class="post">
                                <a class="image_thumb_zoom" href="#" title="Permalink to Integer vitae libero ac risus egestas placerat urna" rel="bookmark">
                                    <img width="371" height="177" src="<?php echo get_template_directory_uri().'/images/dummy/shutterstock_58382248-371x177.jpg';?>" class="attachment-post-first wp-post-image" alt="shutterstock_58382248" />
                                </a>
                                <h4 class="post-title">
                                    <a href="#" title="Permalink to Integer vitae libero ac risus egestas placerat urna" rel="bookmark">Integer vitae libero ac risus egest...</a>
                                    <span class="date">July 11, 2013</span>
                                </h4>
                                <p>Fusce aliquet non ipsum vitae scelerisque. Nullam ultricies adipiscing erat, quis bibendum enim congue porttitor. E...</p>
                            </article>

                            <article class="post">
                                <div class="entry clearfix">
                                    <a href="#" title="Permalink to Morbi est est lectus non rutrum commodo felis quis tortor" rel="bookmark">
                                        <img width="225" height="136" src="<?php echo get_template_directory_uri().'/images/dummy/photodune-3834701-laughing-girl-xs-225x136.jpg';?>" class="thumb" alt="photodune-3834701-laughing-girl-xs" />
                                        <h4 class="post-title">Morbi est est lectus non rutrum com...</h4>
                                    </a>
                                    <p>Fusce aliquet non ipsum vitae scelerisqu...</p>
                                    <div class="meta">
                                        <span class="date">July 11, 2013</span>
                                    </div>
                                </div>
                            </article>

                            <article class="post">
                                <div class="entry clearfix">
                                    <a href="#" title="Permalink to Donec consectetuer ligula vulputate sem tristique cursus" rel="bookmark">
                                        <img width="225" height="136" src="<?php echo get_template_directory_uri().'/images/dummy/photodune-2043745-college-student-s-225x136.jpg';?>" class="thumb" alt="photodune-2043745-college-student-s" />
                                        <h4 class="post-title">Donec consectetuer ligula vulputate...</h4>
                                    </a>
                                    <p>Nam nibh arcu, tristique eget pretium se...</p>
                                    <div class="meta">
                                        <span class="date">July 11, 2013</span>
                                    </div>
                                </div>
                            </article>

                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="right span6">
                        <h3 class="title"><a href="#" title="Sport News"><span>Sport News</span></a></h3>
                        <div class="row-fluid">
                            <article class="post">
                                <a class="image_thumb_zoom" href="#" title="Permalink to Quisque sodales viverra ornare vitae libero ac risus" rel="bookmark">
                                    <img width="371" height="177" src="<?php echo get_template_directory_uri().'/images/dummy/shutterstock_123603871-371x177.jpg';?>" class="attachment-post-first wp-post-image" alt="gallery-1" />
                                </a>
                                <h4 class="post-title">
                                    <a href="#" title="Permalink to Quisque sodales viverra ornare vitae libero ac risus" rel="bookmark">Quisque sodales viverra ornare vita...</a>
                                    <span class="date">July 2, 2013</span>
                                </h4>
                                <p>Quisque sodales viverra ornare. Aenean posuere lacus sed facilisis gravida. Morbi auctor consectetur mauris a ultri...</p>
                            </article>

                            <article class="post">
                                <div class="entry clearfix">
                                    <a href="#" title="Permalink to Nam nibh arcu tristique eget pretium vitae libero ac risus" rel="bookmark">
                                        <img width="225" height="136" src="<?php echo get_template_directory_uri().'/images/dummy/photodune-3517559-idea-s-225x136.jpg';?>" class="thumb wp-post-image" alt="photodune-3517559-idea-s" />
                                        <h4 class="post-title">Nam nibh arcu tristique eget pretiu...</h4>
                                    </a>
                                    <p>Nam nibh arcu, tristique eget pretium se...</p>
                                    <div class="meta">
                                        <span class="date">July 2, 2013</span>
                                    </div>
                                </div>
                            </article>

                            <article class="post">
                                <div class="entry clearfix">
                                    <a href="#" title="Permalink to Vestibulum auctor dapibus neque pulvinar urna leo" rel="bookmark">
                                        <img width="225" height="136" src="<?php echo get_template_directory_uri().'/images/dummy/shutterstock_109209743-225x136.jpg';?>" class="thumb wp-post-image" alt="shutterstock_109209743" />
                                        <h4 class="post-title">Vestibulum auctor dapibus neque pul...</h4>
                                    </a>
                                    <p>Fusce aliquet non ipsum vitae scelerisqu...</p>
                                    <div class="meta">
                                        <span class="date">June 14, 2013</span>
                                    </div>
                                </div>
                            </article>

                            <div class="clearfix"></div>

                        </div>
                    </div>

                </div>

                <div id="home-bottom" class="clearfix">
                    <h3 class="title"><a href="#" title="Fashion News"><span>Fashion News</span></a></h3>
                    <div class="row-fluid">
                        <div class="span6">
                            <article class="post">
                                <a class="image_thumb_zoom" href="#" title="Permalink to Lectus non rutrum pulvinar urna leo dignissim lorem" rel="bookmark">
                                    <img width="371" height="177" src="<?php echo get_template_directory_uri().'/images/dummy/shutterstock_134257640-371x177.jpg';?>" alt="shutterstock_134257640" />
                                </a>
                                <h4 class="post-title">
                                    <a href="#" title="Permalink to Lectus non rutrum pulvinar urna leo dignissim lorem" rel="bookmark">Lectus non rutrum pulvinar urna leo...</a>
                                    <span class="date">August 12, 2013</span>
                                </h4>
                                <p>Nam nibh arcu, tristique eget pretium sed, porta id quam. Praesent dignissim ante ac tincidunt molestie. Nunc quis ...</p>
                            </article>
                        </div>

                        <div class="span6">
                            <article class="post">
                                <div class="entry clearfix">
                                    <a href="#" title="Permalink to Suspen disse auctor dapibus neque pulvinar urna leo" rel="bookmark">
                                        <img width="225" height="136" src="<?php echo get_template_directory_uri().'/images/dummy/shutterstock_70184773-225x136.jpg';?>" class="thumb" alt="shutterstock_70184773" />
                                        <h4 class="post-title">Suspen disse auctor dapibus neque p...</h4>
                                    </a>
                                    <p>Fusce aliquet non ipsum vitae scelerisqu...</p>
                                    <div class="meta">
                                        <span class="date">August 11, 2013</span>
                                    </div>
                                </div>
                            </article>
                            <article class="post">
                                <div class="entry clearfix">
                                    <a href="#" title="Permalink to Aenean dignissim dignissim lorem pellentesque felis risus" rel="bookmark">
                                        <img width="225" height="136" src="<?php echo get_template_directory_uri().'/images/dummy/shutterstock_58382248-225x136.jpg';?>" class="thumb" alt="shutterstock_58382248" />
                                        <h4 class="post-title">Aenean dignissim dignissim lorem pe...</h4>
                                    </a>
                                    <p>Fusce aliquet non ipsum vitae scelerisqu...</p>
                                    <div class="meta">
                                        <span class="date">July 2, 2013</span>
                                    </div>
                                </div>
                            </article>
                            <article class="post">
                                <div class="entry clearfix">
                                    <a href="#" title="Permalink to Quisque sodales viverra ornare vitae libero ac risus" rel="bookmark">
                                        <img width="225" height="136" src="<?php echo get_template_directory_uri().'/images/dummy/shutterstock_123603871-225x136.jpg';?>" class="thumb" alt="gallery-1" />
                                        <h4 class="post-title">Quisque sodales viverra ornare vita...</h4>
                                    </a>
                                    <p>Quisque sodales viverra ornare. Aenean p...</p>
                                    <div class="meta">
                                        <span class="date">July 2, 2013</span>
                                    </div>
                                </div>
                            </article>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

            </div><!-- #main-left -->
			<!-- Sidebar location -->
			<?php get_sidebar();?> 

        

<?php get_footer();?>

</div><!-- #wrapper -->

</body>
</html>
