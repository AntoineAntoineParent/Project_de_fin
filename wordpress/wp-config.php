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
define( 'AUTH_KEY',          'w!(&#wGFVS>o/0b7M^m9x+Q7+,V=):dHF~JYL n$D[f2;U{P[DnINUJlPj,z.]+M' );
define( 'SECURE_AUTH_KEY',   '+1h?.uf||kxL+/*$y)j@j[|t?L6C9`Y<qb(`,FvB*3jkK+)[cP-VaONX;Tex=x4&' );
define( 'LOGGED_IN_KEY',     '6e$&5MOn@YQ6U!SJ4.mygCI7KTN;aT(]yN<yO/DuU:5Dv,5a.PLk49R&. >^p_|c' );
define( 'NONCE_KEY',         'R5v#pdugR7h?^WP0O7y}P66WD4G8T/MaL>@Qbhx/nT6pdcYHiG,E@_.q$S?e>i&C' );
define( 'AUTH_SALT',         'MEQAx) l<oI|D{mhHS2 *,N[u}V?}nb0m9[AjA7V`##}&a6Vid9I`<`KjXwRj]:*' );
define( 'SECURE_AUTH_SALT',  '#;$q rHf,nZ.;}}vf p`=LQyD(R(86MzrL<;d~BR|v 1qbzF>/G*csQ@PHh`u[C(' );
define( 'LOGGED_IN_SALT',    ';t^=In>&DNP@v4vg3P0/%_pa`*-<=W`dUc>w@o!=F3rF dAEcG&w+:H~z.R!H9EY' );
define( 'NONCE_SALT',        'tlqk.#q[w@<+**rdY>%4,d#RGk5IM)|&ea:;Md?naa6V42A$h#m(Q3:Ry%FwZ`y%' );
define( 'WP_CACHE_KEY_SALT', 'Gkq<28S,j-tXAhTDf5;`?TEz.//`?mf!3`>~A~-<O6+Dy28.^5Tg0u>r4}{{;9;o' );

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
