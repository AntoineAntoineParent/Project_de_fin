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
define( 'AUTH_KEY',          '5FF:d5~;@E(u!Q_QQw/0+(&vwVIY+|4^(;]T?;K-Av}rf>-blVfrqgE%C!lI]i43' );
define( 'SECURE_AUTH_KEY',   'u]yB8WNO/.9AM0xg:,R3q</-_fv^$cj u%T$A^`hc~8wedoz-EIxDyQ |JFF;ROU' );
define( 'LOGGED_IN_KEY',     '~%(HZC,UncQY7D-$IrX/.RTCUck9V.-d#fk }?La59|iBkmV%.%XjK/~;#}E4_ow' );
define( 'NONCE_KEY',         'nO<R9Q`nN8es#_J`JGkh#vj#9^FD6C9=.wA@S?w{M`Oa|XUorR18MdOEEw/(o{(p' );
define( 'AUTH_SALT',         'sh3Z@N{yC2v@?$aQpt~l#}(9tWj4*JGv@*(DKF,!&&2fhpcB%<P)#.M/kGonAwVh' );
define( 'SECURE_AUTH_SALT',  'QnT:f@Y0au]v9I6A 387#}0h<3uevox<)qQF(69~~R*?l3U}Ul`mu`zmz8TgzDdw' );
define( 'LOGGED_IN_SALT',    '?8Oe%#h!{]qnt+FtQwspq#2.c@8:tWtd-(H4=f5bWKS.&F3Y}MIOuv7bk?){.H~~' );
define( 'NONCE_SALT',        '=^*wN0Mz; 1Va{geNgN9[ZA^g[O)F8BUkvUMhiKaM+0>|K)7`-rKY+]K8+E+Bk=q' );
define( 'WP_CACHE_KEY_SALT', '***jkDhylCY{iMAmVb8j7E _ms4!<3HQ]IZU KK=:LjpEH~{,_^bo#TC0(&E/prp' );

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
