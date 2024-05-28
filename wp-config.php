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
define( 'AUTH_KEY',         ']DQahb%G`>QnHJ_yb*KVzPaie5O=obYmR-t6xOS<X`RS/vu4<G%,SN,,Q!ruh|_k' );
define( 'SECURE_AUTH_KEY',  'v=%=y#`0!6c[)M6O*)9k2^?.kJ4yHQ~Vg82L&$J[+F1V]usE9T+9`oOpkO5=A1JI' );
define( 'LOGGED_IN_KEY',    'MP;p(#Z2.XIhK/zg=cfvy,<Lz8}7]Z^}B`HZ|L[G]ErYTs,(#!w!GIf6Eg*O;6Q,' );
define( 'NONCE_KEY',        'Nq4Cr3QYwWV9YKf7Qh]c}*i$SHfnw1)4{@#0[Mc,`/*ez;HTaGq#/Dk|?&} Xf,1' );
define( 'AUTH_SALT',        'kEWurB9/B[vgJ;DF<3z8)yp{G!IY(*~CHc~0,r!XWS>F.CT^AvgNEPQW>cpS+~@b' );
define( 'SECURE_AUTH_SALT', 'L,prF(gS_H|?ts2<(d,n{1A_G>b]W,S{PBCD(e-$fcEL8wI$C[~~`z2DXumw`il>' );
define( 'LOGGED_IN_SALT',   'HAiNuN[VCw69%@Uqfi}Q)]t^wg-?Lqc1w(Jd0fF@9+0&V#baZc]OdXpb4-<1ye6P' );
define( 'NONCE_SALT',       '7A.k,zJiT2j<|ibAzZowapTc*2:@e%#*ww!|$5?4/|g>%JsD<@Mrptx;m+I`Ce2<' );

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
