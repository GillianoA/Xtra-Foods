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
define( 'DB_NAME', 'xtrafoods_db' );

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
define( 'AUTH_KEY',         '=6 _8_ +tB^.r~Q&_jk^3pj_:jRXw%|Enuj#-PDutfLuC8b>qHGXLdC6`dRqgzpi' );
define( 'SECURE_AUTH_KEY',  'cg2eVa8N-Syt<JA46#?b3d{,>xs&7<-2;&X527Rn5McteDtWXgK`QIp5_XEM3/F,' );
define( 'LOGGED_IN_KEY',    'ZW0>5}|N;QDG>ztYo#Z0D#i&clL>R(O!;X>ocN9ZN?>Li}JCKO^)]z] k+r6[ZgS' );
define( 'NONCE_KEY',        '5$x.8}zx<EN{ItrCsyi0Ap>aAMbd,W,hSas@y/GVk?/~K6d0;7C6Ff[9^*me~E@^' );
define( 'AUTH_SALT',        'Al?`1A2L{1kqu*Z.LrOx$YoiaY_R7BVQgZMD;Lq9wH^YEC]y;c/oT5lgHBhk%S3(' );
define( 'SECURE_AUTH_SALT', '$eV6[1,rB1mXi6Aqe20~- Zez.!IUo`u&h B7x,J-YnKgrpp>/(FbbwhXrJ*>H_}' );
define( 'LOGGED_IN_SALT',   'q|b{O]f&j qM<XU]|JYJ+9!ch C/QT!n{i;BJJq]`y(@5.ZKi10$wjl3oN0,^%(Y' );
define( 'NONCE_SALT',       ',Gr]hl5ub+`}:vJ@Rz0JKh$#+q| GO1P+=,7R0#`}R8+b2R%^-D]Df?cb[qn> . ' );

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
