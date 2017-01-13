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
define('DB_NAME', 'srijanfn');

/** MySQL database username */
define('DB_USER', 'srijanfn');

/** MySQL database password */
define('DB_PASSWORD', '12345');

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
define('AUTH_KEY',         'zwBvEI#`tiXBuLsYT$~Lh@,&jja[K~#~G,]n.x,ukeZH=>?[EvJnNK/_#jHBCnZ;');
define('SECURE_AUTH_KEY',  '`DGM w$Kx|o4&)EhFD73.Z:YT|2%jw`(eM!{.WTQk^~rC/r=&sU3@y;wSd~HH,{M');
define('LOGGED_IN_KEY',    ' @z)r;j`xl-(B9:Cy4-^QD;Sd?85?<LK93%Gve6Dc$u%^BiR-exa[=6Zs)>$Ffz;');
define('NONCE_KEY',        'cf~txC@P7H;H`D=0+1,nAY(?#Mo2/wE6oZ3pd OoBag?hcN:8bG*fAnULVjfCWPh');
define('AUTH_SALT',        '<cw/b0NMA&(R^-_oEa_9_)9?fJGyjcV#LTtaCjl2o.+Z~|MH#}+s}fA$>A2$a&rN');
define('SECURE_AUTH_SALT', '%CuJn/]idjaEp-9ANN[!M9}T#,|3ltuvl=i3XCo<_Z<O&Cu@GAFW(X:?4uQXU+*z');
define('LOGGED_IN_SALT',   '?W7r*GVb]?sB$`eHb|VtV*yM{5Knw-$cGBm`ml:,$XO-,#>vm38<q6g[~Eb4ngqs');
define('NONCE_SALT',       '^ee8Z8fZr3Tj[U~c8//wo/14<KCb+s:51o0TK(CLfc1Flu/h$3YT.i+#cg,pHRm+');

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
