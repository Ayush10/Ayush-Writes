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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kDhO6lgyBbt11bLarXFJthUMyDyg3mZs+wmFIWMoxPzYd5YBk7JtosmcKhO+fi2Jq2HbV25qTi8C49knO7KB3w==');
define('SECURE_AUTH_KEY',  'guWYhkg05XphP/HQySI1b0yAP8frl3Ut8ty9r906okXjFp+xLQ1eXdn4LvhpgO8VhiVwfAVrmw+r+XhJr0Vj9Q==');
define('LOGGED_IN_KEY',    'qyQWdvtBl9p0bJS+teZugLuzj/i4WU/hFWWo5SsKOYaoSxYKGq0vvtkWnRmFzHMA6/GgneB29mDq8XUcW57jkw==');
define('NONCE_KEY',        'Z0muxSZYme/GpniJcdpIElxT7f1T2Fw+oqBP42YO5a1RNPHQMfwXUS+OV0Jd7zds6DHd+RKVw3tcjFYTG+0ogg==');
define('AUTH_SALT',        '0PjH4ZH68iGDLvLi8LVn5mUfxfi/pRZlGkKf2zFHrZMC7jGYJqrata78UmiBXlfLXoAlAp3bmM1S5zv59EC/AA==');
define('SECURE_AUTH_SALT', 'Q24E49u1yPkjydx5/qr1oV9yvv8a94rSzzfB+rwWiqKsAPZpGpYPREtuM9tuVrRvXPLn/pFIeZeZ6e4xPmUa8w==');
define('LOGGED_IN_SALT',   '5zEeLaKN8YH0t0DZ+HykvMv9wegzFqF/9DyfULeXh7Ona2UAm17oJITlPV8tpjiZDBwjMW4RrSHr4a07LbOrLQ==');
define('NONCE_SALT',       'ZPgSLhY1DiJ2bfSuFq1edJn5OdYh0UKGvQXqcjggpNeYioi7ZTV5e3TRPuARpNqzRA+kyZv6z2apn8RdvYahLg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
