<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/<?php echo get_option('themecolor'); ?>/themestyle.css" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/ddsmoothmenu.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/ddsmoothmenu.js"></script>

<script type="text/javascript">
ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})
</script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/styles/<?php echo get_option('themecolor'); ?>/scripts/jquery.galleryview-1.1.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.timers-1.1.2.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#photos').galleryView({
			panel_width: 960,
			panel_height: 340,
			frame_width: 80,
			frame_height: 60,
			nav_theme: 'light',
			background_color: 'none',
			border: 'none',
			overlay_position: 'bottom'
		});
	});
</script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/hover.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/lightbox.css" type="text/css" media="screen" />
	<script src="<?php bloginfo('template_url'); ?>/scripts/jquery.lightbox.js" type="text/javascript"></script>
	<script>
		$(document).ready(function(){
			$(".lightbox").lightbox();
		});

	</script>
   
	<script src="<?php bloginfo('template_url'); ?>/scripts/slide.js" type="text/javascript"></script>

<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/ie.css" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/supersleight-min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/DD_belatedPNG.js"></script>
<script>
DD_belatedPNG.fix('.featured-info');
</script>
<![endif]-->


<style type="text/css" media="screen">

<?php
// Checks to see whether it needs a sidebar or not
if ( empty($withcomments) && !is_single() ) {
?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbg-<?php bloginfo('text_direction'); ?>.jpg") repeat-y top; border: none; }
<?php } else { // No sidebar ?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbgwide.jpg") repeat-y top; border: none; }
<?php } ?>

</style>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="main_container">
	
    <div class="header">
       		<div id="logo">
            <h1><a href="<?php echo get_option('home'); ?>/"><? php /* bloginfo('name'); */ ?></a></h1>
		    <div class="description"><?php /* bloginfo('description');  */?></div>
            <?php ?><a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_url'); ?>/styles/<?php echo get_option('themecolor'); ?>/images/logo.png" alt="" title="" border="0" /></a><?php ?>
            </div>
            
            <div id="search_top">
            
                <div id="panel">
                    <div class="content clearfix">
                        <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
                        <input type="text" value="<?php the_search_query(); ?>" name="s" class="search_input" />
                        <input type="submit" value="go" class="searchsubmit" />
                        </form>
                    </div>
                </div> 
            
                <div class="tab">
                    <ul class="login">
                        <li id="toggle">
                            <a id="open" class="open" href="#">search</a>
                            <a id="close" style="display: none;" class="close" href="#">search</a>			
                        </li>
                    </ul> 
                </div> 
                
            </div> 
            

            <div id="smoothmenu1" class="ddsmoothmenu">
                <ul>
                    <li<?php if (is_home()) { echo ' class="current_page_item"'; } ?>><a href="<?php bloginfo('url'); ?>">home</a></li>             
                    <?php wp_list_categories('sort_column=menu_order&title_li='); ?> 
                    <?php wp_list_pages('sort_column=menu_order&title_li='); ?> 
                </ul>
            </div>   
   
            
            
    </div>
    
    <div class="center_content">