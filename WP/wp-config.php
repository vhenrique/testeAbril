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
define('DB_NAME', 'quatrorodas');

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
define('AUTH_KEY',         '{Vi5jVV]K[G)DVPY?e-*d^lRfoFf4gf;W+$BSh.5QF( np8vQr=#E-$gVK,p]<q_');
define('SECURE_AUTH_KEY',  '_+xYg2k`q%dpfH_XZ1d&278Gr>Ejm<=w/j)KYaR,Qx|Z/u>)*i/<)~p]a8*^zw~1');
define('LOGGED_IN_KEY',    '-o<SW(U$@]k~Tl:^+j>NYv0re]I@NttGCm}L*H{0^S.AqvDIjsx6eAC)lVfGmUN;');
define('NONCE_KEY',        ' ^FF%7XsL=7<:4t>3g{tAkW^Xo]SSR}%5K@)pyfTqV!57!G%lQU F)RfP-p-J|ds');
define('AUTH_SALT',        'iY&-+vL|AGbfJ[whsIeiV.`?;CVR)ltf}uWY=?X;OcF0l,WTPq)%{9-2zky`)#N?');
define('SECURE_AUTH_SALT', ',|T;U8edB]nM89iys?Rj[ FamNLxI7iHUmFR?C=:({->`hz|rlQz[}$YmP;k]W)L');
define('LOGGED_IN_SALT',   'y1K{71c2XxS(1ZY@IEa<^1]$$gM6I[^p;E4q|nN:smq)}Qz.E:8~gfyQ2PkE<Uw,');
define('NONCE_SALT',       'oF:mToWm@xel{rlVHb9r6Q!9$ql:x6&C!pfnOp;nF*)MZ4J{hY@.!pA -R1>5~xh');

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
