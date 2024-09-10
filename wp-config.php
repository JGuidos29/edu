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
define( 'DB_NAME', 'Eduard' );

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
define( 'AUTH_KEY',         'tMv}NNjF3w((@e7f`U%KHW=/s7r_Y%H*6Cy)u0N0Y{`$Rp@e5s(/c=6kKZo~{F l' );
define( 'SECURE_AUTH_KEY',  'Z``)C{y8^,v_3(t{juD4s^K5.oKp$:AC/pF3?ketGozpi^:yX$/.x<s.P2G!%$TF' );
define( 'LOGGED_IN_KEY',    'FEEsP$|qLVSD_Fn=|(|6ru!^PDYdE?T8+ #xwW/jx!`*J E^6j=b9$`b`f{BMPa<' );
define( 'NONCE_KEY',        'OT4X6q(C]9e=L=85=z%i~ksC59tJfPiWQF1H{?cw001Z>`cJ|Cq6R8-32m_$~on6' );
define( 'AUTH_SALT',        'V{C+@XRJ8F*5So}++50XUzq2HO(`g<>P+1{z/BR*{;i}#adJL:z<bK&FPPdXXy07' );
define( 'SECURE_AUTH_SALT', 'AOm6RlY5qyf)}v Sji}_OXo;wd,Rk9hob:}5I-A;<z:78xnm-^Vu]D=v!sW3kYDC' );
define( 'LOGGED_IN_SALT',   'a?4Z)2?::3fj?4z[hfa(D~AJt}>R,b=qHluJ&d(ss;<y.*&R*]5GW&dGFw^,Z!2S' );
define( 'NONCE_SALT',       'nt[VYsd+qHIB*d&i3C&!mn[M9Z#y6{2t.R2F1K+YN3di-YB4*@y~!>]h6O_CO}j ' );

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
