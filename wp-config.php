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
define( 'DB_NAME', 'db_headless_wp' );

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
define( 'AUTH_KEY',         'A#*Sy.:xAGI-U[)U*rr&&qv8}A)O/}Q=z.*R%0`,z)R3_SNuL&7UF|kURWqGz ar' );
define( 'SECURE_AUTH_KEY',  'gwtBI(7T/q6eUuce9fp=?&vM*IhLL*V5fn*z,+A+u%pDmmH[vtxJ(/+4e,v$B-[A' );
define( 'LOGGED_IN_KEY',    '&r;g9wWp?2c7RyP1XFd(}7C%^{$0s!VzF$Me1hbEe:DKG~6d*EwN>T>)|-.)Zaj~' );
define( 'NONCE_KEY',        'Eg|r*5d~v(OG2FKZ~3WctmL^Ac{OmXx<KW=wILP*)6Sl8(;T1R3dY+CO9?&y4xyo' );
define( 'AUTH_SALT',        '#:>D)`8Ms)8:!u@):I+Vw8JSg7[TX=R2-v-_?J2)`^g:ed0a)L6fk#25``v,%#lH' );
define( 'SECURE_AUTH_SALT', 'szk1(}|8hv|@RLD6< !~/]7mF@LN!h~`Q3NJT7: T5#)w!842z]o9hd2nT{Z7u_b' );
define( 'LOGGED_IN_SALT',   'zA4t^cv_B>9Rx+GboN*cEk3TGC+=I|na1g9-Xx!+SpyR&K7p26aGn!Z-1W+([ mN' );
define( 'NONCE_SALT',       '<>ptkiV!I<pFpCWtnqqo`.f*AgH)S9me#ef609HH-6h64mbwq(k^gGD}HYHJ2(&W' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
