<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ezne_35724512_wpvogue' );

/** Database username */
define( 'DB_USER', 'ezne_35724512' );

/** Database password */
define( 'DB_PASSWORD', '7ps8m3k5' );

/** Database hostname */
define( 'DB_HOST', 'lsql112.eznetwork.online' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YUk&S)gLsfpvD+5zmefx*)MZ(rI7>o51@stTN^@W~Rp-y|KW9Qm/:[UdD6 ~+YG|');
define('SECURE_AUTH_KEY',  'A/,dE^8jraQh7^JcP +bU@FOCoHNQCM?.|^m]&$!<Dh|TOm/h{B9iu<VXsvsu%vk');
define('LOGGED_IN_KEY',    'fbBL`:`LCs!vFd%*<^wBv.)IR*6w=.YT2=WL|IuMg+jUpq4/Rui(6BC?(Lq^|](J');
define('NONCE_KEY',        'TPQCSFt{BG_1D q|$7Z~XO@i`u5+A*?.KbZ5g,+FC[-.@6b){8O&?U13&JXk/W;z');
define('AUTH_SALT',        'm59|}B kl*FUNQTf)psaIs&vap3lx3YKf}HLR_0/97ZS`s?Ip1w m*hMsd)ADA*p');
define('SECURE_AUTH_SALT', 'vfvLm*Q)||/qxF|W&S$a#u?3)k&g0r&*NYy_jr3r0awuXR$X6pvmsj}Bpx<k<LZ4');
define('LOGGED_IN_SALT',   '/,gc6!/2=,tAW*CjTK;(AoGg$hmJ2e-5wWH-JNBeZ[0fkYD|17:#B^hYtsw/W%xi');
define('NONCE_SALT',       'P18dsW7!PqPnO`-aa-M||]S$G.:LMn&[I7+V3ds#q1NgX;7N#J917)~I/bu-0%3H');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
