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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** If you want to force-enable GraphQL Debug Mode, so that users cannot uncheck the setting from the Settings page, you can do so with code. */
define( 'GRAPHQL_DEBUG', true );

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
define( 'AUTH_KEY',         'QN$;g--lf!jHyfpru!s0FJq!O<os)lyy9cK&YM#Z[cRt1;bo9H:uNG4BPGxy-}}5' );
define( 'SECURE_AUTH_KEY',  '>I1Q3/yK*fPW|KY(t%qlt/WA:=4L` aV_A(}iqFe:f-,tq}=`ghaWXsTKy0YO-]+' );
define( 'LOGGED_IN_KEY',    ';QQ YD8@XS{jy|vT:lS*4bJObK{yqYe3j`1|S&m+i[.PR)M]$,7;)(jLH,or!?5Q' );
define( 'NONCE_KEY',        ')_t^-y6S50i^.i8wj3>#lP?Qz$%]#.EDU5n&-%*=w+W 4T3hMdOpfgL511B@|~dc' );
define( 'AUTH_SALT',        'B~OUgK`?[8zSx,/-s)T6S|f1A~mX`;V`)M:E{%tr-)+CvzzEKrj7St/}>T2$%r~&' );
define( 'SECURE_AUTH_SALT', 'nM;T]&`2w]_N K?qu&1xL!f?mbDRt#m :R9hlrGp1vj~pU*W>YU:h6 vpe]a@Ugt' );
define( 'LOGGED_IN_SALT',   '|@4Hv%=c:w<9Wy1Ke_b%WJ56fp-ZiJeu>-i1LME3M@7auiuJdvX8Nm]0<r,Q&LCI' );
define( 'NONCE_SALT',       'Q;~K7B4hX^OZ~7]$-rRUydF=,My~-lh:5ynL3G>L9|;Y=y*0ROjx@~-K]PYzl8A#' );

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
