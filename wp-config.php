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
define( 'DB_NAME', 'bmg' );

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
define( 'AUTH_KEY',         '{BY6]hPL-U7NJ;`ms<Qm=D$!Kgu@GdG+$0Ig;-h.ved?{<va BvgRN>--]$,p1pY' );
define( 'SECURE_AUTH_KEY',  'a#vKSH@M~Q80>hKA^y%zV.4pw0)xT[&G.l2)_@i6^cy@y 4#zT{&&ZEa>#/pZFfr' );
define( 'LOGGED_IN_KEY',    'LGq5;;0Z[$SI@>I#x>k~p^UL*%O#(>D~.KS2> ENE-rM|j1n)c,7]4n&*e<~+~Wh' );
define( 'NONCE_KEY',        '/yw,Wu:cvJ9H3uXFi!h{YPH~^cgE3:/xsu$~ZZI7cXVD$+pOneLu]|=cjR;./HN)' );
define( 'AUTH_SALT',        '{7`yAJAxJZSNrx<mj5O)7ikrj(+#TTr4]W%UWKe3b,jbq(tKUPd{PH>Xg%RO!<S,' );
define( 'SECURE_AUTH_SALT', 'hC8F]uZiRV|H9O:DfKR+{){|JiZ.(T}?k;B]fXK1 QlP&`4yv_]XQxPXKs!VKdHh' );
define( 'LOGGED_IN_SALT',   ',$k68TOAEU|Z5DS@KO7<*1F(Q8Mc/V.dz~A@` J#(@WC*tO.YQFUCy~px)Q*Fw,m' );
define( 'NONCE_SALT',       '(vCM>{6DuG)=eF4@$@cO[,DGpg^E]!E?D<H>N{Wft1&PQGk!X/9l42.]W]4i{#?t' );

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
