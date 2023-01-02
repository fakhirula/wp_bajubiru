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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_bajubiru' );

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
define( 'AUTH_KEY',         ',f0bt>|-b=7jp/@IIxP;{g`LPy5n`VYR!P= j_U]94-VcUg-{73W>t0*[g;9XW*Z' );
define( 'SECURE_AUTH_KEY',  'UVMdKc=H.(xkMn/ze)Y(/03J.N fVEh+lY>um[#iFiF/UOf.3>YeA)*.Og2,sp<}' );
define( 'LOGGED_IN_KEY',    '8u%?m&6Q4yA(36f|w6>>^e[F-sjBwfbo&POKRn%$SDc_zuJ5>HKU/nX1uwM1HH5d' );
define( 'NONCE_KEY',        'xfhRSXW:.(Wm #DHP.`!2olNaDB0Gb{HsUd98`/{#u.NHhN2Eo{IZEtBg-V<:Ze<' );
define( 'AUTH_SALT',        '%YRCW!^VjQ-]+,:`0>7|dr5{*6qG6)nQPR0t,_yg&CoEwJ1RbL;q}y!$@?2M:WgM' );
define( 'SECURE_AUTH_SALT', '#zC)Rxw?x6?K(z+Tu2PEO8d3X|ZERE%|WJ?m|w8].=gZ$$W$[sbv%>jK`{4soe%f' );
define( 'LOGGED_IN_SALT',   '#S>f&&U0_-#,q4HTdQ>SA0yCgs2v4KLt,>}q;Wbdf#[yt}|ZTW+X9*qL.!ak}3k-' );
define( 'NONCE_SALT',       'J3@^x;zkfQJL!:i&,H8dxF=;E%Kie]O[->x9mL;?Dfvek(hqpdYXMXxqe4F}y],j' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
