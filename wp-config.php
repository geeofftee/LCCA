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
define('DB_NAME', 'LCCA');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'a/V.uI0-btjN_X&EdaOJnSQk}i3pYP-pwt}xu&uC8pSQ!0|H$GVllI:f;g1cDjDS');
define('SECURE_AUTH_KEY',  '1M[,WpLYa7e+&~VN9OKNC)g|k6T~N@|UDsSL]SbhEI+ljWlEeBJ375}c`M1D:C<!');
define('LOGGED_IN_KEY',    'iA;1wkl7Lbpd*]jnq(|*1UPzJY)Ln{;;jkR?Tg)n8d-NI:q$A>?>D_$x30-sM|@J');
define('NONCE_KEY',        '5^GUfm+(A4z=`S-@Bg*GKcOPZLEUWvN2`8-b@=f](Y-xX1s*b<:jx7uJ<Ut60=Nb');
define('AUTH_SALT',        'lir3pT@.o$7/XllPKm)D@R*`R2oxBN?!CUWZ$+&8$Z4F U!*1[B:ROCvPqIiX*p(');
define('SECURE_AUTH_SALT', '{KX(?,U6,N^DgkTT4%m;b{_d6H$&?=5IZ-&oh!?l;/V37_5m~RU&v:gOQpV({R-*');
define('LOGGED_IN_SALT',   '?4H(SJXL-@v8B0&obn1i_wU2M3L+*6X.Rdzd3R6)GfE`t_1Gig+_~f7MviE$})2|');
define('NONCE_SALT',       'Fj=}%27=sQR+HaUow7FS~D.O=aL[sf;OK?yZq|=$&//DsLJEW[J@WO$tk24A2KB]');

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
