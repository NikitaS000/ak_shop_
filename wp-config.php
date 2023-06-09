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
define( 'DB_NAME', 'ak_shop_' );

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
define( 'AUTH_KEY',         'V/w$X&{;uDPw{ ZFH]K?e2]!H`22iL04F] uZC$<h~gc2c9}E;`okd)9R<N%@0l~' );
define( 'SECURE_AUTH_KEY',  '7.oyzJp0T]j8n:e]MT4yWUEQ~%w3AXm]g#MVkgEY{-Mh::4Ffc7&^vW;/=W(nv[.' );
define( 'LOGGED_IN_KEY',    'ni{<itnu?K:)]{S=7dFr=9vMo!rYX>=M; V7h c:UaejE|yNRJU!Y`|}pi8#v!9C' );
define( 'NONCE_KEY',        '3`qot:}62KSKMb]l=Uakf ScmiFb@5r1t %)c^v{kU9t8L[6mwCoOmoq5,LAa~rv' );
define( 'AUTH_SALT',        '}X>kS@Kj?;RcUB~b0QKU5h$Et6&l+Dnl:TN_/F(MYbwYA#-R7[($7p%ntu#G33!2' );
define( 'SECURE_AUTH_SALT', 'T]vNzuGV1 -K3i8G7`2B*|{n/$Z_L1$CtIffSRTo/GGfK4lGU;J%.o+D9~o$g*%P' );
define( 'LOGGED_IN_SALT',   '{vX^F8Ca@}j@7vGkH(<hSi_/~T|[MbK0)]P@;@@saj?=./Reqy8jBtb4oo^QlYjd' );
define( 'NONCE_SALT',       'j0vwBHt]MM0fmW7hdpL>x/7;Ws{@2><i L,7wT{Z1@/lQHk{1Cf%X:rp<sBHM8v]' );

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
