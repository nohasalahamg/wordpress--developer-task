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
define( 'DB_NAME', 'task' );

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
define( 'AUTH_KEY',         'S*T0)9,j9,9e#*}f~!ggM,^Fk)?M5_h&dCHF~]<e<bAETJ>XhJPU8l<l^v{JuGcO' );
define( 'SECURE_AUTH_KEY',  'p9g>vK^|z)/;yLAeAQhCprR<6ivPBk`DlQ)X{#v]sB(BYte^)hW|]cdOS>w}L~SF' );
define( 'LOGGED_IN_KEY',    'E5;0b3B]=e+3mHP*l,-c.5YD$ll460@EKk.Vd=&gbzTLWjc|HBo&V=4O<n&j)w@0' );
define( 'NONCE_KEY',        '+T:uC#qRfUPwZJy4:=@H[35hg2I1a]>+MFK,M(6|jBX}fKL {K?i7l<=|crQ*X`P' );
define( 'AUTH_SALT',        '7/WOu}R)v>gh Q#u&a[Y(jUjawTd&sAU[ +XU{WRKE.,>;5DYaQlUb8L!`wP[(rc' );
define( 'SECURE_AUTH_SALT', '$76]Ekb[M[H5/`B}vd0+(xE~h.+3,.OQ:XiLtFb~aF|>dvJ]sTCT#$<*:cYabn6s' );
define( 'LOGGED_IN_SALT',   't8Rz({5{Hi/xv<1bDQRL;9)l.`672(Kr;bqCx@-?XWc*6K~x9218TdGL#$V5Hz(K' );
define( 'NONCE_SALT',       '9MjV7xgSJ24:t?PBQg^X%eFb]G:fcdD+*l8zJ&S_BJx<pj^>{&@_W8abynzm*opt' );

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
