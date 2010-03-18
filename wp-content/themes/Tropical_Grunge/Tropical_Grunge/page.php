							<?php get_header(); ?>
                                   <div class="left">
                                   <div class="left_bg">
                                                  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/left_top.gif" alt="" width="458" height="25" />


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<br style="line-height:7px "/>
                            <div class="head1">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/fl.gif" alt="" width="12" height="12" align="left" style="margin:2px 10px 0 15px;" />
                            <div class="head_txt">
                            <h2><a href="#"><?php the_title(); ?></a></h2></div>
                            </div>
                            <div class="content_txt">
							<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
	
				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

				
						
						<p class="postmetadata"><?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?></p>
						
					</div>

		<div style="clear:both; font-size:20px; line-height:20px"><br/></div>

	

	  <?php endwhile; endif; ?><img src="<?php bloginfo('stylesheet_directory'); ?>/images/left_bottom.gif" alt=""  height="8" align="left" style="padding:0px 0px 0px 0px; margin:0px 0px 0px 0px;" /></div>
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