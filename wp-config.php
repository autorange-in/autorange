<?php
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
define('DB_NAME', 'autorange');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'hrhk');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '3OywM5-<=-Rsp@/=I9t_9UGb-Y/@SoBBqGGV@xx0Nc{}55g5k0S9.|,Y|g6m|,Zr');
define('SECURE_AUTH_KEY',  '^&-FDC0^E.@M]]T4@PA/9;-{,->0Nr?Xd0eD)btYBO4~^zb;p3-?n1#m2,/cgL9b');
define('LOGGED_IN_KEY',    'U.NA% ;Q)u[:{P]pZJ]Fj:+Vqs7REgJBQWA:ebw]-|s)oq4K|etXWZ #-?a=m%?8');
define('NONCE_KEY',        '<$ 8s-048W+dxV9BT381zP>fAqAj)Uo-$nLiG_wi3,F{?.6q |6ex.*oO((Y6AA(');
define('AUTH_SALT',        '.WHtL[~>x`n<:9hbaf=.kmp.jW^/7DV}H<!nxeU?#3r)yE}5?!~|9>:}<`O-xW]B');
define('SECURE_AUTH_SALT', 'g|b?V! #q1{_z8g]-[qoIqtpkR*I<5iiI7|(wJL`UHIedivd7+Nh?A{.*-L9a`C$');
define('LOGGED_IN_SALT',   'UK Z?!,7.zijtCF5F[|99{DF-|((9qO!QpjQg@;b~5:w?m:RT+(9Cb#}Dv# $F&$');
define('NONCE_SALT',       '#bR9igB>p`r@Ux@+2+hm)-MW(p/sAjQ`nnTN+U2SuPjq08C-UWzdtb[U603gd;Dh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ar_';

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
