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
define('DB_NAME', 'wptest_db');

/** MySQL database username */
define('DB_USER', 'wptest_user');

/** MySQL database password */
define('DB_PASSWORD', '4a54s(&^*gbsdf');

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
define('AUTH_KEY',         ';q;u%y%~^vL6&Dr+Fxo#zP}x}$S DSQ5C82ae<T62Oi ,/!xwlP9sTsAqJb7iYWz');
define('SECURE_AUTH_KEY',  'iF<hP[@_(v-g08a?(O9jwuqd&WLRXBC!.b,BV;^td ]J|;,[N7}J0`7?x(3~!;k+');
define('LOGGED_IN_KEY',    '?yG`ZS0W,{I>8yTUx~`+$:q7sUgT%gv(>EB7zP;[/|tmq0Z<Wc:Gr6<ngCwdBhD(');
define('NONCE_KEY',        '.[*bW%1rQ_A7j$-*<dlB-1YzinL^)N,GU.^`nm&g9W#XeCOp%Q%kRwd6oy=.nly}');
define('AUTH_SALT',        'ktBn!?UR>+^wUA~4Z`avm5+r>yI{k{!,8EuHwv)3HDwFu-egMYiEdR~q>#G03I-3');
define('SECURE_AUTH_SALT', 'hq37V*A-t86SwpagZ+poNDeP&3W}UP9GyjDcxEp+-B1;.zsY<rLhv-^@(KW1X#2f');
define('LOGGED_IN_SALT',   'n4&E{taBtc#*#YOdzSe ^RRv) svw1X?[P-K5n5*kZJW2M%Uj{~.`/)B[NBLRUi:');
define('NONCE_SALT',       'Ke<|c*TnY@HwN|/f*YURq=XW*W=}.&jlLxH^jz75vx&$R5Ik*e|I[z+-D~s/::k>');

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
