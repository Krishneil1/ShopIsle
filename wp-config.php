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
define('DB_NAME', 'shopIsle');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ']Z< G^=,uGF9ueeC9.Lou3^?zv~_r.wM`tokP6d@ul6lmbJ1|@l,W -KkEn95xN7');
define('SECURE_AUTH_KEY',  '5uwO=61f~axX;{A1D5_d&(*IEn(MU0 w(z{3LJuE}.$/|qE~gqI]<{098&LvnFMZ');
define('LOGGED_IN_KEY',    'SYS{N!q2k:!ksNg7&Ai:%ayGALcBo5?yXY$7DRrIcR%5P$tt3ZRV&1M1DN$;apet');
define('NONCE_KEY',        '[`U^k/{DcY%Pkg!oM[,zhHsXcgRZ c@omD}^2:R|<je^u,e3zRrXLrPAVq& 6tRr');
define('AUTH_SALT',        ':Swfw>:>l@+;5e`Wu;IYF0$sp#2-:EItUmI{S+&g#^;rM(]_`;81iYHgLL[o/lol');
define('SECURE_AUTH_SALT', 'YIf+p9>`3J:w o5e-*8zB~%mr$9l__e<h*0fR nJk))O2^2Rn&i;Tc]|i27R&sL6');
define('LOGGED_IN_SALT',   '[Y%<5.;L4w>H0*Z?Nb8F!8agFm4TGHS%kwOOqT_EG8xY !51d%_|EKwP6yMV/JnV');
define('NONCE_SALT',       'vhxIE_4L)<rP-.I36YZ$3_B/,0lQxV0HsxN?&TH.ITP8(%>hs|?RN ;t_<QtULr}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
