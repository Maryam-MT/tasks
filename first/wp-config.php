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
define( 'DB_NAME', 'first database' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         '8z+KF7OGJfIwVTO3s+65`3Y#aUq`sOZe{[)pT6@r4?Ba+1{57Z:t*!wyZfbm]t!f' );
define( 'SECURE_AUTH_KEY',  'is?n<:2.n/e&g7OT(]QDa=VG[hqGG:7p$[O4yq!)!uIq`bxt!|,R(I.i))t?m]cY' );
define( 'LOGGED_IN_KEY',    '6,UQpd#SY=(_>l3#akIw,>VFm;;=6)R6Y:]-`eCm*?Aq@A 4?v<(Q]$>Y)MlMcNC' );
define( 'NONCE_KEY',        'N{vY#`u;b&*Hk:p@;e=o,TXjqTMA$Otf*Yu5?bK/)X2ZiGXX[F@?@s.VKTr<$#QK' );
define( 'AUTH_SALT',        'S8ct>}&^2+{:]?:vaB!78lk(eOS%z8][?A(E|spD[O^OcD>sYQ)FVy]SowEq-WST' );
define( 'SECURE_AUTH_SALT', '@ag3e<$wmcu8m*:Ip`q(RXJNBmIGNuutF?M-iWB[+J_3^/-E,p6wYUh=-weWuj^O' );
define( 'LOGGED_IN_SALT',   '=mW9RSglu}XlJGBaJ6:}5ulPQSs60wl0?7[*>CQt{~0H_dXi4.t5bp*wm9^j2L ^' );
define( 'NONCE_SALT',       '3$rA7+swA(DV_pdJLN=.e*T.pNgv[+Ps.)UsL*|}yG09Qo5^Y8>?0`2l[ !h#spf' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_mdoc';

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
