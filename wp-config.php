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
define( 'DB_NAME', 'dasdev_db' );

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
define( 'AUTH_KEY',         'emurIQm30JDY`.u|:4Fk{fh8KlB8t}[ycK,VMFxADwTrctOZLQO2FquisD+d%b@m' );
define( 'SECURE_AUTH_KEY',  'r[_S0<U@p80Hcti*kG1UaTJWk2 bb>2p3B^yukW$md^<l@a.st4L_jSq*Xr32;NJ' );
define( 'LOGGED_IN_KEY',    'Z.NyNT++-z~569}bDX6~M`>97~Gjgz6ms7usU)`oT{$o^p+5,taw;Sso!+X|` TG' );
define( 'NONCE_KEY',        'G8iMyUO&uX6zUw|W{tC6#QPZS-%-ZFHK`/N3V!/tWe#S~()oM=s{]I/ri0q-O=cf' );
define( 'AUTH_SALT',        '?8(T|v5Z[HS(4Y+@asA0ate iMQ)9hSt7:37j_AC?RY[A=j.#(A;5z]BGl,7?(Vm' );
define( 'SECURE_AUTH_SALT', 'B5kNT 7)5o-AL|xzD7hweF}aq8>9aIL.10Hlu (`Ip6S2uhSgy9ohLg(cH9At3:r' );
define( 'LOGGED_IN_SALT',   '@zjcT=]UpC#/(!8UD:V`y^VsL6`*%{%!g9c@-;G]u~j7?y1Q;DbZh&q;EYzfAM:d' );
define( 'NONCE_SALT',       '$lV,FLT/6#ZxM~nN[W&`p/O$J-r.b;z^bI(&VzBx.4[vyRgIi@~3zZfkcVoER}B1' );

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
