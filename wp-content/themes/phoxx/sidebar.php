<?php

/**

 * @package WordPress

 * @subpackage Default_Theme

 */

?>

	<div id="sidebar" role="complementary">
		<ul>

        <li>
            <h2>Categories</h2>
            <ul>  
            <?php wp_list_categories('title_li=&child_of='.get_option('blogcat')); ?>
            </ul>
        </li>

        
		<?php 
        if(in_category(get_option('blogcat')) || is_category(get_option('blogcat')) || intval($myparent)==get_option('blogcat') ) { ?>

        <li>
             <h2>Archives</h2>
            <ul>
            <?php wp_get_archives('type=monthly'); ?>
            </ul>
        </li>

        <? } else { ?>

        <? } ?>

		<ul>
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */

					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
		</ul>


        <?php endif; ?>

		</ul>

	</div>



