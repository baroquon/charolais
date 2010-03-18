							<?php get_header(); ?>

															<div class="left">
                                                            <div class="left_bg">
                                                  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/left_top.gif" alt="" width="458" height="25" />
															
															
		<?php if (have_posts()) : ?>

		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>				
		<h2 class="pagetitle">Archive for the '<?php echo single_cat_title(); ?>' Category</h2>
		
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
		
	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
		
	  <?php /* If this is a search */ } elseif (is_search()) { ?>
		<h2 class="pagetitle">Search Results</h2>
		
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Author Archive</h2>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>

		<?php } ?>

<?php while (have_posts()) : the_post(); ?>
									<div class="table2">
									<div class="table_row2">
										<div class="head1">
                                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/fl.gif" alt="" width="12" height="12" align="left" style="margin:2px 10px 0 15px;" />
                                                <div class="head_txt">
													<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a><br/>
<?php the_time('m jS, Y') ?> <!-- by <?php the_author() ?> -->
												</div>
                                        </div>
									</div>
								</div>
								<div class="content_txt">
									<?php the_content('Read the rest of this entry &raquo;'); ?>
								</div>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/h_l.gif" alt="" width="380" height="1" align="top" style="margin:0px 0px 0px 40px "/>
								<div class="content_more">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/images/showpost.gif" alt="" width="9" height="9" align="top" style="margin:2px 5px 0px 0px "/><a href="<?php comments_link(); ?>">Read Comments(<?php comments_number('0', '1', '%', 'number'); ?>)</a>
								</div><br style="clear:both" />
														<?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div><br style="clear:both" />
	
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?><img src="<?php bloginfo('stylesheet_directory'); ?>/images/left_bottom.gif" alt=""  height="8" align="left" style="padding:0px 0px 0px 0px; margin:0px 0px 0px 0px;" /></div></div> <?php get_sidebar(); ?>
                        </div>
                    </div>
                    </div>
                      </div>
	<div class="footer">
	<?php get_footer(); ?>
	</div>
    </div>
</body>
</html>