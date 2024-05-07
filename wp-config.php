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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'o+rN}2(r~{?Z=}TK7dZI1*heeS$o+R|Fr?BlpKf:+0fO+GPC4KzD EM*:As(vv8|' );
define( 'SECURE_AUTH_KEY',  '7,/v;w@OHih6eCCosf^[R xS+5f_yBL[cPM`5nVa{(JtSyM#_Kwd6NuS|3E:>a%Q' );
define( 'LOGGED_IN_KEY',    '({^&Dk<.@/e/+Hrdk#<GZRE!qPLfh<_D#3(v[.,%~)y>f-i&_(F:_]9m~%nU`Vv-' );
define( 'NONCE_KEY',        'K X=Cb52U`+[hynRS*!jXH&d{ZT1jgCSBe.e?3L2&kxw5fn-r T/XQ 3k|9}vB#/' );
define( 'AUTH_SALT',        'V/Vn%m|K=2LkKtq_~]znpD{Uf`JZS&8{^!}bYImwmX@Vg^6e,k,t-`j-W[z{9fK)' );
define( 'SECURE_AUTH_SALT', '@-n^35v2tyw{fN+JbkMrr48WpDm_[Y1 FmLbR 4WSAXLfrI#NX e+9;ykf9LDZKA' );
define( 'LOGGED_IN_SALT',   'Fc}{~,l^2UOBXz&vJh)Wub9;x#a)^likGPFZ@BeRk19-Ri2,A2m1IX8SxjSk);b3' );
define( 'NONCE_SALT',       'k}puD!6)XuF9LfOsR<C&#@.E3H3<h4B<CiSEtL;5E)TnrX$O;E~XX$Tas*5_9&oJ' );

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
