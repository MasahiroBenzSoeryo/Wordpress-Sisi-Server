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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

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
define( 'AUTH_KEY',         'w!4&%EJ-?UT`_p#M`-1e@FP}GNAuxcUFKZEo#5ILK]7iHZ[j>Bh|4)RV.>30~h!r' );
define( 'SECURE_AUTH_KEY',  'DoMm5lOIq[Q[P<CFS6gEdgU&XML9|zu/opUoVCT%eSX;Fkw~gn0LJ~yi6wdGL?Ox' );
define( 'LOGGED_IN_KEY',    'AlFONhB8~~2ZP7-/LVzI4|kk/`5tA*DEAMi$H#|+G%/NH~ Joan#P:OX>1RKo$]=' );
define( 'NONCE_KEY',        'zH+:&3Prp<Io7O)QcQ+3e/T%xk U:Qg60eu{4sHmT7D;Ni5;TxkL9; l `Q]mO/?' );
define( 'AUTH_SALT',        '#4Dhc?u}CUKp.8xk&Sr}F7X$qM%KT]4ptMQ(e-Lrc}j*R:GsPwAQ#]aaeuuHz*1S' );
define( 'SECURE_AUTH_SALT', 'O9C-7e jw~N(^21z(+SphMMAtXKz[T!4B$1nM3_J#HOU+c.I.4;{-&LEGs)U`7dk' );
define( 'LOGGED_IN_SALT',   'ZCC):|xlTbSwMf;bv&dS&vKS,Ld}3jMm:fd+OC2JG@v-g[5.arKF.gkC})qc@0Cm' );
define( 'NONCE_SALT',       'O-E}c _yK)7,9QjZ4fbF<BX$-OIQuAMLGHCa`b~=zS&~9%eCLLoXRFQf!gVBoNM8' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');