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
define( 'DB_NAME', 'cleaning-project-' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fVDFocw4mlKI30E9GbN6FQO5YImVKdToLQL2FkhUhkv9zOYONUHlV0WZEdKYoHoP' );
define( 'SECURE_AUTH_KEY',  'xpRZUj8SKCRVKWQTey0SEznEGotfVfJCzt2Kof5VQelFfgfBjYayrhHbAwtiDq3A' );
define( 'LOGGED_IN_KEY',    'rV1sCEBav2h1c6ebm3RdSOSYoqcDFRz0qgQinUwunPWlVw1YAQP534b9AEM9Et3O' );
define( 'NONCE_KEY',        'yOsGTeYGl11jIMJN5n0ZP9lFCMoB6mqYn1BXNcwL2nQiRBW1rQN7bYxU0DeNrI8x' );
define( 'AUTH_SALT',        'afTsFWWOpQLG5KFHnS0XltjZ2VfjjT25X6snrHLAQ9TnH86vlW1GmwhF6NDTs5JT' );
define( 'SECURE_AUTH_SALT', 'Gbj2fHnjjJlg75VJl9vPpdvKVFLibOBZiIHgUnq3FQnKjlCEsugPN1XmjDbBpgbn' );
define( 'LOGGED_IN_SALT',   'dQd0HGHxQfbjDBssULZogSCzjN6MvX9eCL7DsSVTk249EnVfuwE3NDgJ4fGx8Uhg' );
define( 'NONCE_SALT',       'I9PX1kdQC84HJUhABZdLhJj0bqFaRpExkMNYXn4KUqyFfalTzxEzIiPpIALoaHDq' );

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
