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
define( 'DB_NAME', 'prajwalrangegowda-landing-page_db' );

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
define( 'AUTH_KEY',         '?.+q|,9V3Xe;>jRdbVNzkCWjpkH[|J.f8Z6OcD#8j3V>,1Va}8{SGltAFCEIL1en' );
define( 'SECURE_AUTH_KEY',  ',mUupD~9$bf-&^w)(sA2}RP.QT4)sTVsQOd?X[Xu,D9gDAq<_(OHt;p.TCi8P G5' );
define( 'LOGGED_IN_KEY',    '>U0Kk}[~8}IMJfwyooBfu>I>H<kVRVYAR;5fM_ =bbN&2 vQqS`@#xN--Ri)k`hD' );
define( 'NONCE_KEY',        '_5b Pr*>%^bFudZwb:2;1:e!|.dzwtr0ZI].y](BgZK7+m(XkSO%C[wR)dLB_F9,' );
define( 'AUTH_SALT',        'Vt7w5!*!BsDSh~!7Z$2D,:#oVW2zfFX2b]wX!@CfpE_e0d*/TM,:ilX0N&8}&{Mv' );
define( 'SECURE_AUTH_SALT', 'R~4{#84<{ gOY(e`pPb<Z=+x~K,]Hl{!2yveN|vXz!/+-t`4~1)>iWRM)|XUo_~T' );
define( 'LOGGED_IN_SALT',   '=6e*l +eh1==$eo?v%I/]bBtUdNl@v*}&}[em@lz0r qrgN_IruTxwxyTQphf;OD' );
define( 'NONCE_SALT',       '$Rs*SXjf|l_;mqHj<AV5<gBy1@)5FTP^KX>)G8j4S&h<eu6S.V9e/%1yBvX,4{1U' );

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
