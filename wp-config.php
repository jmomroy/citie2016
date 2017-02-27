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
define('DB_NAME', 'devaqp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'arequipa2016');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|ZojGYxHX_]F#qm(Bban6Mad!;U!piyQ#gz9r@5S .4TEs]Cw-HecWf]B+5KnbJ=');
define('SECURE_AUTH_KEY',  '7{!^Dd;3g8XA+uqj7a+t=GZYtTxKN:xgAqj_/m0ZQY/n].|e2~TYmGQ<*D ;J0`y');
define('LOGGED_IN_KEY',    'a7vRm.wL*$M^_/>X-w(d8s!td!S$pdhr#ewBw8=OH=(yb.zf6Gtks]4b}0PG|kAN');
define('NONCE_KEY',        'IDe/:0|nSj1-YTe@nKi#.UT]!D#_|v?d?;m0MC,y<V.[/t5vR>mt_t^ps<XDU[O>');
define('AUTH_SALT',        'K7ZnJC6OCF-q3Oc<nMJdlkdjC#u5OCO2bQbrV S$z&^DdYa[DHBI|4LV/qkt&iHr');
define('SECURE_AUTH_SALT', 'My|_?uDT&`/EwQx*=78Z@.QW|}*:!.])U[@Lj-<fOIoO_}v&okTBX{#CWJX93+5F');
define('LOGGED_IN_SALT',   '(>kq]9!_n+xRxtTZQ0q((*w1G6KS4i^/1hJmA8VmUkk]39-|&AysCD`5ilao;FCs');
define('NONCE_SALT',       '+ViB0M|BF)|T+tR#aXUjR`_#]ebNeo~(r%P!nD=TnMlibvEbXAiuGbc#e#X&#.@<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_devgroup';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

