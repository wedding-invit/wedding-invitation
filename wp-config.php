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
define( 'DB_NAME', 'wedding-invitation' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ',vU>rr[L/Z;C1.B!cV/]cmZT+Gs-5UMY!VJlK@w.SdibKz1s`>gBF#|su`9JTzGY' );
define( 'SECURE_AUTH_KEY',  'e/+Xm26f}$t`@rpJQ&1iYC&dPi 9OJbMcw#N/mtJ]PeGQBrwl9AFV;=%/;:-GUI:' );
define( 'LOGGED_IN_KEY',    '4xWNBi7AydNm&3Q4bQQYZVK;E>>^6n!%(t92NHcpdx(xAw/:$}q+md$md ^td2BY' );
define( 'NONCE_KEY',        ' _`u`ykV!tcBsx19vAT(ALUhLRKvE9@p}=uhrWKq2|b+(a)dUZNFLM144Q5?og)@' );
define( 'AUTH_SALT',        'Y^_=tLFqp.7rNIpO[iK#2.y.zIoHrr+UEBrBYqvNYK#|uL%3-NTkNJsC@/p4CRLE' );
define( 'SECURE_AUTH_SALT', 'z%_NDOREGCxUNGQ_aJw*y0FwFc|Z6g6K>oB5%<$Qhz^u4n|EXSCscLWW9JGQVVmf' );
define( 'LOGGED_IN_SALT',   'U(G|A.NxOLC09r{x5Kq;pXL9q7k#4ieswGoqlE51,G0JPxByIXYR@#_CJWqC`z6O' );
define( 'NONCE_SALT',       'N: ZO0]5a[S573jhgbE#!:2c=Pu=1loLK`#UgQR~Iv][~J~K &(z,oVqleIZmhSj' );

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
