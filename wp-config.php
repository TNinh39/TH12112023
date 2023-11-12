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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'th12112023' );

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
define( 'AUTH_KEY',         '&ibb id7_ks9Qm,SYzTg=RhIfvb3I%%SYNB;y5Z4yaT(mALLkR;oh:w}94lo~T+#' );
define( 'SECURE_AUTH_KEY',  'ux6:wwkq.`s<c4)u^/Rq_t~@YA } 497P`M8}vLG!6t*&Bt]/2bt3<Z06@BiE!eW' );
define( 'LOGGED_IN_KEY',    'Q7*2FLIj]urDb/O~up4Z__A&P?zHxh>ix:(zeIIO)0NJ/ym;Sy*Mb7eR)klr;=G-' );
define( 'NONCE_KEY',        '#9LdI,wuJtf2[h.qiJvfC[c[tvW%X3|ES(+VC*>RB(vqKUyVK$=^hLqw#HP1uk/?' );
define( 'AUTH_SALT',        'b:o)PnWBG[jRBcs*vC/*K[|?yRmf}Js$&(HZ_g~e#!5O>yd=2R1CleV/K`=ZOF^J' );
define( 'SECURE_AUTH_SALT', 'FZ-*pTy]0}vroT9EMie%=eQkq0~/Bd$$7>$N@tgXNR$3Xlq|j@S4epW8O%B3Zu*9' );
define( 'LOGGED_IN_SALT',   'hNQZt={=x@y#gLrujj~x*ipuFK|?d2g*b %Z!sPz1Ef6vSuL1 ~G(~$FuaK{}gI ' );
define( 'NONCE_SALT',       'CnQR(+|;rWe4&30!^@+A@`_T!hJ=/^2codtw#4r7/2kQRG3O/sU%1Y`NO+mBL*1i' );

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
