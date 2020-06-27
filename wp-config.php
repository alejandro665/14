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
define( 'DB_NAME', 'n260m_25908931_wp62' );

/** MySQL database username */
define( 'DB_USER', '25908931_2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'TM4@@07iSp' );

/** MySQL hostname */
define( 'DB_HOST', 'sql102.byetcluster.com' );

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
define( 'AUTH_KEY',         'vp3ln53k0o31t2bbmx0jqi2y8ogak8srblkzklbvggfqskehuzi65ywnn3ac3ft6' );
define( 'SECURE_AUTH_KEY',  'nvnvwkxne9qovev3mgelcpxeyqy67svorswr9kwmok1puhodvyzhlgosoplgfwey' );
define( 'LOGGED_IN_KEY',    'x9kgldutcrj8kfvle5zriq4gkcjw1wnnthulej7ycy53nnu03707lmdeusgzlb55' );
define( 'NONCE_KEY',        'kqp0n78fqxapsllt3ggvosld1gwxzwkhv38olf7ryxrdmbfvrstsz7gtwtjfifgg' );
define( 'AUTH_SALT',        'k8th0pnwszgrzzpal0qydmcdnovfosz6vzrn2sqj4o5im2oif5nq8pkxnapowqce' );
define( 'SECURE_AUTH_SALT', 'd3pwwcc4tk55vo4nwxjrow1jj8v2pk4hojmixjhpo9qjilkym8w4lzowql4t73tg' );
define( 'LOGGED_IN_SALT',   'u27r5hnw6ye7yxmyipftvzruzfhz8b2mrtnqz6un3glzyuqzktqjlf5zpfvsyz2b' );
define( 'NONCE_SALT',       'xy0hk94o9pr8lwgwij7fqfjrlsjam8hwzfuolmlmigimeejhwfppfqmcmqvszdc9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp0b_';

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
