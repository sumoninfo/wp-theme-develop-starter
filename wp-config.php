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
define('DB_NAME', 'wp_dev-wordpress');

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
define('AUTH_KEY',         '>{VaNqg%8!].MZUI-G^GtJg^qA,62YbtfHM-J%.Qn(ZuuZ1SC~B.P?&U&@a|b-j8');
define('SECURE_AUTH_KEY',  '%InuE]o5!peYO,;SZ(b}>N;L:u?zm=XK5_GC2f7iM<|ndZ1_3`%l?,|elMC~&9q`');
define('LOGGED_IN_KEY',    'ttOQgK C9AmN-?ra](WGGty!;pxeNnL+Iv&gQA%UNRu<[FT#kjCX3j.h1@kJ-B(O');
define('NONCE_KEY',        'C&m_%9(]0UW6)a.$e^b:NbldJ2Jbkl:r,GMpmXHO}uNPYZy6,XX9ol@zPxFBglV|');
define('AUTH_SALT',        '7J7Uk#W`qnYeS^+T+Hg`XY_Bztj+NtUYuThF!,l`).yy#=Smv7i-RR>CUAvwSpF!');
define('SECURE_AUTH_SALT', '1Lf<@U?DTD%fI2u*L;-x>GsIuZLE9I6*ZT&%~HjKn_*8?]AWk >#k^obE2U~E5jr');
define('LOGGED_IN_SALT',   'pF.xbzQS#ZJd5RO(Y1yfCmeT;HPZEfb4w.u.Cry6oavn4hGGpO]H_Cf^SJ}k@WvA');
define('NONCE_SALT',       'srpr|}?%Xv4s4h)sk_<lB,WU7sYMjtT8N!bCX35]yf.E;dd0>A(VxMD#hnrqgT7,');

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
