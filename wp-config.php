<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'a%Q5/)fq4 U<r0XNf_7f65!Cp56pxqpX0y[eR7x*L<5wXNVm:a#3Z)rFi(&y$wA6' );
define( 'SECURE_AUTH_KEY',  'hp+BQ(*I?_~7<U`9TG_M-Up?}-!r$(BBI+omXl@7U|w9b^~8%,f]Goky>5`Yy&T6' );
define( 'LOGGED_IN_KEY',    '=iaqO$X}U<tjlwX`?g$UJ={9tZVi_Ilf_0ZKO5UECzv|Cp6uZ./S9fcypiBt.eJ)' );
define( 'NONCE_KEY',        ',!YrrdY=WpLwG3D}jtUF>#)-nfn|IX~78Tead uW[.*dL6XsRyN8iQorL}R,0dGI' );
define( 'AUTH_SALT',        ')HyVw#1x[_*wGJZ3xv&nYmLfX_:<2^q`*cw6V^I&4f;$F21<mUt<(;7<?2hX|m[C' );
define( 'SECURE_AUTH_SALT', '!^i0$c];|8Kjh~U@Ibg6DE]?iI8EfNT};XQ>M0X7BAc8)p93i)tA{f,dc_$Do&C^' );
define( 'LOGGED_IN_SALT',   'i;[6Z.|=k6g;/,MMml2h1=ahF!fvYJ_H%;U{B]_VfPcclu-<sM[q+2rvA~.=v5<1' );
define( 'NONCE_SALT',       't|+vmDG|Q^I!+Dyu%&TMlUOz9Cmq&Ufyvir,t/mOt)FI~4w@YG_vBN4kK_xQ:)j#' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
