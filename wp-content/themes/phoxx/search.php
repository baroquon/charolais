<?php

/**

 * @package WordPress

 * @subpackage Default_Theme

 */



get_header(); ?>



	<div id="content" class="narrowcolumn" role="main">



	<?php if (have_posts()) : ?>

		<h2 class="title">Search Results</h2>

        <div class="page_entry">
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

		</div>
		<div class="navigation">

			<div class="alignleft"><?php next_posts_link('Older Entries') ?></div>

			<div class="alignright"><?php previous_posts_link('Newer Entries') ?></div>

		</div>

	<?php else : ?>

		<h1>No posts found. Try a different search!</h1>

		<?php /*?><?php get_search_form(); ?><?php */?>

	<?php endif; ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

