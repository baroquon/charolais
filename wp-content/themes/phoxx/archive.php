<?php

/**

 * @package WordPress

 * @subpackage Default_Theme

 */	
get_header();

?>


	<?php 				
    $category = get_the_category(); 			
    $mycurrentcat=$category[0]->cat_ID;			
    $myparent=$category[0]->category_parent;
    ?>

	<?php if(in_category(get_option('photoscat')) || is_category(get_option('photoscat')) || $myparent==get_option('photoscat')) { ?>

    <div class="narrowcolumn_photos">
    <h2 class="title">My photos</h2>
    <div class="photos_subcategories">
    	<div class="photos_subcategories_left">
    	Browse cateogories:
		</div>
		<?php				
			$this_category = get_category($cat);
			if (get_category_children(get_option('photoscat')) != "") {
			echo "<ul>";
			?>
            <li <?php if (is_category(get_option('photoscat'))) echo 'class="cat-item cat-item-1234 current-cat"'; ?>><a href="<?php bloginfo('url'); ?>/?cat=<?php echo get_option('photoscat') ?>">view all</a></li>
            <?php 
			wp_list_categories('show_count=0&title_li=&child_of='.get_option('photoscat'));
			echo "</ul>";
			}
        ?>
        

    </div> <!--end of photos_subcategories-->

 


				<?php while (have_posts()) : the_post(); ?>

                <div class="photo_thumb">

       <div class="photo_thumb_bg">
	 <a class="lightbox" rel="photos" href="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "photo_lightbox", $single = true); ?>&h=600&w=800&zc=1" alt="<?php the_title(); ?>">
    <?php if ( get_post_meta($post->ID, 'slideshow_photo', true) ) { ?>
    <img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "slideshow_photo", $single = true); ?>&h=255&w=268&zc=1" alt="<?php the_title(); ?>" width="268" height="255" />
    <?php } ?>
     </a>
            <div class="featured-info"> 
                <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                <?php slider_excerpt(intval(get_option('slider_excerpt'))); ?>
            </div>
            
            <div class="zoom"><a class="lightbox" rel="photos" href="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "photo_lightbox", $single = true); ?>&h=600&w=800&zc=1" alt="<?php the_title(); ?>">
            <img src="<?php bloginfo('template_url'); ?>/styles/<?php echo get_option('themecolor'); ?>/images/zoom.gif" alt="" title="" border="0" />
            </a>
            </div>
            
            <a class="photo_details_link" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
            <img src="<?php bloginfo('template_url'); ?>/styles/<?php echo get_option('themecolor'); ?>/images/details.gif" alt="" title="" border="0" />
            </a>
            
       </div>

				</div>

            

                <?php endwhile; ?>
	        <div class="navigation_photos">
                <div class="alignleft"><?php next_posts_link('Older Entries') ?></div>
                <div class="alignright"><?php previous_posts_link('Newer Entries') ?></div>
		    </div>

   </div> <!--end of narrowcolumn for photos category-->

    



    <?php } else { ?>



	<div id="content" class="narrowcolumn" role="main">

		<?php if (have_posts()) : ?>
 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="title"><?php single_cat_title(); ?></h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="title">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="title">Archive for <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="title">Archive for <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="title">Archive for <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="title">Author Archive</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="title">Blog Archives</h2>
 	  <?php } ?>



		<?php while (have_posts()) : the_post(); ?>

		   <div <?php post_class() ?>>

            	<div class="post_date">
                <span class="day"><?php the_time('d') ?></span> <br />
                <span class="month"><?php the_time('M') ?></span>
                </div>
                
                <div class="post_details_archive">
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                     
                    <div class="entry">
                        <?php the_excerpt(); ?>
                    </div>
                    
                    <p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?>   <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
                    
                   <a href="<?php the_permalink() ?>" class="read_more"><img src="<?php bloginfo('template_url'); ?>/styles/<?php echo get_option('themecolor'); ?>/images/more.gif" alt="" title="" border="0" /></a>

                </div>
			</div>
		<?php endwhile; ?>  

        <div class="navigation">
			<div class="alignleft"><?php next_posts_link('Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries') ?></div>
		</div>

	<?php else :
		if ( is_category() ) { // If this is a category archive

			printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));

		} else if ( is_date() ) { // If this is a date archive

			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");

		} else if ( is_author() ) { // If this is a category archive

			$userdata = get_userdatabylogin(get_query_var('author_name'));

			printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);

		} else {

			echo("<h2 class='center'>No posts found.</h2>");

		}

	endif;
?>
		</div>

     <?php get_sidebar(); ?>

    <?php } ?>
<?php get_footer(); ?>