<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Pillowdb' );

/** Database username */
define( 'DB_USER', 'Pillowdbuser' );

/** Database password */
define( 'DB_PASSWORD', 'dev@987' );

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
define( 'AUTH_KEY',         'GJCf,bLCkOR:%<qHHXB97Ve;CDP;vgG`t.[/~LCN}/>%+2 ouN^zF1o)P|x~T@i|' );
define( 'SECURE_AUTH_KEY',  '}_*P 99[>F)Nza77NFwJY[~(C_VU Qmlms@2`G;|&kugT@dUm>}oWPn(v-U4$ZhW' );
define( 'LOGGED_IN_KEY',    'rf82ag07g+cf(,7k$G6~^^4R+f(F,E!Y9Es^/bU(j/b?=&M)&5h5w F|a<lmlUt^' );
define( 'NONCE_KEY',        'DH0[RJ1Lqsq.]_)[X):vr><_(O#jR(^^v*pfb-N6X2MdB h?)i,6kCOem^X,!~_9' );
define( 'AUTH_SALT',        '<bI5qofAZ=^ Ci,ZC7i3,g{uS3]N0.(2?PhBsV?IKk$?d)zrxD1[%bb}OBSY54Hb' );
define( 'SECURE_AUTH_SALT', '6C:uIu-r;q_./qMG>k $Kx`bHbhJE!TYdv#:7S_?cyaQFV$zNOQ^|#GXLvT95uqv' );
define( 'LOGGED_IN_SALT',   'IMKO{K<7|}yf{[wFEv1MSd4;p`x6MAn8ge6)1Y!wd=M4G5Z[72lM|(GmLfQ7I .B' );
define( 'NONCE_SALT',       'H?c}8sne{9s]j`6%w>;G2,f9~7O{NybK#1fgOm(e+rC0a#v:E>S;OX9LDbuYAm+y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
