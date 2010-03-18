<?php
// ** This is my new MySQL settings ** //
define('DB_NAME', 'wp-database'); // The name of the database we just made
define('DB_USER', 'root'); // Your default MAMP MySQL username
define('DB_PASSWORD', 'root'); // Your default MAMP and password
define('DB_HOST', 'localhost:8889'); // Your default MAMP SQL port

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
