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
define( 'DB_NAME', 'motaphoto' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'M5}#=!<=z-lN]J.9vaFSxVb*- 3[pQ0)AkkX>aH4W0E1l<eK#_#Ts)6&0@. QNum' );
define( 'SECURE_AUTH_KEY',  'lPxNvWV<9CX7,!wc{NA{x$N[OwF+lpzE1$do2c(guz,4?Ld#JH<xs4k1;N84(Dbs' );
define( 'LOGGED_IN_KEY',    'M9Ni@@_<$LoF#6YjWQ>,;{Y`rijc#z9is,RwqD%sEM] a,a^#{DF`)8h;b8@*Xeo' );
define( 'NONCE_KEY',        'S~24s]0qf~=QDvtff%Hx;mYBNtORruK#F`3tFC$>oC!,_/)&T <*||JBkE9rkKCJ' );
define( 'AUTH_SALT',        'N,PJ~cwxjlNz*3qKMOhryk4q(P9?&o/SmE> <p}]B;WsdKj0!hCLW(KE,/`D9/|!' );
define( 'SECURE_AUTH_SALT', 'LrK(t.`,m}|`+2$^hYOUm1nPg0Xv O7rT}1L=/]!7q@xS)W[8]8(/6_dv+k~/^!q' );
define( 'LOGGED_IN_SALT',   'bw~jBzBy63f#iPY0pWFzs8]>,6TJ>[blDBd_}bk@,JK !K+aSO@@pj6Hjy{uUAnF' );
define( 'NONCE_SALT',       '8Q/[sLtc#@BUX!m1W7}KbBY;UA5RKpr(vg+F}L~Xt},3Qfvr)5)@:Y`AN2akBvc~' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
