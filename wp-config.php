<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'taprobana organic spices' );

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
define( 'AUTH_KEY',         '4?KC}$*~>-4KUV[zn>hyV<Z*fXGv+=_= Us+),aS!jIwv00&8e>yjLz]6Jd&1R6(' );
define( 'SECURE_AUTH_KEY',  '4&e<diAK/<}p=@G%-;:[]0jREe$r=Yh0vgPC;fc|:<[@^UgD-!glW`,^,m<[M$;i' );
define( 'LOGGED_IN_KEY',    '4XN{-<QGazDF7|}+I>! g]?vyPYc1@1bK,^K!u}zk$otVW>#H6,zIgyP07FKB!J^' );
define( 'NONCE_KEY',        '>j_i8`1=a_JocW4#2N8>km3MYhq*w{&TVPWg.HP@Qg8t.W5Imfu,YYbzFh=yM-2w' );
define( 'AUTH_SALT',        'h}2<4BX#a@w;<s;QPUX,^SB]K@DxthYyg}?Pc&w1{B7|TxO}s4N.>zfQ~ogV|0&>' );
define( 'SECURE_AUTH_SALT', ':z0ra%_~(4)/oM~8Ja3pv}e?MaF 0avZV{:0wBFnJKd,)1 *h3 q<d2 /]lUVZDB' );
define( 'LOGGED_IN_SALT',   'Fn<VM}qaB9@k:.zr=R:zdf k Zd!=uawG|</p_QqBVJ-kw#&wHwn9HF#MvK>%CbS' );
define( 'NONCE_SALT',       'jnz]CQuBNhm/mrr/F&C[4ja4,vZYj9 kTN ))335gpACjptnPF+nmO&t.#drQc28' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'td_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
