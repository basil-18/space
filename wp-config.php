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
define( 'AUTH_KEY',         'CpQHrCc-HrkGzR.H&BchBWLiK]J0j#6u9k]hpJz@f6J{el`W%)Zi7S4W<u5r[pf|' );
define( 'SECURE_AUTH_KEY',  'KO$n-%)^0Jj/,/@b5uerV{`^,d(UDI*L%c[F:kEd;GUiB>M`@j>w(hR$AHAvbEo{' );
define( 'LOGGED_IN_KEY',    'miED/@.vP,)Ll</^p.1)?F yQyDf%4QDBpMR!,1|3i>7Ul>vqBD.ww%A9bLD%W>9' );
define( 'NONCE_KEY',        '0|]b4=#Cv*9m0Ra2/d3fuQ:qFF+IM5#Hoh>}b*JV1+z r4(CWWs>KCD#%P.Nd+;^' );
define( 'AUTH_SALT',        '.(dvvD: rN4c)RePnqfy>uB/dyXcFgne)~g*HO9F9.$ 34P5Uy:?._Uh*D2B@^Em' );
define( 'SECURE_AUTH_SALT', 'k7%fYyy.z&m6b!2^:Ik7EEGRN*@i/%[qb?)PcOy8-p2_o*NYXhgHDCuO<jK:R o7' );
define( 'LOGGED_IN_SALT',   '-=ePbGQpaF}0i&R%w,r(Q`Pry<cbW@XlQbA%4fFR%^|vX=qWpp|~9n-R8EkHhn9Q' );
define( 'NONCE_SALT',       'o)E(3T_6Qz?eW`a]>$S{5$?S7?SiFMSve>RL>@~j<|+!r&$wBM/s;:b~r@LHt|X)' );

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
