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
define( 'AUTH_KEY',          ';,YkP2Nk;gCva1fXyPumi4f1w`(8S@JO+:7zaVrU04`/~6+{&z1RP-`G:rSMnsu9' );
define( 'SECURE_AUTH_KEY',   'O~{} ^UXE5V@(|gN=?,(<3_jx0e:;HUmRsVNCKiIx/*S!^&H^l?e$R81##+p0Au6' );
define( 'LOGGED_IN_KEY',     'vbco<g!.k@lc aL(5uH`LYcCx&]6-vC *`ZZwP^-NC;58G[m~d#n!-Z=Va6&G|4P' );
define( 'NONCE_KEY',         'kuBh1DooyM2%?rubnS,D }i8T#?]tZt_d>RhOew]m;cr_.dj6n`tnyiKy)^$Mtta' );
define( 'AUTH_SALT',         '7,Q=<#(94_NT.R^j7R-V}vQhp~pU7L<loC,nq4y F;Hi5sLd~ShC//Pr$0HI(uw%' );
define( 'SECURE_AUTH_SALT',  'c?sKx,*La3kdl]sY{AxTV|hh#g~#6h<{m H*0zZ_@_Ze_CbP.:D>e1^$G<4.X527' );
define( 'LOGGED_IN_SALT',    'sJ/?&yA<uO8BvZHZi/KPe{}8+d`_rhY^L0qNK~o1vc~ &oC%.Qpo,cg3DSkn&O5B' );
define( 'NONCE_SALT',        '~D)p nDm>wiXL~i]J4h^X0t*|h%09u+VwsIF`17 !%qZ>T q!Yn*caNhD|z^j?*U' );
define( 'WP_CACHE_KEY_SALT', 'MUe5oRx.f5@zM|3Gc-R)p#o|eTj~lLI69y:72{Dz<WkO({%?5[RJRzq(XFW%Zo|L' );

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
