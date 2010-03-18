<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
	<div id="sidebar-page">

		<ul role="navigation">
        
        	<!-- get the subnavs -->
<?php 
    if ($post->post_parent != 0) { 
        $parent = $post->post_parent; 
    } else { 
        $parent = $post->ID; 
    } 
    $parent_title = get_the_title($parent); 
    $parent_link = get_permalink($parent); 
?>
 
<?php if($post->post_parent)
	
	$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0"); else
	$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
	if ($children) { ?>
    <li>
    <h2>Subpages</h2>
	<ul id="subnav">
		<?php echo $children; ?>
	</ul>
    </li>
<?php } else { ?>
<?php } ?>
        
    </ul>
        
 
 	<ul>
    <li><h2>Featured photos</h2>
    <?php query_posts('showposts='.get_option('pagesidebar_nr_thumbs').'&meta_key=featured&meta_value=1'); ?>
    		<ul class="sidebar_featured_photos">
   			 <?php if (have_posts()) : ?>
				 <?php while (have_posts()) : the_post(); ?>
    			  <li>
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                <?php if ( get_post_meta($post->ID, 'slideshow_photo', true) ) { ?>
    <img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo get_post_meta($post->ID, "slideshow_photo", $single = true); ?>&h=60&w=70&zc=1" alt="<?php the_title(); ?>" width="70" height="60" />
    <?php } ?>
                            </a>                         
                  </li>   
                 <?php endwhile; ?>
             <?php endif; ?>
             </ul>
                 <a href="<?php echo get_option('home'); ?>/?cat=<?php echo get_option('photoscat'); ?>" class="read_more"><img src="<?php bloginfo('template_url'); ?>/styles/<?php echo get_option('themecolor'); ?>/images/more.gif" alt="" title="" border="0" /></a>
    </li>
    </ul> 
  
  
     
    <ul>  
    <li>  
	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>		
	<?php endif; ?> 
    </li>
    </ul>
        
	</div>

