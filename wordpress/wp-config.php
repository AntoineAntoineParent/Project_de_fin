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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '{LVO U6hWQ>q/@O<Y?VadYouF1WqULw%;E[)Seg[6O!$Y;WGXmwR| y?7h4)A^s0' );
define( 'SECURE_AUTH_KEY',   '*6%{!-kUy?EDw;|l~Kykj;^*L1xdtnu:3N(=0|/0-N<;h$ ;agM=ylNyk7s$WuVy' );
define( 'LOGGED_IN_KEY',     'wK5h=BWxw}z@lwfVr4d`E~OlfC5S9Nvenc&elGWV~X|%uO6^]?RZlS1W=6W<hvpN' );
define( 'NONCE_KEY',         '%wGh+cuv1PQ(U(nLr4-kH*vS_LS6gOyzl<^BL,E&`$9zIrsih`cc&Ib{t0jc*;=d' );
define( 'AUTH_SALT',         '2sVsA#7`1v(Kw=(2_cA>put:p9CyxNslW)j7m6c5zf;Fn9MEJ/CYSOH}Zri_a:c<' );
define( 'SECURE_AUTH_SALT',  'iZ]j%9y-u$MqSXNvPCGY-n]gR(S0P>R~FE[YgcufqW}g+e4E${$8?pRTn`7v~1a1' );
define( 'LOGGED_IN_SALT',    '>lp2uKeur,TiB|R+~Lki!uz(ZPNqz|6=3*OC_Bf5R$PT|;Y8!Zp*q^BE/n6/V1{@' );
define( 'NONCE_SALT',        '^Pc&P:RM{~|dNM3)IXZhsv.w%ew(((!-sS(pP7[o^rY?e ./%N7?i(g0m$GN-^P9' );
define( 'WP_CACHE_KEY_SALT', 'E52v?%dJ`Hn<)nqXEX].5WxjmPT{sL+n1yhu])aiNmcY38U?0@<hGBZ/}%j!{I#V' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
