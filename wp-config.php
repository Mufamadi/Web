<?php
define('WP_CACHE', false);
define( 'WPCACHEHOME', '/home/amonetco/public_html/m/wp-content/plugins/wp-super-cache/' );
define('WP_HOME','https://m.amonet.co.za/');
define('WP_SITEURL','https://m.amonet.co.za/');
define('WP_MEMORY_LIMIT', '500M');
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'amonetco_mobi2');
/** MySQL database username */
define('DB_USER', 'amonetco_amonet2017');
/** MySQL database password */
define('DB_PASSWORD', 'z]$),+M-B)]9');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'koz29213k8hefuks3gvupow1jkazjcq6jakuo0agsa0gwryeqdjcadtnzyscbcis');
define('SECURE_AUTH_KEY',  'mk1hv0wxdij4mbwdauer6lxl5zlo7c2cgeasqkl4z0nfiqv7hglqn3jbcd6h1wuz');
define('LOGGED_IN_KEY',    '9uurpsdzbbste0twybqzsmdia6wn3tmbfxwekmrtqcyvzkpwjdakmyuylbqgorvn');
define('NONCE_KEY',        'akixlqklaexcbigptmoi8barm5cb8bi8rb2opfujzna9rtota7w8muz4bicpiwg2');
define('AUTH_SALT',        '2fm4s6u141sohkf8mgwcyzeliq02p4uza64zwzqdgodqa7ua00slvg6afrpva8bm');
define('SECURE_AUTH_SALT', 'zzi67phfzaiijxludk0uajpxjgklhlnnrqh8cjyiuqjbpvmjfrrf6wsskrc9d6z2');
define('LOGGED_IN_SALT',   'nkrrttbmpvshoppih6kapikdxjdvlmzu2oxwveqxoiggi6za9his1vx7q9o5v9ly');
define('NONCE_SALT',       'xtq670xwv0jwvkcm93iuqnjxybc2r71lfztxiqnpnlmn1azlexlvazyvvj4g1kr1');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpw3sf_';
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
