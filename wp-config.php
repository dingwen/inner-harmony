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
define('DB_NAME', 'db97164_harmony');

/** MySQL database username */
define('DB_USER', 'db97164_wpdb');

/** MySQL database password */
define('DB_PASSWORD', 'kMdxtaTFOeYO1oBfZyyO');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8_general_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' @qL7&%k;%l%uzV}Lm5jf0 wH,W09,h6whNLlM+9f`w-Y%sU=5uH$71?vW7[6!]*');
define('SECURE_AUTH_KEY',  '+wdnB6QSsB)icn-f}SC.-sQbj4,-_lgM;V{kJygD,x -Nr;Wpr;1Ibt:&oDo5_9$');
define('LOGGED_IN_KEY',    'E iz2&#l9cT4IP~;aYFf@p9B8{f3QXJGJ1vZ;`LK|`r .CL/nGmqm{4(ruU|[89{');
define('NONCE_KEY',        '0&.IlWQB*L<zZ{i+%J-4[T[{-|?@6@;uh!/V,lG%@UB,yZH|^[T+T#a&owau^LN^');
define('AUTH_SALT',        '[Vg5<k_Zz#D7suN.zE9hWR#[O- 12[;>11dA8jwn^-$-+tDb QQgfS]W(Wxf^iw]');
define('SECURE_AUTH_SALT', 'UI2%$VeeRD[m6op6ZScJ-5KBPiVBB1D=H~)d4-@&vf`sy::Ug1Vc%D=yHJBs#f~S');
define('LOGGED_IN_SALT',   ',N.i<Zn9>tq`yJedLG6/pXc|`l>GcA2FmK;`KV[R)UkztiZk!35t2-[u+6C9+gUf');
define('NONCE_SALT',       '4;0f92da`Z|Mj43jr~f;wCNumBot+1P$s2(hts/5r ANP/-,aWju=}5d-CQnfim#');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
