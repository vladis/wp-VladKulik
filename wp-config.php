<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mysitenametest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'mJ*?n$vOLM>F#m4tA{@}vODHG*wG6<Zt~xlC?u[zl^8B^3skHBECy%$.s%DM6*@~');
define('SECURE_AUTH_KEY',  'EUF-^XrFaa0w7qlDT[1r%j|v}S^nf%2=s*NZb~megC_84/u#w#PE&]/b_6kyk(;}');
define('LOGGED_IN_KEY',    'V%oXu?)bR.r+>;:%IlmW{GsR3fxH_J$p{,DD2YqP(>C&tPCx^tt(SZFTlOZ$[Av^');
define('NONCE_KEY',        'Z K5?.Ly2R/W7Qm50!I>-_?~$/aptyRJPuj0o9p;<a{-tC6T9!=uec@>c[E4/9ym');
define('AUTH_SALT',        'l/&>XJO~pT488=8|yTF~hJ&|XHgGf}^`KVXm>cshV~?%Dr;z%Y1B5]v2)?v06L2o');
define('SECURE_AUTH_SALT', '@AljDjutA= }NO3t(&hC@_X~=0MOb=?u7g_y6ARB2`/Wjwk4w*K%$/,yT`FX30 t');
define('LOGGED_IN_SALT',   '77qN_aKOtj:m^i$53.ga9f8~mMew?7C`vO20@]v-6pT^n&nvN>=yV[aCf)?C`X> ');
define('NONCE_SALT',       '= xRY}L@KHqvmJ,Fy*YKmbMJ)K8eRk_+Vas*6C:CzFDgli3*1=8-gL&HblEBOD71');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
