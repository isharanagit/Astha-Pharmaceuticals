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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'Rs37UCpf8+xMOSfIekWXOtGUNm1rvIOtNKyPF8s4CPKpimraJAyHGQ3ywTahVH3xd7nOGwhvQd5/wo0GsBjZBA==');
define('SECURE_AUTH_KEY',  'YONvBaNNDcvB4gmfXK50NVplCUcYqqpEjIxSCdxfc0Hxxl+bufaqGCz7cy/iCdjEHraOn5PafASEreeCSt0+aw==');
define('LOGGED_IN_KEY',    'yDqmthTZ81NUQZhR2W0aH1Sw7YxNk2TxKIEZZ04BlP3mIRoC6iU5EbsnZzqQd/OCL6Unjnrm1XywxFJWnCeLMA==');
define('NONCE_KEY',        'w2UvepgMzVTDpunLkhoNqIVKanHRW4ZDXnRr7E7/ZjRxh4HX67idsuCMohD/b8aouafhfjJZbujF8dRFYP0A+Q==');
define('AUTH_SALT',        '0kGwJPVg36eVCxBLtqwdphUxn6/+02oc4jw49DzyM9MxVpSM/oamPnlF/swPi2wZdsr7y1qmXu3dwV4W0ZAI/Q==');
define('SECURE_AUTH_SALT', '0V3RWmRAtFrvlbmUXZ++7YqAfRHjCaPknZcHgBkd9SLM8QRICartyjM43HX0blPZci4WV9fT64s+XAcYSVf8tA==');
define('LOGGED_IN_SALT',   'G81CsrcvCw80WFuYNHray+mV8r1gi/LVsaQLMPIFkxOfeGW04psGeUCkXnf0fl0hPaZTpxOACdMf47/ZLby97Q==');
define('NONCE_SALT',       '/vhkAhiG6Pl0bo9KL9IwJemE4or0tSajiaKaCbZ4l4P9hwjvI2v2PQRb07ETB3RR/05u43b13skIzvbVmTnG7Q==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
