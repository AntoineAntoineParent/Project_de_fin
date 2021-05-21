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
define( 'AUTH_KEY',          'vDwarI[~.4-D5J+SuF%CV=lP}O/7*o|?6]Gqwx)W},MYh)dqy8GAL[,;a|h6BGZ4' );
define( 'SECURE_AUTH_KEY',   'LXgD3.A6eal@T6/1V06aUA_%M}Th7P7Ysj@C<&O2g[DYz/[Y/7XRR`R1.:OY=(13' );
define( 'LOGGED_IN_KEY',     'r7X~ONI Z3Hh-(Q.@$,%/w<Ea4XNxxI=%:]UtcIt<<4({`&*0>`c25+jg)Tz UuL' );
define( 'NONCE_KEY',         '?b%}s4E[r:JtdI~=HXh9[,~B2RCn.19g1I;}6[?6B.Zs4kK7NQ@D~U<2$;4Ar)T*' );
define( 'AUTH_SALT',         'A+TePo-^sjhKlGQBt[d||i8wYS$GkihCt2LHP#sIP(F45]m9cT5!asJ!;gSfjDlt' );
define( 'SECURE_AUTH_SALT',  'dQ dhHn/L4^MZa}53@uw..Hly:@yjE{)lBrn/)RFbCp(*%Gs}J3j@[qk8/.QJh6s' );
define( 'LOGGED_IN_SALT',    'K&VpXDUY@~{$9-NCis]%!KBh+`UUFubGRJO=!aJP7DV9~eJaH: Nt~o@eC`.Cg]c' );
define( 'NONCE_SALT',        '6N9eJ{qw).u_M~O8!g9PzjZm&%U`c)LbW pBh$T#gp?bqY~bIY}%>a:`qi2jB09:' );
define( 'WP_CACHE_KEY_SALT', 'CrH*J1JQTS7X|(KZG|o9{7(osf`PP=<IZi!-$2Oc<_9b)#r(ByAu6ti-9;d@^SC-' );

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
