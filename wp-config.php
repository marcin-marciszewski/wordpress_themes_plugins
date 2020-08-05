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
define('AUTH_KEY',         'Nu6S3XcyFKPUWMO63seqCzLX+83te9/coi5smT7VSbH+c3rFwWJOFUtkWAwX5SD0958TsSOvU9B821dNkifpng==');
define('SECURE_AUTH_KEY',  'OrcO3w2TuPIdzr+OuNzx4aQAVnUGLDPMofVaYmMgp3VpkHnaJqFthkLrf1ZFwTH/cgGKfvjHp75I7sL5kUYXJQ==');
define('LOGGED_IN_KEY',    'IZKCOomClc8rx1zPeXELjqQsdhtthSltVTkVK/FnCMRxYKTEBcYDiNYYxHNMObG0mMT4SE9lJOD9z/gvTVOfNg==');
define('NONCE_KEY',        'axRe7xp2xvZ+LSjtyVxppIsDz8yxMr3XgOirEzDsZlqFOFaMcTp98e9LdayxrWK0GowLKdWZ0GjX7R2N489I7w==');
define('AUTH_SALT',        '1bCsGwi9966cGk3EmSC1mXK2Pxi6hY1s2Sa4LojWrFCk3+utRmOOGgwF/qQetQ+7GL31D7SqO7j+L7nkAFUlIw==');
define('SECURE_AUTH_SALT', 'c8ldZfgkUgfhR2fYid0FHIp6cVPaWnxoj9RfhR6nHUcsT5lXBoYc7CPu66qx100TKYzhfRPGg6cFd4fj7wM6qA==');
define('LOGGED_IN_SALT',   'ot98I2TRsJNh9NXnAlhLhfxEywO6mbQg1PA1RLZ2uudV7YC8vVWbxezwQmaroWf/9NSboUDSGEJDQSg+BO2o2Q==');
define('NONCE_SALT',       'p0VRjirucjOaC6f0mct9H61BlqHuqdB6lGy6tqfMZMw5VLZlmL8IzraC+k06To/RiOajJG7hFm//yz8nwIrPfw==');

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
