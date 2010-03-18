<?php

/**

 * @package WordPress

 * @subpackage Default_Theme

 */

if ( function_exists('register_sidebars') )
register_sidebars(2, array(
'before_widget' => '<div class="widget">',
'after_widget' => '</div><!--/widget-->',
));



function home_excerpt($num=25) {

	if ($num==0) $num=25;

    $link = get_permalink();

    $limit = $num;

    $excerpt = explode(' ', strip_tags(get_the_excerpt()), $limit);

    if (count($excerpt)>=$limit) {

        array_pop($excerpt);

        $excerpt = implode(" ",$excerpt).'...';

    } else {

        $excerpt = implode(" ",$excerpt);

    }

    $excerpt = apply_filters('the_content', $excerpt);

    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);

    echo ''.$excerpt.'';

}
function slider_excerpt($num=25) {

	if ($num==0) $num=25;

    $link = get_permalink();

    $limit = $num;

    $excerpt = explode(' ', strip_tags(get_the_excerpt()), $limit);

    if (count($excerpt)>=$limit) {

        array_pop($excerpt);

        $excerpt = implode(" ",$excerpt).'...';

    } else {

        $excerpt = implode(" ",$excerpt);

    }

    $excerpt = apply_filters('the_content', $excerpt);

    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);

    echo ''.$excerpt.'';

}




function wp_dropdown_bookmarks($cid){



  $taxonomy = 'link_category';

  $title = 'Link Category: ';

  $args ='';

  $terms = get_terms( $taxonomy, $args );

  if ($terms) {

  ?>

  <select name="footerlinkscategory">

  <option value="0">Select Category</option>

  

<?php      

    foreach($terms as $term) {

      

			$selected="";

			if ($cid==$term->term_id)

			$selected="selected";

        echo '<p>' . $title .' ID = '. $term->term_id . ' ' . $term->name . ' contains ' . $term->count . ' link(s). </p> '; 

		echo '<option '.$selected.' value="'.$term->term_id.'">'.$term->name.'</option>';

 

    }

	echo "</select>";

	

  }

  

  

}



add_action('admin_menu', 'add_theme_pages');

add_option('themecolor', 'black');
add_option('photoscat', '');
add_option('blogcat', '');

add_option('aboutpage', '');
add_option('contactpage', '');

add_option('home_excerpt', '25');
add_option('homepostslimit', '3');
add_option('sliderlimit', '9');
add_option('slider_excerpt', '25');

add_option('pagesidebar_nr_thumbs', '9');

add_option('contactemail', '');
add_option('twitter-account', '');
add_option('analytics', '');



function add_theme_pages() {

	add_theme_page('PHOXX Options', 'PHOXX Settings', 8, 'colorthemes', 'color_themes_page');

}



function color_themes_page() { ?>



<div class="wrap"> <?php echo "<h2 style='margin-bottom:25px;'>" . __( 'PHOXX Theme Settings') . "</h2>"; ?>

	<form method="post" action="options.php">

		<?php wp_nonce_field('update-options'); ?>

		<h2>Theme Color</h2>

		<p>Theme Color:

			<select name="themecolor" id="themecolor" value="<?php echo get_option('themecolor'); ?>">

				<option name="black" value="black"<?php if(get_option('themecolor') == "black") { echo ' selected'; } ?>>Black</option>

				<option name="light" value="light"<?php if(get_option('themecolor') == "light") { echo ' selected'; } ?>>Light</option>

				<option name="green" value="green"<?php if(get_option('themecolor') == "green") { echo ' selected'; } ?>>Green</option>

				<option name="blue" value="blue"<?php if(get_option('themecolor') == "blue") { echo ' selected'; } ?>>Blue</option>

                <option name="brown" value="brown"<?php if(get_option('themecolor') == "brown") { echo ' selected'; } ?>>Brown</option>

			</select>

			

		</p>

		<h2>Category Settings</h2>

		<p>Select Photos Category:

			<?php wp_dropdown_categories('show_option_none=Select category&hide_empty=0&name=photoscat&selected='.get_option('photoscat')); ?>

		</p>
          

		<p>Select Blog Category:

			<?php wp_dropdown_categories('show_option_none=Select category&hide_empty=0&name=blogcat&selected='.get_option('blogcat')); ?>

		</p>          

   
        
        <h2>Featured slideshow settings</h2>

		<p>Number of thumbs in slideshow

			<input type="text" name="sliderlimit" id="sliderlimit" size="20" value="<?php echo get_option('sliderlimit'); ?>" />

		</p> 
		<p>Slider Description Text Maxlimit

			<input type="text" name="slider_excerpt" id="slider_excerpt" size="20" value="<?php echo get_option('slider_excerpt'); ?>" />

		</p> 

        <h2>Homepage sections</h2>



		<p>Select home about section content:

			<?php wp_dropdown_pages('name=aboutpage&selected='.get_option('aboutpage')); ?>

		</p>

        

		<p>Select home contact section content:

			<?php wp_dropdown_pages('name=contactpage&selected='.get_option('contactpage')); ?>

		</p>    
  
		<p>Home text Maxlimit

			<input type="text" name="home_excerpt" id="home_excerpt" size="20" value="<?php echo get_option('home_excerpt'); ?>" />

		</p>   
        
		<p>Number of posts from Blog on home page

			<input type="text" name="homepostslimit" id="homepostslimit" size="20" value="<?php echo get_option('homepostslimit'); ?>" />

		</p>

        <h2>Pages sidebar featured photos</h2>
        
         
		<p>Select nr of photos on pages sidebar

			<input type="text" name="pagesidebar_nr_thumbs" id="pagesidebar_nr_thumbs" size="20" value="<?php echo get_option('pagesidebar_nr_thumbs'); ?>" />

		</p>  


        

        <h2>General settings</h2>

       <p>Contact email adress



			<input type="text" name="contactemail" id="contactemail" size="20" value="<?php echo get_option('contactemail'); ?>" />

		</p>       

  		<p>Twitter account

			<input type="text" name="twitter-account" id="twitter-account" size="20" value="<?php echo get_option('twitter-account'); ?>" />

		</p> 

        

         <p>Analytics code

			<input type="text" name="analytics" id="analytics" size="20" value="<?php echo get_option('analytics'); ?>" />

		</p>  

         

		

		<br>

		

		<input type="submit" name="Submit" value="<?php _e('Save Changes') ?>" />

		<input type="hidden" name="action" value="update" />

		<input type="hidden" name="page_options" value="themecolor,photoscat,pagesidebar_nr_thumbs,homepostslimit,sliderlimit,blogcat,aboutpage,contactpage,slider_excerpt,home_excerpt,contactemail,analytics,twitter-account" />

	</form>

</div>

<?php } ?>