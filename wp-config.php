<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cpt' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Sb[wg |kZ*3VR/dCsvyN`W+U(eHzDg?3Ra75&}6?)-UF`U|2l(baL8B~7`r(r,VE' );
define( 'SECURE_AUTH_KEY',  'wev$uX9~bRg{%KNKchmKp}P4sIXM*UJ P`XwNtK9}`Y>D s6/X^xh!7+o`:rLd5<' );
define( 'LOGGED_IN_KEY',    '[kCBsl?dp,qPz~PUKhWFYfiujCq_LPQ_[*xtrjb45Eds/[BM*(c:mBMXpc*GL9@Q' );
define( 'NONCE_KEY',        ':IirL|B9rXkH}#9eEu(BF/0?mC9z%8BTgJ9iINCL-?=Fs^j3*B*ft0J9PQ^xq33;' );
define( 'AUTH_SALT',        'sx6mPQo_iRr|}g(gUNfXK(h`p).{LcK*M}3A5`AMp>E#f;+:<yi.>_W1k5?We[5H' );
define( 'SECURE_AUTH_SALT', 'vBpW8,H0,XDXP=&GsqDX;rr1N7.$JRe|Ezdh}zJcY,MmnY:(x.q$fx=a/TyIe/@?' );
define( 'LOGGED_IN_SALT',   'TIz/LLL+,UA>whkle;4Z~U:|MK_`:__t07@sR$8NO})g3H)29lLF_@MH|GnUjZ$%' );
define( 'NONCE_SALT',       'rSw|U#z9V*fXXde:Y+iuJLv|KTL20P?rq3;rOW#rSmyWXyqyg8w$Mx{pTd>d4!cm' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tpc_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
