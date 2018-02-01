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
define('DB_NAME', 'dearwitchcreative');

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
define('AUTH_KEY',         '>-LhD=-iVY4ZO24Dn-AN0<6OG,6.ZS`n`S4G]8>9BgA;>&;=,^s``lko)kllJ!wS');
define('SECURE_AUTH_KEY',  ' ;9+m:Sa0%M/yPCY/ynB4D#U)I}4HCv1Q:cK[9v)aCc}0f:DTwk2+@O~EaT,FB2n');
define('LOGGED_IN_KEY',    '~(DW9Bd+9(]Fe4YQ+t_M8y3._}T>/Y=RFyI1KH^+U(7qDG#T]`Lt@On`*9a%VpOl');
define('NONCE_KEY',        'clpDW/clY~j6H_g/XW&am)@4soV-O 7Vg{>&mYw]mKmZe)nEeg%+{MAUn2R7:%P8');
define('AUTH_SALT',        '6>B9q{+1~^Nx.t8:Oh.[(&<?C=6Gac_Awyx9yvy-o=p#Cm|iAGW:l{m(ff^ImX=$');
define('SECURE_AUTH_SALT', 'BRZ|DR8a&4.2(R0(QgckxN_KQ:Mbf_^U{epTHYcIDa%qf%}/[L-,A+]i.EM:$*@g');
define('LOGGED_IN_SALT',   '0(B>A&qrXtLNQhxHm)8ok_4sf~9FYR@vu6WO7(f#!W.1hZ3`]yB=jSnE;{pX$?bh');
define('NONCE_SALT',       'feK4|6zU!>yellI(8{%I*yCA(R8R,ZjTP3>YMfdO_T_s9;~rq>{/2q5bA -AfB];');

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
