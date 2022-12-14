<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'latihanwp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.CE&:@imB#m|Ej-AE)8QW%N,?cMG(:IQ]f6.0/F S:F},Q*lQuzfb(`LOL%N[wh4' );
define( 'SECURE_AUTH_KEY',  'qhRH3-4bnysw=%E|sCq XuLzdUU@jm{R%Ng-WR*~]cX=<qt:C[+-Ux)}ggje;0v5' );
define( 'LOGGED_IN_KEY',    'H}u&NwnN^y}.Ehi)<-_#` :KJ9[}MA4ac5Mr{#n70~(DrJHH6r!@0:W%-{7=omRi' );
define( 'NONCE_KEY',        'HQ>v*iDH4zu +1)g?5Mx6F3dw,$}yD|K4&UR B-by3f20v@Pzh$$u%1y )E}QT)j' );
define( 'AUTH_SALT',        'UGsPhLhRf~*1pI9@M5QX_SS.nYMA,5L[=Ya74yqe{gn!ZlaSg7EsQkT%IF/LLb?u' );
define( 'SECURE_AUTH_SALT', '&b :J=?2Ug:MX[v[L=EB#:/MN#D/^ N*9Uj!hHa}M^4HVFhD:^#AYKl>gTodSsBY' );
define( 'LOGGED_IN_SALT',   's}GIHg(Q.rRt`Nl@q-;.*2D_F5QleB983JS,NK96z?S`1} & )k]C2Dy|x,]_{<1' );
define( 'NONCE_SALT',       '^r4_Qrv%V GG?NS;@-ps6n3eRzO`R;X;0Jg!_A]N?|D_OD2`OX01~vH] NhAIKS|' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
