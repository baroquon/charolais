							<?php get_header(); ?>
                                                <div class="left">
                                                 <div class="left_bg">
                                                  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/left_top.gif" alt="" width="458" height="25" />
                                                  <?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
                                <div class="table2">
									<div class="table_row2">
                                        <div class="head1">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/fl.gif" alt="" width="12" height="12" align="left" style="margin:2px 10px 0 15px;" />
											<div class="head_txt">
													<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
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
		<div class="content_txt">
<h2>Not Found</h2>
</div>
<div class="content_txt">
		<p class="center">Sorry, but you are looking for something that isn't here.</p>


</div>
	<?php endif; ?>          
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/left_bottom.gif" alt=""  height="8" align="left" style="padding:0px 0px 0px 0px; margin:0px 0px 0px 0px;" />
                            </div>
							</div>
                            <?php get_sidebar(); ?>

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