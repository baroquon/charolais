=== WP-Cufon ===
Contributors: mountbatt
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=5433586
Tags: cufon, font, replace, sifr
Requires at least: 2.5
Tested up to: 2.8.5
Stable tag: 1.6.3

Simple Plugin to enable Cufon fontreplacement

== Description ==

This Plugin makes it totally easy to implement Cufon into your WordPress Blog.
The only thing you have to do is converting your fontfiles and upload them into the plugins directory.
You can enable the objects you want to get replaced in the Admin Menu of WordPress.


History:

1.6.3:
- font names with a dash are now matched (thanks Michael!)

1.6.2:
- small changes
- added a new hint in "FAQ"

1.6.1:
- Sorry. My fault. I did something wrong during uploading to the Wordpress Repository. Im new to this. So now comes version 1.6.1

1.6:
- With great feedback from <a href="http://www.aldosoft.com" target="_blank">Michael A. Alderete</a> now we are able to use WP-Cufon in different directories than the standard /wp-content/plugins/ - thats great. The plugin now also looks for your WP_CONTENT_DIR in wp-config.
- now you can set a font with <em>Cufon.set('fontFamily', 'Your Font Name')</em>
- updated to the latest cufon-yui.js (v1.02)

1.5:
- Changed: Now the plugin only loads the needed fonts that are entered by your replacement scripts (for this you have to enter the exact fontFamily names!) (Thanks John!)
- Added: Font-Directory. To keep your own files wp-cufon now uses an external font-folder! check the "installation" page.
- Added: Wordpress 2.8.1 compatibility
- Changed: now with compressed cufon-yui.js
- Added: "Delay Fix"-Option to hack the delay on some websites. (beta)
- Still ToDo: Fix the PlugIn to work with WordPress installations in own subdirectories. (Help needed!)

1.4:
- Updated to the latest cufon.js (still uncompressed)
- but the important thing now: i deleted the linotype frutiger fontfile
- PLEASE DELETE THE Frutiger_LT_Std.font.js - We/You dont have any license for that!!!
- now wp-cufon comes with the nice freefont "Vegur" (regular & bold)
- i have to say sorry to you and sorry to linotype!

1.3.1:
- Updated cufon to the latest changes from sorccu
- e.g. line-heigt fix for ie6/7 and much more

1.3:
- Fixed a bug: on some server it was impossible to save changes
- Added a checkbox to enable jQuery (it works in non conflict mode, only if necessary!) - now you can use #selector in your cufon scripts.
- updated to newest cufon-yui.js

1.2:
- New cufon-yui.js - the developer added kerning! yeah. You need to re-render your fontfiles with the <a href="http://cufon.shoqolate.com/generate/" target="_blank">generator</a>.

1.1.2:
- Added JavaScript function for better InternetExplorer compatibility (important!)

1.1.1:
- Fixed first value (stripslashes) (thanks Ryan!)

1.1:
- Bugfix
- added first (h1) value

1.0:
Initial Release

== Installation ==

1. Upload `wp-cufon` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Convert or get some compatible .font.js fontfiles
4. Create a directory with the name `fonts` in /wp-content/plugins/
5. Upload your font-files to `/wp-content/plugins/fonts/`
6. Go to the Settings Page and enter your replacement codes with the "font-family" names of your fonts 
--> Example: Cufon.replace('h1', { fontFamily: 'Vegur' });
--> you can test the free Vegur fontfile from /wp-cufon/example/ - load the file into your external font directory.

== Frequently Asked Questions ==

= It won't run =

Please have a look in your Blogs Sourcecode and look out if there are any "WP Cufon" tags.
If yes, then it should do the work. Maybe your fontfiles are corrupt or not recognized.
See if they are in the right directory. If yes, look again in the Sourcecode of your Blog - now there should be a JavaScript that loads your fontfile.
Now check if you entered the right replacement source in the Settings Menu of the Plugin. See the samples or the screenshot!

= I'm getting some foreach() errors on my homepage =

You have to create the /wp-content/plugins/font/ directory and upload some fontfiles into it. Then the error message will hopefully disappear!

= I added the right fontname to the replacement code, but nothing happens =

Try to open the fonts .js file and change the Fontname into one single word or delete the spaces in the name!
Example:
Original MyFont.js: Cufon.registerFont({"w":200,"face":{"font-family":"Arial Black Extended"É
Changed: MyFont.js: Cufon.registerFont({"w":200,"face":{"font-family":"ArialBlackExtended"É


== Screenshots ==

1. Some free Fonts ...
