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
define( 'DB_NAME', 'hilalrajeef_db' );

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
define( 'AUTH_KEY',         '$#}nFH6Od!l h(Rvz[-Y~NB+Y|+s=[h`3SX4L]t}3LC_m f=d!h(IG)`&[(hH4*R' );
define( 'SECURE_AUTH_KEY',  '@zMj7G_2demA(un.7Z|R 9dh-;zJ7|_$$nBx?~6_X]pX#jQEU]dbjz0>c+Y-5uDc' );
define( 'LOGGED_IN_KEY',    'f:uX98cD3;tl*<VQ4VL=OX-zh.bNJKu;,wmPxjq0brixiL|V1`_epErJ:6WOjwe,' );
define( 'NONCE_KEY',        'kqUah?~9#Qf!L<&OZze+B;w|gMa!VPl@<[ah93,BUfw;@>@Djni5)pQRtHt(~s@.' );
define( 'AUTH_SALT',        'e:Y*W>9N/0(0w!kvz/`I<?Ovr)lnugBFQZhBm<TW,5-!vce<Asl<*7zd<G2HMZZ}' );
define( 'SECURE_AUTH_SALT', ' x0Fc|1Yq#X ]=NF*b,%^`EpRm 0wwXN/:sHL%V=w`&zy!~U0a*6)fh( I/HWIS-' );
define( 'LOGGED_IN_SALT',   '6sfm/|w)/v{u>0@Y|6gZ*bM>MsH8/V~U_M41eX)*8m|uCG8_E_6Wax0_:2f2T)Mj' );
define( 'NONCE_SALT',       'TmQDEAjliPuav0p(jbYvPn$&(2+j5f<sr8~_B>R&~_~5LD>SPL(eP[],@B86DNTG' );

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
