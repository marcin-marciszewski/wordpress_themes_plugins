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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'marcin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'london' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'ag;eTyf;4NsP:O:^_HZ/>cjrRcm1[7Bs#RF6[iImU)*GVvR/RR d!m;p9OS]#Rjv' );
define( 'SECURE_AUTH_KEY',  'qb6gI_? ;8/dx!BUz^NF2a|(<7986`~{T+heQ~{<zjyK|xzBaQze}zG$4;C|G<$_' );
define( 'LOGGED_IN_KEY',    'jkh9h#*QmE=<_ cvOH#U%-P2=J||jE:Zl:.n|O0j2ZoAS_~RQCU6x]4/O%J~ ,^v' );
define( 'NONCE_KEY',        'Rm:-UgnBqoxQr&Fi8.A!2W7LKVUVVGVdffWh/wi_[6v%ZU*NJn[)J*k=OS^=H2tg' );
define( 'AUTH_SALT',        ' (r=;EP7nM$O/j-*]tohY^;_uEU9LGS%9kRaKf,O_k/&qb$u?PUOrK~E}(y[K|;b' );
define( 'SECURE_AUTH_SALT', 'eet$s,X2Dz)J)g4.#pkH278BoeGqS@QGA{NOlk@nMb1;wMdJmvMu}Oz;+A>]yV]t' );
define( 'LOGGED_IN_SALT',   'LIQ_v?yRVGx!L2[irFFF-LGq$yAqgIn?cyr9F00e~%:&dDLyosl1eIPy90[syJ#|' );
define( 'NONCE_SALT',       '[4HN4n3:MjJz;8.CWoO&`@+NBxfZ9IT;-f308e) N*{u0$5<SE80croVN8e/ZUnF' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
