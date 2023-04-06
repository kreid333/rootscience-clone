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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rootscience' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          ']FPDYK$g~l<Q}-=DH30~7[RbEx,}=~QbM3_eyQ9Rk`(l_B,Y{U2&]8wzJ;5zfqio' );
define( 'SECURE_AUTH_KEY',   '%7VO%1T%luaUH0+70$X_F-Y j3FA%8zy`vh~q[Q&Z:<$G2PCCa8`vf%I`Ly3X<_>' );
define( 'LOGGED_IN_KEY',     'S;~}(=ikn!.gLqbC&v*SBQvI*38OGGG[Emb9 wN,J9ASAI4V8&,V]hYoi7Q^S?u%' );
define( 'NONCE_KEY',         'Hj>`w}yPJc*@,;n1xP(^3PvX[X[.BIy ]xy9#JT>V<0<50)p3~9WQ7)s=gxn iAk' );
define( 'AUTH_SALT',         's5s43!U/3nw-i*[-a@/czy4Z$W9A -isvU >QHvm3dPubpP9tn&*@@c8Q8iMa@$l' );
define( 'SECURE_AUTH_SALT',  ' A@Duc6o-3) m0FI8-8M+0M]dKZ}Fc<T_5~Cu*rjNN5FM(Le|MNR?C?Ckpuj5&g|' );
define( 'LOGGED_IN_SALT',    'I:|-_cB]F;?{M`~V}#x8DBa3J2gJGjKK4Bx%m(I6QsEJWE$t6k{zwsy^?*)Q;<ZT' );
define( 'NONCE_SALT',        '~FJWR^Y4,qD% 0KiO _G9:wU+2xAdD2}gZ+Jzzz&&o(w1,D4?I#;4q<&FbbBSU/_' );
define( 'WP_CACHE_KEY_SALT', 'xx+TKEz~qy4+&HGmooi?vJxG dDNJk%t%+8iD&(`U[qhrW0O_Y4(!m!nNz|vl5yv' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
