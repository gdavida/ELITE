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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'muRu8b0Qifv7ZdRqIPh6MERdZ9VisL2bsnFm8Ka1uNBOKMHI5iaCM+SHnLsHvk4DjeBRjc6vnt351VgSjTmpsg==');
define('SECURE_AUTH_KEY',  '1eDs3deAtBuAs0EfWP959XUohXODBhdeNiyidd3j8XDQLNDlYryPepqHirYJDeqhojs+N4gH/DsS4eDW2RJpPQ==');
define('LOGGED_IN_KEY',    '6eItVNeD/qSx9G9OlOig4iq12ZWpdwgPLAKj+sXBh6DZhSIehg3JorvZlom3ufWB2ilofE3KFU/5ZfyMYr/Z+Q==');
define('NONCE_KEY',        'sJyEUUKS/NA+urXeE6qMTKMG5o6wR/AJv3McXyz+K7GDNW9lP6LaQd2u2YCiFLg7y+K8ZXtFGSO8SYcK7rJN8w==');
define('AUTH_SALT',        'fZ/7kWNimItZrfZoAJyK7GVI/qvRXrUn32df87bVhmRJ7JLdgCZ3tDzmqmU7RJ6ovC48m90RJorfaqnQbs5qsw==');
define('SECURE_AUTH_SALT', 'lLxYCofqqMHW3BBNgVBytAuZbufk9YOdmKT/KODgnBesBTdzH1oHi0WBIyEcDK1ch80QRAB4jE1TpBazF4yD7w==');
define('LOGGED_IN_SALT',   'avmeuwEXY/PMOofjgbCnAQthrHN3BWJvB3GCdyxKY6BY/+t0eaW+DQSmRwTTqOtRW8Ckp0ZuZRCsvCJLtUqHkw==');
define('NONCE_SALT',       '4eY69LZANmvjDc+s9ZpqTGMO1CWholBXviKbCGvstli+RYF8vHtYj3QEqhEM/8tjniVK6myt3cnM//FG7M9PzA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
