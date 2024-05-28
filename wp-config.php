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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vibatis.github.io_db' );

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
define( 'AUTH_KEY',         'f,3_Hep|a!oB8-Q6sk%:soC_+gRo|0V`v[}k#E@@E M-6^koJrd!cnFeo?H(6KUx' );
define( 'SECURE_AUTH_KEY',  '.:6}=6/U&U/.dHBCXXd($8IJ!ho7g~8-CW/7ThM3u*O|3K:*VuvIWvF^ PGC]8Pc' );
define( 'LOGGED_IN_KEY',    'vB*8>{u+XNCWw];anaaNB=Q*0P5,c>UNK)o}xJv|/Hia@)vYoAB+:1UZ*a//}/li' );
define( 'NONCE_KEY',        's83bq/6FN(sw}Po2=sY*Xs%.LzU(1 PS2Z@;!AX&S2#1~eVnJ4pTq6p~3H9&A4%)' );
define( 'AUTH_SALT',        '51u&`l7w#&],e&$d75r:4w oHY?-Q+9n+9W}xB9,_zC][8]cRrH35>T22*k`(>Z/' );
define( 'SECURE_AUTH_SALT', '0UwN`+(i.i*r93AE+L/0W<r??_KF>020!B+&xc/,mz2BYa)4]#)*C0:w_@oh~oD2' );
define( 'LOGGED_IN_SALT',   '_`9P^J|)mZ _A,CE|g6aE7x;w/~+8<uG!~//!:cWk:n=JNtHTDY3Yh.D,D5Js]Fb' );
define( 'NONCE_SALT',       '}bP`e}UNOZ+m0r(fibG{|:Iiwe@Q|leCzuZ0=oE}/|xtLh~lP&Hn^wqysP:U1(Kf' );

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
