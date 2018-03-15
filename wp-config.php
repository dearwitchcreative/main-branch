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
define('DB_NAME', 'dear-witch');

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
define('AUTH_KEY',         ',lsb(FRscpv#FWh{zuP2^77=O[10LIxI8{W@wFA?`Rp6TVNpgl)uvH)_|Bg>!OfV');
define('SECURE_AUTH_KEY',  '%5t*v^1PB<XID&nnbt<+.xK&(|#Fak}%pFlloHAGS<{cOi,mUNT{-Wos>++GJ& x');
define('LOGGED_IN_KEY',    'Ta>]5X5`g4X.V$a}I-Jx,ZF6PKw_-AvwhxhM)fj5p3VY)dMx=U)!+2!#SdAGu9EN');
define('NONCE_KEY',        'u;iOn%aA<%PH(*z96^<qb,g5}~UirK<sznh<9Bgrs8w%MQcVD!1?,s<P0Ea:iw}l');
define('AUTH_SALT',        'nk=!Nn%#zFHDQ?&3lUZe;dclhxoF4A1QQhw8I.. kXn>LlG)p=,8yNl, }Kz?6{d');
define('SECURE_AUTH_SALT', '4H`|l4G6F rTa=*##C?CE+75:)$-pe13I(-itEjOA@J/+-6<<HtR(Nq87[k-2RFh');
define('LOGGED_IN_SALT',   ' 2a4wwlrl;WH,#!@S?5;H&J~w+xt{p#:;F}<nSv0?H?48 77J8g@;}w?:1Vni|M|');
define('NONCE_SALT',       '%W7U]EiRbg4fkiQt| K9exK^hAB+A}_Etx1LE8vX[2n:q!G(@KShY{Ab;&VK|=t*');

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
