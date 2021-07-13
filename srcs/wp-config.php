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
define( 'DB_NAME', 'wp_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'i+jDABskhAy*AHx*j3aH{+t#]N%([k(O8;o>AbJe~HGES Dvj]wa_:U`^$aQHrB>');
define('SECURE_AUTH_KEY',  'S>46 ]HRxgmQc`%UyJ5o Q-6f5To852D3|7_`8Y1We{6;EDKVxWT/f253<+x=v9V');
define('LOGGED_IN_KEY',    'nrVIo89>-YZ>zL]GcI%h_b~3u<y.c]aqKBQ] ^r)!+4U1Uj S!Naz=C8C !<+<O.');
define('NONCE_KEY',        '8DU*FaMIBVga6gyGEWAe{v9Em>z%tDgb{2x_rZr9P4Aa$hFs 7h/~VHNF+f3WK9N');
define('AUTH_SALT',        '.(kkMYH)={5&-^1($r=.9TC!w9~:I+vHd6aD+ mLa|`!0;Y;pvY4QL^#^SL{]f`}');
define('SECURE_AUTH_SALT', 'yGFr?_Q1.6fW+3WpQoe{wZ;#7j)Uz.)_Uz=g)uq+qpYxs9hGME8-pZH<^cD{+iuJ');
define('LOGGED_IN_SALT',   't)5mOMb O=emnB2/>sk(9@0t_?,H;M0<7)|^)$YA?[-qN`*z5xeb3PKCxIXTn5[S');
define('NONCE_SALT',       '<Q~jVeQ{+fMD+CpIF*]wCB]8W8PT;)b+{Y?^]3=2-G|eNAH^0 95A/|~pVYT-Js]');

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
