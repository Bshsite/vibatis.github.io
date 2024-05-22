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
define( 'AUTH_KEY',         ']zSzbD<%D8s3:NL0%?_Xmm)*RG0HdJJ4:P=BTXx@nl]D|YgW0TBC8o+k<K{x}uX|' );
define( 'SECURE_AUTH_KEY',  '1V[1VUl5q;w.4pNKr.N=aB{K]uTmUK+n)UA?5!DM(bCKd g~9=V/fNx!]B36zs^q' );
define( 'LOGGED_IN_KEY',    'E%#;c$^l]sySI?KWR`KIj/@wtFU.4w{C=o)E|hdz#p^qHc/WkaO]T)XC>H7@&ql`' );
define( 'NONCE_KEY',        'Hs2PqO;[%_/_V420#=tAPt[/VO`[}SI<j+ldME(N:c<^S(8{Q<g#42k8Nb 3oaE}' );
define( 'AUTH_SALT',        'J7N L=dfn[gWGT]spU0~G_OX[2]o+o ]>*7IB=jys2H7YX]G%O04ZB+dp4TFh*87' );
define( 'SECURE_AUTH_SALT', ' I4t,]1t h+o2>i3LQd6xug+mMPqP0]PUJrTU1B_p!EsTf:P0/&2JY*,[W$w;=u,' );
define( 'LOGGED_IN_SALT',   'HZ`E[h[!QmR36gU&rpt^*tA}^_o3;N-%][E@[L?xgF&Pu95hBwpE2?fv=eD+;@| ' );
define( 'NONCE_SALT',       'j7?9Q]r$x_UE&J0|1}p{8#,zphwsD7OqlTnlIo}$hs!kV40nd+$6 KK*8`GBqOcw' );

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
