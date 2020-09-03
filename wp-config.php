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
define( 'DB_NAME', 'cv-site-db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'TmCu:ugX:7iRK,gZKwS *AQwx&Nhu0v|c^j:z}m7tisP4V%y$nVBp_K@~vrn8Q{r' );
define( 'SECURE_AUTH_KEY',  '.?(8:FH, h@~RQ434RFFR:mzFXBQJ<Z_tpa&X#& o;[tRrlXUal-<G^3p!2e91Y}' );
define( 'LOGGED_IN_KEY',    '>+ymdzP<X03E}_yr%}B1k-TxHdt.~/IyO:%^w.xS {pC=.b0KDm,DZN1s}Rl*@o3' );
define( 'NONCE_KEY',        '`E*(_yfFGUif}}GP`2xFKI+_7m@~dEQ0C!2]keJ=?uPRJ*YGl:g3.DX;<Y7-2nvn' );
define( 'AUTH_SALT',        'H1B=) =%K,,>[t%h|sl?>ncnpU0nFaVSHvZl[37$a$mhG/h10rqO.zxbzcQ}t7Mq' );
define( 'SECURE_AUTH_SALT', 'oJV!teiHlO^C<]0~=/L9oHLZ:.!MZ(r-oWE@rSUvz8J3b%c6Po4roIY$-IS-|pS4' );
define( 'LOGGED_IN_SALT',   ')@b.(<u;.UKYffrSBIK[X*cbqRW9k_|PrRbgzc{>j|Ct}C1f=X#A)T~uX ~c$+^{' );
define( 'NONCE_SALT',       '4(:1KhPefRg U:yEX{mhTPF,Dl]Q2F`R;QN@<L}<=X1%Xw1x:3;lz&/!3-{Gt67y' );

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
