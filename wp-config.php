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
define( 'DB_NAME', 'new_plugin_wordpress' );

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
define( 'AUTH_KEY',         '}zM9o)ZJWTpwKE%Y8),0k#6<:FAh>tf(?0k=[Ht7W<H|gaLOvdwe#s7v(AlpuKKH' );
define( 'SECURE_AUTH_KEY',  'NBjTcPgkR~XQE3LQC3@(i1O$,gy{=_I(5_@I3Ud<|:|Z;Zo} {^EK7^fZp-k!Sal' );
define( 'LOGGED_IN_KEY',    'oDNmi,c6WUGqfa*)*JU&[8/yxdK!4$fPkV!&3#jd_F>1Hr`|vK`f0N0DIXyEY`dm' );
define( 'NONCE_KEY',        '|8@8KRbZn}[k-ySxt`_d>{?-5.]n&wj6.u@+dIIc8nhRgf$:KO<yJkE<o33,nx;3' );
define( 'AUTH_SALT',        'B@/6mdC[UHyyeFq`UVHhl:~3|#rlHD~ruEk]va<UPoM+^VE)+UO{dekwKq}hNUHW' );
define( 'SECURE_AUTH_SALT', '^]U$OM8M38Uh3Er~JZ[6Q 0#Q^~929zkJ+YfZZ^9<t[j-@cUUd_, <j$m ,A_sqt' );
define( 'LOGGED_IN_SALT',   'I+bUJ}$??2py|^OP:5Nu/N-#2$f?oT]bjv86Z!7Qaqc[Zma>RO5YQv_{<CW~S+B=' );
define( 'NONCE_SALT',       'XJ?YXFs!Bjp)v/Av9J; dYO*X<-iO+*@b)m~[&A<BmsRak#$]&fMJ;&%@>$#6*DR' );

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
