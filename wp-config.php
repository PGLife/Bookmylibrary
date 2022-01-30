<?php
define('wp_MEMORY_LIMIT','256M');


/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'bookendsnow' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'sv4xdiiaflnn0bedrd4ntzolxgak59yn9elawu7vbrcolnf8gz5bnbobescyz6gq' );
define( 'SECURE_AUTH_KEY',  'y2doadc5hqclwqqe5ycc1hpdmm4eeoxxcgli81xxpfua1po3n4jyhjqjohepwbna' );
define( 'LOGGED_IN_KEY',    'y5tjyptw52rdaoselwiouhlymutpvfhpstv9rz71nllsiipy0vvjmdexiex4aetq' );
define( 'NONCE_KEY',        'kfvjyjeedb4e3sooctke2eqltmjlru2jkyrinjti5svxnw3bhd0dvawjgm7mkrpp' );
define( 'AUTH_SALT',        '5s7iwfozwwgfypwm68liwkinibihz1eblnm26qa5nk8oxqrgadbfyf5qiqaaban5' );
define( 'SECURE_AUTH_SALT', 'qr1qcobhfjbu4krl4gif5defwcgihoxinyjvpxhv4wexg4nqamc45asbdtxwf6zb' );
define( 'LOGGED_IN_SALT',   'qzr8bgtpj0mctqt1zx1v4dxfiytp75rhv6vhtr333hjij2i8ly2a3bsezv5g3val' );
define( 'NONCE_SALT',       'kohveoeot4u74to0ctyy5szs4nv9zvfh3dyw5wazbfy7nmre4cbi5uk5jnijjtyp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpui_';

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