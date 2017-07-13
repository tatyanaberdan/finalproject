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
define('DB_NAME', 'finalproject');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ' iN=YERE7FOFFT`G56BZ^f:/+1i5eLI<g&@:$ds@;:(zl$/h5 v!@t&j7x9N.tt9');
define('SECURE_AUTH_KEY',  '/}a-Ao9@iy:buRQ_p=9G9X-:_u4:-/Y,H&_a+INn>Yf.%VYRDv*T4.7ib!Q!E}b!');
define('LOGGED_IN_KEY',    '@[eM_l:z.U&f<(d,r!4`PextiEESDCYhbDFSIivd(ln*fz4#Qcj$9cu*0%[iy4,m');
define('NONCE_KEY',        'uUOF^QfR2WM8T0h{!5&YRG7,2o1)-9~V</.!eiW8bB2E,`s*;0%,(i8]F#-ad$o&');
define('AUTH_SALT',        '+M{8V/yE{smxQDSriAm0HbeI_Zz]fZ|-qU$ZGyo4+oCt/H5B,-,9kW*k$O]>1Irn');
define('SECURE_AUTH_SALT', 'U%5T Om=C7FXDmX)NAZo:ZF[;s*$l~5O3ki7Qy5L{hJCs-{;hEWS]i2#Dpzjpg7@');
define('LOGGED_IN_SALT',   '`MWwSH0/<>6$F I%?>g1l=6uGFswN9>gF$/!QxQCgkS#^^HGeh:rokD[tN#8ck;u');
define('NONCE_SALT',       'K{(x/_<p=j:f$ Yp99GJ|`RcO#urF}S_6n>N*X?GJU}|CyvfU2)?cYv~3dy|2M{x');

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
