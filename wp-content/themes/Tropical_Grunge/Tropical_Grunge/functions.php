<?
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => __('Right sidebar','Tropical_Grunge'),
        'before_widget' => '<div class="widget_style">
                           <div class="right_bg">',
        'after_widget' => '</div>
                             </div>',
        'before_title' => '<div class="right_head"><h2>',
        'after_title' => '</h2></div>',
    ));

// Links
function widget_links_with_style() {
   global $wpdb;
   $link_cats = $wpdb->get_results("SELECT cat_id, cat_name FROM $wpdb->linkcategories");
   foreach ($link_cats as $link_cat) {
	 ?>
    <div class="widget_style">
     <div class="right_bg">
        <div class="right_head"><h2><?php echo $link_cat->cat_name; ?></h2></div>
			<ul>
			<?php get_links($link_cat->cat_id, '<li>', '</li>', '<br />', FALSE, 'id', TRUE, 	TRUE, -1, TRUE); ?>
			</ul>
	</div>
    </div>
   <?php } ?>
   <?php }
   if ( function_exists('register_sidebar_widget') )
   register_sidebar_widget(__(' Links With Style'), 'widget_links_with_style');

// Search
    function widget_Tropical_Grunge_search() {
?>
    <div class="widget_style">
     <div class="right_bg">
       <div class="right_head">
        <?php include (TEMPLATEPATH . '/searchform.php'); ?> </div>
</div>
</div>

<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Search'), 'widget_Tropical_Grunge_search');

?>