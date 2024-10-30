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
define( 'DB_NAME', 'database_ginseng_nhom11' );

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
define( 'AUTH_KEY',         'hcZIebUNQ{BD^OiS9m#]lyzGMNFD7Fns7ufZ&R[9mvMG63 P ;zX,CP0+K3aYv7A' );
define( 'SECURE_AUTH_KEY',  '3,Pq&-iN5^5?ivnNu26G}NZd{=Ri-.paG<w:6X+p>o)YDNPi1b`HfQvteHwPw,3?' );
define( 'LOGGED_IN_KEY',    '}87ZlQ4GevoIa<ALA0?{t>-d$vp_36=Vd:Z+5AHz@(!FD6YC]rb8jd9Xs(F:~DIx' );
define( 'NONCE_KEY',        'f6fC%H}:p::Lxzp= ZXJ3HmL^+8}24E!cHrsM#<T|GY8g(r@V<_-.?ADkINJ,Dt%' );
define( 'AUTH_SALT',        '`Ps_~r7EW&^j@G[69q5WzB!Ls(.JJE%3F.KeMh4}:e{=pLB?(AH)>kq?|!j3o$um' );
define( 'SECURE_AUTH_SALT', 'f6>T_:D}xgsqp(_5mdIfP@Y Noky>rGpGWYiM$mA*`J+1Bsc8sC3#5sDiWC<I@b=' );
define( 'LOGGED_IN_SALT',   'yS$CZ#X0Pp%4^#fz$,G{@Rxf*|K!^#S]WpvE,4#X@SbK/_#K4YSj5%Ee@c:*h)=z' );
define( 'NONCE_SALT',       'Ju:uY@E-h>ml$vtLq*~zbZOL3Ks61W%gIQ]/:~ kUn~ZBzofIDA!L.L invt;;g2' );

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
