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
define( 'DB_NAME', 'twig' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '~?mcKnBTe!,kbN5b [|b.G[:Y;Rc~,?|;hCCiG;)!rB~;b{2(YAN&_],x~vhigkg' );
define( 'SECURE_AUTH_KEY',  '6QFIcu]dlR?_})cJb5]-Ak$*Z5~A_Mw,k^Uy GCM#HKu+Qhf3.xD:XNb&=+>v*/x' );
define( 'LOGGED_IN_KEY',    's]{?Ma_FVaDWl&0A2%:v{w~z_pvVziXbu@V&Jg?Bq&ph+oC]5,b3pqJ6MuP0uJp=' );
define( 'NONCE_KEY',        'QpN1({)2f(OgaA_&S-^I%E4.{75FJ2&,3EYsr^@PpN6l,o.aknM&@<ob:g>UL+Ij' );
define( 'AUTH_SALT',        '}H#,y/v13Z*IVVc4(X?sy?20MrM|m2}#):WI8SP:G-2d,>,z{@g<6rhD;/p3*lmC' );
define( 'SECURE_AUTH_SALT', 'Dro>>B6Q+x/[R`=:_]e_41/,S$0NTMu30*uLn?[JMv{&BjK1ZoH?Xy`V]1QtFZ[!' );
define( 'LOGGED_IN_SALT',   '</P%Z /HJ-ubFa4b-nZyz>{,?3T4drclMC.)ax4Y5~ubKtl.I dM q[WI_E`n&hw' );
define( 'NONCE_SALT',       'HBbn[E$k=Nm#$Nvg@|&eKp.X(8knHr$Qr.FYx!p,i}-raniF*]n5V~m+@|=|M{YF' );

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
