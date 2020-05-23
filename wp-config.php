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
define( 'DB_NAME', 'mypersonalweb_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'zal~ Jx*_6Ca|A<$WoPRWYV^[,sR),=4XuAX%7G@HONGw>WBQU9-uL3Ttl+oAlOr' );
define( 'SECURE_AUTH_KEY',  'E@51ZlEw7<IgD6?7:#I@R$l<tHD(W2|b&>,2O&^DH:U:c,J4RHo]4-AOav@p:swQ' );
define( 'LOGGED_IN_KEY',    'cy}zh!&g]6ty|mj@;Dcb#,1@.uT5dV4$HnSGD]=OPC~c928)l~f5s.uLFx{X.{uE' );
define( 'NONCE_KEY',        '3$}G6;[1v^C)nvMHmeb,m+alKlQ#i$B:PrsgO;q;F=<,U@oF@U/C`v%8<&l-R?EM' );
define( 'AUTH_SALT',        'qIWp d-SDHhVKO,{*!1e[eYSu GPB3jGk5S!EZb]+[Q)7Y}^#$y-Nx^j.6Ti0{d5' );
define( 'SECURE_AUTH_SALT', '7zPFk$G2].V3Itt;:$)?VeF680Y^T+1sV4XCtChW_`[czt#g64[fE#$qP)J!~lLv' );
define( 'LOGGED_IN_SALT',   'xn5Q5qB5pERQh6N=LFLsJ(!~(;vhdD!uKX@ZKjIX5clCGoDBlnqFIVCCAbKX}FW(' );
define( 'NONCE_SALT',       '}xvcm$+Mrvc7hG*OaL3Im};Yxv}iQCY(IhMM;-SN{(=0%nFoS}6fK*n{<N|k([g|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
