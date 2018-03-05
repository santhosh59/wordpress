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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'g$^[Ka<zHKAWPJfM0.=}uyS7U12axdSKhR+7Wu@pl@ty{4>@NBog`Lz]K4YJzCF{');
define('SECURE_AUTH_KEY',  '5%F&$s~-aIhW~hWYC]j%4re]s`vp>K/3:E`,8G!~:&9#V3`o|iIq%Qe=Z[%*ziAV');
define('LOGGED_IN_KEY',    'p%aG!,E8H6|4gC~+iY0F`?0[rru-}6Uy6cRS!frzlK8we;d8s(9> ?KQ%q#5*xUH');
define('NONCE_KEY',        '>J.-NS)i/~j`@8Y{9Kek3yn1xe)(xgQ&PB(exo7va;;4jO4WFE27,3J|{un ZQ;9');
define('AUTH_SALT',        '^p&`p1hg+l.e`s90Q4S={N9j41d=F/tFZ6TH;0aS@~~/LD?#[;0mPkoTA;Cot/$K');
define('SECURE_AUTH_SALT', '^~mBF,Tk8f9yt1PLJJs7;_nFsU]xj4&K9U2P_Ae[+YhhrWy9uj,$b.cB[]jE[-s|');
define('LOGGED_IN_SALT',   '#``xH{x,^M)(*2(;S4g56@0b4b(~m1F}7arN2a=LUE%XAVjoF<283vm{cs_fHZPD');
define('NONCE_SALT',       'K-jqd^=_vfor[EE x=go<2OHlMoe@9xe<P#hI+r>SycfaR:d/)rR2`$|#:6&bHyb');

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
