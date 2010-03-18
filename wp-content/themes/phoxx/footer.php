<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

</div>
<div id="footer">

	<div class="left_footer">
		&copy; Copyright <?php bloginfo('name'); ?> 2010. All Rights Reserved 
    </div>	
        
    <div class="right_footer">
        <ul>                                                       
        <li<?php if (is_home()) { echo ' class="current_page_item"'; } ?>><a href="<?php bloginfo('url'); ?>">home</a></li>             
        <?php wp_list_categories('sort_column=menu_order&title_li='); ?> 
        <?php wp_list_pages('sort_column=menu_order&title_li='); ?> 
        </ul>
    </div>                

</div>

</div>
<?php wp_footer(); ?>
        
 <?php if (trim(get_option('analytics')) != '') {  ?> 
       
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("<?php echo get_option('analytics'); ?>");
pageTracker._trackPageview();
} catch(err) {}</script>

<?php } ?>    

</body>
</html>
