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
define( 'DB_NAME', 'InsightShare' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']. '/store' );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']. '/store' );
}



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
define( 'AUTH_KEY',         'mXs0lGglY3JG2ZvWI2kX8gZFCeCo4HaYoQWVFLl8W2gntOUW2HF3moCDiJGhAWtE' );
define( 'SECURE_AUTH_KEY',  'hMa9DgC4Zrz0naJ2nBgithvkmueXQe0JxQSyzLRRXeRJ0VTjjERL2MjBpSVQoOFv' );
define( 'LOGGED_IN_KEY',    'ZNuC8j6hDgDrlOkJSlk3OaU1WMosslspMsnyIc3MWWO6VGKQ4FwahDc7NZQSoBaX' );
define( 'NONCE_KEY',        'meZAYWfVoRYeu4PyQC2ydpGE3WW8AHMkHg0oamgdZ0Irru1TtvMxH7x4lbLuPALB' );
define( 'AUTH_SALT',        'mnaskWegEBh6kGXNE5b9V4Tc9y5qN700jQ3AOqHOenmNYyR1FHxOH3JKvHIuTiQ2' );
define( 'SECURE_AUTH_SALT', 'C3eomGZNUzBz33Z6eKmZrL0OTxtiC0anNfwTkTkDlBP90NDplkXuDElBV1Zfxvgg' );
define( 'LOGGED_IN_SALT',   'JWQixyneFVVJjxAQrN3d3WSpklJo9RRTQeIDVEnQwOTu2rXagJys7qgocqB8oYw7' );
define( 'NONCE_SALT',       'MTmficcLYjDaWnWHHEL0UtGOB8DhNsUrRjOlYE1xMo4pXgGooMWd2I9rCmaUapY0' );

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
