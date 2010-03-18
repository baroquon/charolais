<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<div id="content" class="narrowcolumn_single">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
      
                    <div class="post_date">
                    <span class="day"><?php the_time('d') ?></span> <br />
                    <span class="month"><?php the_time('M') ?></span>
                    </div>
                    
                    <div class="post_details_archive">
                        <h2><?php the_title(); ?></h2>
                         
                        <div class="entry">
                            <?php the_content(); ?>
                        </div>
                        
                        <p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?>   <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
                        
    
                    </div>     
                                            
                </div>


	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div>
			<?php 				
            $category = get_the_category(); 			
            $mycurrentcat=$category[0]->cat_ID;			
            $myparent=$category[0]->category_parent;
            ?>
    <?php if(in_category(get_option('photoscat')) || is_category(get_option('photoscat')) || $myparent==get_option('photoscat')) { ?>
    
		<?php include ('sidebar-page.php'); ?>

	<?php } else { ?>
    
      <?php get_sidebar(); ?>
      
    <?php } ?>
    
<?php get_footer(); ?>
