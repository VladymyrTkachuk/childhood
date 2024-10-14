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
define( 'DB_NAME', 'childhood' );

/** Database username */
define( 'DB_USER', 'childhood_admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'O,6[~Qg<a5,t<|]gaT3qyS50tkbtv~=#FrN8}mU)r9RwS?c`uHIYTD`UWdTFJxA=' );
define( 'SECURE_AUTH_KEY',  'J$[}E+J=,9])RT,>m=T)s[?4}Oz])0((}+9 ?s/FTf05ug[<FJj]ZRhd3JHmE.qb' );
define( 'LOGGED_IN_KEY',    '&3f0fHA!-WjW(3VZ_GLcV*+J,5eG>Nv-((4L%3KU/{OQU <o,Ma&Ae{kVzyx@ati' );
define( 'NONCE_KEY',        '4c+~7g>LOab~h%3aOelWmOJLF1/F9guVsmc2(,!{xg(C`IALa?@~Tlh@YI*)~<bc' );
define( 'AUTH_SALT',        'Z4~m}&dPq42]R]q%GBah_rV>KF[GFy@4B0n*m[ 1^?Kxb!4]@O]&! wX9$Z^$Pa5' );
define( 'SECURE_AUTH_SALT', 'A4G,V3|4)M9[NL;mExZ1:IIuV6zib*W9i~)r,qmL}CEvx~&6a4I$Xr192`:}tWDc' );
define( 'LOGGED_IN_SALT',   '6_!fAe$9@|HNmHv}WZ$]O`)2 qn?*R!omnh7@5}Fa$Kyf~X?TO_q0wO{ihICeAL4' );
define( 'NONCE_SALT',       'Umf.d5Jn0m(kOjd/)%T[moZf(iO80H+b?}]QugsTa5C8loM*bZTv.|Eiy9IX0n&Q' );

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
