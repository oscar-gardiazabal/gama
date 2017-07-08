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
define('DB_NAME', 'gama');

/** MySQL database username */
define('DB_USER', 'gama');

/** MySQL database password */
define('DB_PASSWORD', '260888');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QjF.Kdkmu5n]!yLJt,k>^$,8b)}qD~+2%v%cwmSNIH.PN+&ay%jALB&D5SOdxkLt');
define('SECURE_AUTH_KEY',  ';*9&9y3:1OP%`532Gr@c}BDpMXj}xhtQoeN)9eMIq]RX#4K]|@%u6h<H.,V<n[]J');
define('LOGGED_IN_KEY',    'plbz<bV3Aq*]&W9wx&FRfS2b2g8`D%k$Z rcwR~HjTUa$Y[6GN6e-z[VW.W_|IEw');
define('NONCE_KEY',        '{mkc`qN_voRW6,/a[0YR&$dMI/)8;4|d*4e4&a4k%thL8J,<;:>F_vKfDP&@Mf~b');
define('AUTH_SALT',        'S_sU)N,@L#Z,L=3tz:Ss>P5y+z4Wnf*x}%X>1^cIWzJ7Lz>,AoVwkE_U m6^nXh:');
define('SECURE_AUTH_SALT', '>[w$v,$hx))b7c)dbw$@pQUdFf09s3]3Zf_b6+0<rY_b46 a}c(1}c{<)aUf{bVK');
define('LOGGED_IN_SALT',   'O@P<|}*r>tS:EwMZsILO/4,fkKAXmffkk=$gdRHP]88I,HpcSH)%4OK<{Do$BJrT');
define('NONCE_SALT',       'e;k=!O%}T/<3jB H+|~bkoW%rXmzi[z<gQB#EE*b@JA%+EI9w4O,ynOukChmmCni');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//define('WP_HOME','http://gardiazabal.tk/gama');
//define('WP_SITEURL','http://gardiazabal.tk/gama');
