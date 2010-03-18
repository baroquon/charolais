<div class="right">
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(__('Right sidebar','Tropical_Grunge')) ) : else : ?>
                               <div class="widget_style">
                                 <div class="right_bg">
                                 <div class="right_head"><?php include (TEMPLATEPATH . "/searchform.php"); ?></div>
                                </div>
                                </div>
                               <div class="widget_style">
                                 <div class="right_bg">
                                 <div class="right_head"><h2>Pages:</h2></div>
                                    <ul>
										<?php wp_list_pages('title_li='); ?>
									</ul>
                                </div>
                                </div>

                               <div class="widget_style">
                                    <div class="right_bg">
                                    <div class="right_head"><h2>Categories:</h2></div>
									<ul>
										<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
									</ul>
                               </div>
                               </div>

                               <div class="widget_style">
                                   <div class="right_bg">
                                   <div class="right_head"><h2>Archives:</h2></div>
									 <ul>
										<?php get_archives('monthly','10','custom','<li>','</li>'); ?>
									</ul>
                                </div>
                                </div>
                                <div>
								<?	$ars['category_before']='<div class="right_top">';
									$ars['category_after']='<div class="right_bottom"></div></div>';?>
								<?php wp_list_bookmarks($ars); ?>
								</div>
                                <div class="widget_style">
                                        <div class="right_bg">
                                        <div class="right_head"><h2>Meta:</h2></div>
									<ul>
										<?php wp_register('<li>', '</li>'); ?>
	<li><?php wp_loginout(); ?></li>
	<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
	<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
	<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
	<?php wp_meta(); ?>
									</ul>
                                </div>
                                </div>
<?php endif; ?>
							</div>