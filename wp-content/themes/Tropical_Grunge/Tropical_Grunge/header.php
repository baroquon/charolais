<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
<script language="JavaScript" type="text/javascript"><!--
if  (navigator.appName == "Microsoft Internet Explorer")  {
    document.write ('<link href="<?php bloginfo('stylesheet_directory'); ?>/style_ie.css" rel="stylesheet" type="text/css" media="screen" />');
};
//--></script>
</head>
<body>
<div  style="width:100%; height:100%;" class="main_bg" align="center">
 <div class="table_main">
             <div class="header">
                    <div class="co_name">
                        <h1><a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
                        <div class="slogan"><?php bloginfo('description'); ?></div>
                    </div>
                </div>
				<div class="main">
					<div class="table">
						<div class="table_row">
