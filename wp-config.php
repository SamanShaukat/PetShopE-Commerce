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
define( 'DB_NAME', 'PetShopE-Commerce' );

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
define( 'AUTH_KEY',         'XnE./5qz.8990=d>&ED2C,.w*XW~y*{^G;t}TNw^/]sc%5i/0(qqkH1mE.-kz;kA' );
define( 'SECURE_AUTH_KEY',  'FUHKvav>G@qtyg(Of_|^$qXcu`,{zPMMW;)DuO*LC!{@_rtirPHxuq~x .y(sD-Q' );
define( 'LOGGED_IN_KEY',    'kP%|6ms#zGdCL;zp6=o{)Y=bw<h0kH-Eba_]i5^@1Ll:}{RA:@0#57pz-hmd-}iU' );
define( 'NONCE_KEY',        ';s)B#%+@!##$lp7.E<oy%9peFz.H.vS2DCr24Fw1] 0H56:1&5>d^nT5z:s-#fv|' );
define( 'AUTH_SALT',        'E^X_,7GcPQLi<A5k.#WYAt&x0$;TP$2<D=BM{3>XIu$|Y9NZTC?F8WskY*>(+lF#' );
define( 'SECURE_AUTH_SALT', '~tWvoESj%Kf^>q:G)aua?)lth$G%!|gjK|_KrXxy:L{r^h8DjJLJDs+8t/>5T..{' );
define( 'LOGGED_IN_SALT',   'VV$d-S8`%*3E+ES-=iTt%DLVLW-[`R<S&fH;z*D?5=mqBVB3%9;Mk_G#|8FIa qE' );
define( 'NONCE_SALT',       'ju[bVcedaLdBDUNhd=&5NEQIlY+hZ3}{WlLnxG)WKtCM:#[y%:m>!i(_%yAZ=h-x' );

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
