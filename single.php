<?php 
get_header();
?>	
		<div id="main-left" class="span8">
<?php
if (have_posts()):
    while (have_posts()): the_post();?>
        <article class="post">
		<h2 class="entry-title">
		<span class="the_title"><?php the_title(); ?></span>
		<span class="entry-cat">
		<?php
                $categories = get_the_category();
                $separator = ", ";
                $output = '';

                if($categories){
                    foreach ($categories as $category){
                        $output .= '<a href="'.get_category_link($category->term_ID).'">'.$category->cat_name . $separator.'</a>';
                    }
                    echo trim($output, $separator);
                }
		?>
		<a href="#" title="View all posts in Game News" rel="category tag">Game News</a>
		</span>
		</h2>
		<div class="entry-meta row-fluid">
		<ul class="clearfix">
			<li><img alt='' src="<?php echo get_template_directory_uri().'/images/dummy/gravatar.png';?>" height='15' width='15' /><a href="#" title="Posts by Admin" rel="author">Admin</a></li>
			<li><img src="<?php echo get_template_directory_uri().'/images/time.png';?>" alt="">July 11, 2013</li>
			<li><img src="<?php echo get_template_directory_uri().'/images/view-bg.png';?>" alt="">4642 </li>
			<li><img src="<?php echo get_template_directory_uri().'/images/komen.png';?>" alt=""><a href="#" title="Comment on Donec consectetuer ligula vulputate sem tristique cursus">0 Comment</a></li>
			<li class="tagz"><img src="<?php echo get_template_directory_uri().'/images/tags-icon.png';?>" alt=""><a href="#" rel="tag">Blog</a>, <a href="#" rel="tag">Framework</a><br /></li>
		</ul>
		</div>
		<div class="entry-content">		
<!--		<p><img width="774" height="320" src="--><?php //echo get_template_directory_uri().'/images/dummy/photodune-2043745-college-student-s-774x320.jpg';?><!--" alt="photodune-2043745-college-student-s" /></p>-->
		<p><?php  if(has_post_thumbnail()){
                            the_post_thumbnail("banner-image");
                        }
                        ?></p>
		<p><?php the_content(); ?></p>
		<span class='st_pinterest_hcount' displayText='Pinterest'></span>
	</div>		
        </article>
    <?php
    endwhile;

else:
    echo '<p>No content found</p>';

endif;?>
		</div><!-- #main-left -->
<?php
get_sidebar();
get_footer();
?>