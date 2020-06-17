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
define( 'DB_NAME', 'wordpress_database' );

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
define( 'AUTH_KEY',         'G2CbjD3>[+@:w-3_uEAmGs8>]B@`t%gqaejHdJi},gb6LxZ53U_|aH[,5gd4lv?>' );
define( 'SECURE_AUTH_KEY',  'zF5swz%bVmv:$=5b=$fWcHZVrzpVpfY+5kdEd21!K:E(98.1Q{8@Y?Z|t{Vc|aSK' );
define( 'LOGGED_IN_KEY',    '$WB%T7Y3UzTXV x~`g3ZZ;H%&wowm@u 9ceQbKGbmiuq*#oqNj_%h[z)+K-tB~=K' );
define( 'NONCE_KEY',        'T8M:jFcW2y/VZxJ^-kl A$GEV/Ac#m=P}]24GwWeAi2v@?.;TLa{-SKUgDCOX4Z2' );
define( 'AUTH_SALT',        'svK2QZ#bI3Kq`Sf}3:qT3AmUyuGE=m{>me=7 J}zw-Q!aK|+3&^5m7F%`HbKIn{3' );
define( 'SECURE_AUTH_SALT', 'Kx_Q%%KvMfO#>lh+/;zOT2n<Lu25h_r~dIf_-xMMV7?5-)8>U%ZG1GAH#Dy~theK' );
define( 'LOGGED_IN_SALT',   'Q+E6lVl!IP-T@VlUm9_3ws>/|+geN,wca(Xx]% &p~q;huJUlJa:d!!Ly%Q.=3b|' );
define( 'NONCE_SALT',       '*r``JeBLN$Hf[WW4b4<KBIwv5-!=1lT.,(8aoNZ0k>]=@]e/@oRa6W#Qv,vFVbu*' );

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
