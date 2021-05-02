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
define( 'DB_NAME', 'db_tipzrimando' );

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
define( 'AUTH_KEY',         'hR8D(v2QXd|ZTz~k{L{8N;*k{?kR`)8kp@h0Iuet^qu]y633T9Awm}e6;>^X$JOR' );
define( 'SECURE_AUTH_KEY',  'jc`A[m9cVT^LdsC/(Q]6Di * 6=1gA@6( ;J]lF.Llb+BY]8(gY%oRcvWDD5;h[k' );
define( 'LOGGED_IN_KEY',    'neXCpWW #SCG,.&)>6Z.{UV%zr}2*~K6|R)?*ctHxTAy0VkhRZ8KzL6_^.n,6!@]' );
define( 'NONCE_KEY',        't|i2#&C%9J}RG/Gjhm9YK8hWLF_(>JmG #f!~g,pRMlJ1U:Ib]di-lcHt:%I&u0~' );
define( 'AUTH_SALT',        'Zw$-w/kI]b$@zcRj%i80PTEH)/8L5.<uG(B(za!m:z[E,8._R[cXDkMM^a8T84io' );
define( 'SECURE_AUTH_SALT', 'ifBr|{!yf.y~~MhjdK}x^(6_1_#t/VUE=9*hdvp&[ehy8!S7i4AVo-RF $W^HGg{' );
define( 'LOGGED_IN_SALT',   '<I3.IqBbg#FfBSPOoq;knIUhh3XFngM?XLY*iwg{ZSsyo*jUp-4dRSra}-IxATs*' );
define( 'NONCE_SALT',       'kSpTnd9,,Xg*b891Sct@rGRW{NYTaHm*AF>DrH1&|a)|FMB%injS<z;3B,HPvs1w' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tipz_';

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
