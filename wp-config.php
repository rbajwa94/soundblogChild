<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'soundblogChild');

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
define('AUTH_KEY',         'gm-m3LvM8!pkLzm?] S/xb[a9iKzc>5{~7=T}^V.2(e(n&}dVT8ruQTO@w1s35C[');
define('SECURE_AUTH_KEY',  ',$6Hd>CwROzPt,+)&-EPe;CKA!Qg>h>PkH^H3]rHD6nI<9I.5!%Xfhq=N#aiC+s%');
define('LOGGED_IN_KEY',    'swI^xqb=Luj?ExEe0k#V]bH&x0AT=*YuvPp>34@&D|,=xz^/)Q:|C`&.qWr`)3sU');
define('NONCE_KEY',        'v8PFT.KJ=/nD|(Q8]!_r4#/N5O`=Fn@o3(p[D19/YF1pdmhyF^~FUEk&Sm8e-}m$');
define('AUTH_SALT',        '|l`LHcTP&}Et4~M/e%siD@*7Y|H&)ab<v|Nf+Rgh,<u@fBmha[`VMJXB`7lPyq?m');
define('SECURE_AUTH_SALT', 'o7(}}7yF7TSKW7f%-_n6LHpnP{E:hncaW=$Qf&Q%<FN><p(eb|r|HZPk)e6D_!rr');
define('LOGGED_IN_SALT',   'B_%MU^kFV?lVBr#Y$>eHy<z.4M)5Rn|j2{&<^Ldq{g(F)d2<[s]=NW%*j||PtTt,');
define('NONCE_SALT',       '!bg~bUTyy&W!oI6$aJB3tYZfO4oBzy9XN))M@amlT(;;L+b;C?t|?tJ_,n64@O@D');

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
define('WP_DEBUG', true);

// Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);

// Enable display of errors and warnings
define('WP_DEBUG_DISPLAY', true);
@ini_set('display_errors',0);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
