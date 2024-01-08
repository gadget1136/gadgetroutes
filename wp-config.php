<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u253682425_eLqbs' );

/** Database username */
define( 'DB_USER', 'u253682425_FDnEa' );

/** Database password */
define( 'DB_PASSWORD', 'fKv0POtppf' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'j}8L4zmlPUfJtZ>dAT)?(,o^Oy$%TdzIsU~}SR<3z1Ox~7%p>zt&#{1R$9*Uf*y}' );
define( 'SECURE_AUTH_KEY',   'f-`mv{+E75m4nciy1xfXYBn.+u6/Bul+M?a3L65Mg?5Y9ii`.,GV{vpAj1UoK}gi' );
define( 'LOGGED_IN_KEY',     'DC`B?7?2)VR<Azin/Y>|xi+#pX}czabOY4{c&y~HfLb_{d&99UnR<pzH`/]n}D(?' );
define( 'NONCE_KEY',         'QWz9yf*tV#<z..b){tt74^`e+^+lJO7C%-YGBV.7U>NQsrp)T4 WIL$%>[t;olX<' );
define( 'AUTH_SALT',         'yNcEQ1a^7Sy21>3@LDL*rLWz!!r{nNL=*2~NrG{sYz<=4[/T~2byf7!(3xeKe_q<' );
define( 'SECURE_AUTH_SALT',  'HuX)lXLDbMOjKFMI3RvgO(k#ir/U6?]FE0Yh)KwI2[G]bYB.=>>Usb(r={.D`Rv)' );
define( 'LOGGED_IN_SALT',    '?uGrb8sADxh(6|mA04uPO7C*f&H4`5Dh[?4stqh./0owt)A&q%%h|I}J!-n$X,zM' );
define( 'NONCE_SALT',        '[cdN]R4%=dZIuIwo%ArUJ>[]]KC%3FVlVo<_|bv^2CR%Mk2-ovH)>Sb0t-[9NrR9' );
define( 'WP_CACHE_KEY_SALT', 'd ao[(S<nTkb3ZQXA(]/;?hyega`rg?R,EA0z7t|i^4!]Hb|>ws4n*Y 6*_Uj1+e' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
