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
define('DB_NAME', 'notaspersonales_nicolasf');

/** MySQL database username */
define('DB_USER', 'notaspersonalesn');

/** MySQL database password */
define('DB_PASSWORD', 'Zm*?Yjhj');

/** MySQL hostname */
define('DB_HOST', 'mysql.notaspersonales.nicolasfredes.cl');

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
define('AUTH_KEY',         'U;;;$Y)HjA*GkMK|Yd`$1x3^&l:n)M#tZSAI?m!$P7;Ouvbw$!Wk4Fq$~&n&&1/P');
define('SECURE_AUTH_KEY',  '8EXD&(;9QA;@F"vcykVn~biH6FvI8t(tT9@f@mwRbOc#O5XIS|FL"QIkd~^Pkr4X');
define('LOGGED_IN_KEY',    '$(:(u0cTi)DC~n1yfvIgLbr(DpkLPsJD|cxezOXIMx^rW2&Wr|Fst$jaWFuvD)RW');
define('NONCE_KEY',        'fggC!Xoss;oRDbI`uh^vqnc:Pxjy6^qH7jkN?9F&z$Xx**f;c3LQ1F5@Q_O2O%qi');
define('AUTH_SALT',        'AMHuN1Yxm(g@9A%t_Q565AiJ@q)BGr&GMEV30q"OT@Xq?*Io(O!3d8OIlK)pg`&/');
define('SECURE_AUTH_SALT', 'kTSWUd)"RqiaqMN;;fLA"D1$W$ra&8I5Vz^gb6x|rv@GxrQ6QdcvCta)^f5#g?mx');
define('LOGGED_IN_SALT',   '|&BXi8$&@DP5mvpQa%gGG3/)eEnwsUGitk(Pkz:I;?g&XiH+VwKYn9jdnRE:JViS');
define('NONCE_SALT',       'v_Y07!v7XmncY*lJl:Z$#sm#RCml)Oc&g6:syT)WQ/8aJSvRo/m3)D)t6~bl"izs');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_i2dw6v_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

