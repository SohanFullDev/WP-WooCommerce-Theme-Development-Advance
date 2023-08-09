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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_wccourse' );

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
define( 'AUTH_KEY',         '27%-%2kC`]~^MPSz/mm{$g8.&@3V`<Mx$HK*-srgwe|5JMP_C5(qs/k$4*Vqmp[~' );
define( 'SECURE_AUTH_KEY',  'C|,`0[sfdjlfp+1|F![xIr^qg.yT)KFMCd$#$2c9Nw&Y8msZ@;3/L5I68{cfg.gl' );
define( 'LOGGED_IN_KEY',    '=~mXx!Rk)A^7+b`B&AbX:9^hHy D]iXvfH(q5C4k6TY`zC^H9tJocUUdL]%~5|/S' );
define( 'NONCE_KEY',        'Lhwt}yNzAf?:~Xb>T:d[L3kZoQaJtL[yPrs?x`=!EGd2~o%OGNSi:m>rlSclji^E' );
define( 'AUTH_SALT',        'F(A9MD=RFaFKN` I1gBFHgCaO,7v3m%5^|GbBxq;iKG`7%;RjJQK1h!0z:!-okOO' );
define( 'SECURE_AUTH_SALT', 'fB1nK-sf?&`tZz+lRiE|We9~dfy9`kLi$@MCZ q}@M*g]:(27YkThy+[joizk{k7' );
define( 'LOGGED_IN_SALT',   ' w.={G@GUIYdwZxXj^2>M?5V~Xqn(]K0Py)W6b lgdp?|kXM^W(73$$Zt|Jtn1d ' );
define( 'NONCE_SALT',       'cM}1{Uj)bnlzywQ2N#i^<5 z{T[]lD|y_24@)^*-$`QeYR=E*;EMk<KQnxe/ )=w' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wcc_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
