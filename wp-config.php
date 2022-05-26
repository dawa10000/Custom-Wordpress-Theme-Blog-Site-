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
define( 'DB_NAME', 'wordpress.mac' );

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
define( 'AUTH_KEY',         'M%y.AuVc80VP>W;{vkKG>eANh.<^moUBxy4uIZIR^4k*;BINxm1N?>/;t}aCt.MP' );
define( 'SECURE_AUTH_KEY',  '#r`#tI<QF0-_b-EV9xP@.#abR|RiGw_GlX#n4qUQ 3a1LH@Y;}6?d!147R+West6' );
define( 'LOGGED_IN_KEY',    '4*~h:klM@r%9CmF(5&Ezy7!n<sfRiCjS^}#8 OPP3U{fNM!|qGrO/5pe|MUnbyQi' );
define( 'NONCE_KEY',        ',/ VJG%KgP]!!@3/3wqzKFfaS/YI)NYS^KG(w%HaIZT%2LY%h|*/3De3S}[>Qm])' );
define( 'AUTH_SALT',        'vzNuBBea)d!Cw653m=)BPPOyG)%73{i%bgHpm@z.w#o&Z_GG^<j9q-i-FrcvY=Ph' );
define( 'SECURE_AUTH_SALT', 'FL}WbW]&~d9=tD9BKRu6<t%a0.9`S_/])2l^K z7{Yws0N#!Hza`a`cnl4-cH4W%' );
define( 'LOGGED_IN_SALT',   'V>[QQO`SIR>.Pb!{`L)4ZxxQ6}u(7>Wq!;RuW<P%lWb^zw< ]t-slW/?way^l/FS' );
define( 'NONCE_SALT',       'jhq^cA,SP`@(CoJGzo;{-,,L{MCh(nBFRq*17r87d#PxgOu8oB&rb2E8N-y9pm=f' );

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
