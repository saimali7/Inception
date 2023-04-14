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
define( 'DB_NAME', 'Database_name' );

/** Database username */
define( 'DB_USER', 'Database_user' );

/** Database password */
define( 'DB_PASSWORD', 'Database_password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         'yqu8Fd(HQW+.i0Qg3sp>ckDq$4M:FPVfq#Tfh6FKlD&IB2fS~?Qewh HJJpZX$yd' );
define( 'SECURE_AUTH_KEY',  '$v/O=WFMmW<d~=*O!u)(Q.ZEfpd}r a3M.=61).tx{Nb(8*,wydK/b~XqmMRe?~f' );
define( 'LOGGED_IN_KEY',    'bj0!r6;gGHcBv=DKrRlc;Z}|I$h{;ol Ov:0?}{&yrZ607Y) sfm^5$mHcT<6X85' );
define( 'NONCE_KEY',        'Ofy;@adrk]aRjhYaMYocNbR{9]}Do?P#cSBTG:n=W&5-$AakKhUgF.p.o-*Y#:dN' );
define( 'AUTH_SALT',        'GlXJsWyed/[8LHk@H^?)Na]7C=Mw{vA^Gg/F/OM>[)fniq70qq>!t/%t;-uqNZ1D' );
define( 'SECURE_AUTH_SALT', 'mtA(mMy_t[:JCrrCL&|<M~qSjdr:m+xVco.>?3:]Mx9,V~Y^M ;z1xY??h)V$wEx' );
define( 'LOGGED_IN_SALT',   'l8T_y$]Tdx!r{rI)$#phvF B<r*e}Zn[+hbybJhdTOt-T-nJop6_F+?@OJw@O:;Z' );
define( 'NONCE_SALT',       '*K/1*V!7X3xqYAsH>2vNj^|2ws$P}Z&8*2/!^2f1w#8f@7%l!]F `V1x@|RYRc?H' );

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