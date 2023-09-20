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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'workpress_v631' );

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
define( 'AUTH_KEY',         '!=jg^d>+G%]uaXj8bq1o*8%yl`bR3Dw0KT/>jYsvB)@PJ-j`iXEIkE);IJW82BtZ' );
define( 'SECURE_AUTH_KEY',  '(=VU<5kG#BLkOx7+})xPFo]|Mo5(^E}:c6u@pl2{xCJ3hne:N>4AeQdcj}{/(ooN' );
define( 'LOGGED_IN_KEY',    '23E(DhIp^K<F zQNKgs#eO<<n_).(`*OvVXeu9AgTwY@Z9JM[%/`+eJ{v0R9,/B4' );
define( 'NONCE_KEY',        '=`r&~qNli/e7a$6f!ZlO__!f!lqMpAO:oTDyPw4K):wPx3S$t1Fn *~;8uEy}s*#' );
define( 'AUTH_SALT',        'GyNu,(r1as#&bm<VQzRo2+m-ck*V: Dd~[FUO#f&U@45PWtiXD z7f{ycSAuDPAD' );
define( 'SECURE_AUTH_SALT', '28XY|t*V|S3#>|>^9n*8C(zJ9SN34(oOwhIWh/]R{,UVWJ&vC]B0p>h3W?%.S|W(' );
define( 'LOGGED_IN_SALT',   '/rS+U3!aOP*PXA({#{)$o/^JU7k&QX3)cdN45@KBj-lY&f[2LD&e4j9xa||(KdBh' );
define( 'NONCE_SALT',       '|v38@,v$21pk]L`1%+y>oFno&zhAA`)1a5H%LD]r9jtK_*a*pJd;f3jgC{JC}d8M' );

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
