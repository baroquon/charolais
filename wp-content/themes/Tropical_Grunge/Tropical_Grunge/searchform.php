					<form method="get" id="searchform" action="<?php bloginfo('home'); ?>" style="padding:0px 0px 0px 0px; margin:0px 0px 0px 0px">
					<input type="text"  name="s" id="s" class="form" value="<?php echo wp_specialchars($s, 1); ?>"/>
                    <input value="Search" type="submit" class="s_button" />
                    </form>