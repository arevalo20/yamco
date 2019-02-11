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
define('DB_NAME', 'yamco_db');

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
define('AUTH_KEY',         'r&@_VDl[Z#~a/2$K>ESC7>pA|y9>k)xtOVgZbeHhL?[jg:QEN8Vzo&y<3tpRrA+2');
define('SECURE_AUTH_KEY',  '(ro?YIAW5x9==2#n8c@8(TR6AH:a?U|A3mpxLl$H|XyKZb_TsbqpWToV&ThI)BFI');
define('LOGGED_IN_KEY',    'WL(2 lzHde7Q44]v#a&G~S4L}~>D#5[U5@^ %Ig07/hA~M,[@_f7|OXyM_gdw.eA');
define('NONCE_KEY',        'gRddP}Gc;(E0gvZ LyNUbu*8Cs8bpuadkRgd}0,)mj}Autj:]ws2y<Gc^?o:^i7m');
define('AUTH_SALT',        '>:9qSz`2bLO8:IpK{D%.R&dlp mFVk8?:s42:|GP()NvwDQrB74cSk$3T)1!gDZi');
define('SECURE_AUTH_SALT', ';Q0b#-OLj>J7%O?#2B]]G0r{2MMo1K**<jA#{Upckp*gd4)*G-#{g),Pf:B/_!ls');
define('LOGGED_IN_SALT',   'Yj%7R5T~(i[F{$zV<1wjXS<{AI=F7=<W6-#V!aC_Dg_7cD]Rdh0i!M9tBjV}QUw1');
define('NONCE_SALT',       '}b8$0$ }?zRWq3jHzUWUji=?mVsfxROkp:m{V~Y0xe`ueC/ PwHT!282GO{YMCX-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_TN_';

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
