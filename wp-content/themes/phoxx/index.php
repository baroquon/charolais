<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
get_header(); ?>
    
<div class="slider_container">    
<?php query_posts('showposts='.get_option('sliderlimit').'&meta_key=featured&meta_value=1'); ?>
<?php if (have_posts()) : ?>    
<div id="photos" class="galleryview">
          	<?php $i=0; while (have_posts()) : the_post(); ?>
			<?php $i++; ?>
                  <div class="panel">
                    
<?php if ( get_post_meta($post->ID, 'slideshow_photo', true) ) { ?>
	<div class="postthumb"> 
		<img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "slideshow_photo", $single = true); ?>&h=340&w=960&zc=1" alt="<?php the_title(); ?>" width="960" height="340" />
	</div>
<?php } ?>

                    <div class="panel-overlay">
                      <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                      <?php slider_excerpt(intval(get_option('slider_excerpt'))); ?>
                    </div>
                  </div>
  			<?php endwhile; ?>

  
  <ul class="filmstrip">
		 <?php $i=0; rewind_posts(); ?>        
	     <?php while (have_posts()) : the_post(); ?>
         <?php $i++; ?>
    <li>
    <?php if ( get_post_meta($post->ID, 'slideshow_photo', true) ) { ?>
    <img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "slideshow_photo", $single = true); ?>&h=60&w=80&zc=1" alt="<?php the_title(); ?>" width="80" height="60" />
    <?php } ?>
    </li>
    	 <?php endwhile; ?> 
  </ul>

</div>
<?php endif; ?>
</div>

<div class="home_bottom">

	<div class="home_left_content">
    
            <div class="about_block">
            <?php query_posts('page_id='.intval(get_option('aboutpage'))); ?>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            
                    <h2 class="title"><?php the_title(); ?></h2> 
                      
                    <?php if ( get_post_meta($post->ID, 'home_about_pic', true) ) { ?>
                    <img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "home_about_pic", $single = true); ?>&h=100&w=100&zc=1" alt="<?php the_title(); ?>" width="100" height="100" class="about_pic" />
                    <?php } ?>
                    
                    <div class="home_left_text">
                    <?php home_excerpt(intval(get_option('home_excerpt'))); ?>
                    <a href="<?php the_permalink() ?>" class="read_more"><img src="<?php bloginfo('template_url'); ?>/styles/<?php echo get_option('themecolor'); ?>/images/more.gif" alt="" title="" border="0" /></a>  
                    </div>    
        
                                    
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
            
            
            <div class="contact_block">
            <?php query_posts('page_id='.intval(get_option('contactpage'))); ?>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            
                    <h2 class="title"><?php the_title(); ?></h2> 
                    <?php home_excerpt(intval(get_option('home_excerpt'))); ?>          
            <?php endwhile; ?>
            <?php endif; ?>
            
        	<div class="social">
            <a href="<?php echo get_option('home'); ?>/feed" class="rss"></a>
            <a href="http://digg.com/submit?phase=2&amp;url=<?php echo urlencode(get_option('home')); ?>&amp;title=<?php echo urlencode(get_option('home')); ?>" class="digg"></a>
            <a href="http://del.icio.us/post?url=<?php echo urlencode(get_option('home')); ?>&amp;title=<?php echo urlencode(get_option('home')); ?>" class="delicious"></a>
            <a href="http://reddit.com/submit?url=<?php echo urlencode(get_option('home')); ?>&amp;title=<?php echo urlencode(get_option('home')); ?>" class="reddit"></a>
            <a href="http://twitter.com/<?php echo get_option('twitter-account'); ?>" class="twitter"></a>
            </div> 
            
            
            </div>  
            
    
    
    </div>
    
    
    
    <div class="home_right_content">
    
    <h2 class="title">From the blog</h2>
    
    
	<?php query_posts('showposts='.get_option('homepostslimit').'&cat='.get_option('blogcat')); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="home_post" id="post-<?php the_ID(); ?>">
            	<div class="post_date">
                <span class="day"><?php the_time('d') ?></span> <br />
                <span class="month"><?php the_time('M') ?></span>
                </div>
                
                <div class="post_details">
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                </div>
                
			</div>

		<?php endwhile; ?>
	<?php endif; ?>
    <a href="<?php echo get_option('home'); ?>/?cat=<?php echo get_option('blogcat'); ?>" class="read_more"><img src="<?php bloginfo('template_url'); ?>/styles/<?php echo get_option('themecolor'); ?>/images/more.gif" alt="" title="" border="0" /></a>
    
    </div>
 
    
    

</div>


<?php get_footer(); ?>