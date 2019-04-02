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
define('DB_NAME', 'wordpress_portfolio');

/** MySQL database username */
define('DB_USER', 'wordpress_portfolio');

/** MySQL database password */
define('DB_PASSWORD', 'shetu72743');

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
define('AUTH_KEY',         'Q9P=lIy^tMNSO6@TS5q{Nu?}`*U_ND:B@Ijk)J.i).Ay4n8]]VTL{EPv^J[G<C(H');
define('SECURE_AUTH_KEY',  'M?Bv:w;ib]D7!oAQO0H:XGn$7H`m=qU]X7c@wO5lYSJOFt=liz|hNOI.}af>Iq1#');
define('LOGGED_IN_KEY',    '`d<28c.R/py L;gf.7M9G2&gV6~tp)m}zD,-,]Y7@o+>Umk`{,}hv!U.FW_v{qo+');
define('NONCE_KEY',        'YU*YxAp)rf $q9Q?R8nfH@ZB9~)L,Z-z.O~c$,)B=MQ-*_&^rhkt8~/@t-!Wz0!~');
define('AUTH_SALT',        'D  8S?(Z0,CyuQx*VdS#pcRGm4C.0d2Ua_/x3y_v:Hj|i2/7P+Tc&~B]6SJ(n$gB');
define('SECURE_AUTH_SALT', '?xCTf51{8Tvbs`E|%](4#)8G~Bd49n<0`|7vlrL-M2GrmQiA E&OFo,%X:HCd3*Y');
define('LOGGED_IN_SALT',   '=btKqO F>o?E.Ux5E_$ZON:6#5?xSh14#%Y8WvYA4$9tmH$lNqK&!mcbS)2qV$:.');
define('NONCE_SALT',       '_8+}P02:){_ n`bb?qpgu@Wb]Fi!*a%@^`!{gPta0OB5mr=N:839TPx_Yd00@*sD');

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
