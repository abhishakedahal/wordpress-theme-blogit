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
define('DB_NAME', 'themegrill');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         ',h}u#BKbH*?p|~rYE6d$E>W{.3~%%l+<|A*oUrN/im0+-f-d`1a53$5?;A3,$J`P');
define('SECURE_AUTH_KEY',  '~VG{6TId1X9jShbJ7UBRage7M&c*A|AJx|?YE7>~{0H.0D3|WA4f7C9E~n!#uC t');
define('LOGGED_IN_KEY',    'XS5Zq5V*HQy^_U6e7|60!vOrO8<>rG2GNR790|=c4D2N|ofqhz=a4qOKsM@sXT>0');
define('NONCE_KEY',        'Nm<5/;kzJ^)`aC>/=RMsWCjU3*dd#|i`Mi.{.nj=poLu,~@iXt:Xx31x+~N^ZG^1');
define('AUTH_SALT',        '*vPb?)_ZH|N=:0UuLoahcMLytiL+DpIF0BvSg(~u?E9J}U~By_cS)k-?v9l/|V`z');
define('SECURE_AUTH_SALT', ']v_%;Ri13I!BVh/||P$X IYwsd;}-j<kmju{zAVyASf~(3(wc]Xz`mdM]u<ofxm(');
define('LOGGED_IN_SALT',   'Y =zXYX3&s*4t%97VG.hgR0)0-Mtl:6lz/1aU:7CDK@B&E!,98t{*wYi<(2X1dC@');
define('NONCE_SALT',       'L*=[nR~WH/e~PqUJni rb4[SHPC(h5j^)#GJ}H$6D9/^jDYuEs6(dn ^aIf6zn%t');

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
// Enable WP_DEBUG mode
define('WP_DEBUG', true);

// Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);

// Disable display of errors and warnings
// define('WP_DEBUG_DISPLAY', false);
// @ini_set('display_errors', 0);

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define('SCRIPT_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
