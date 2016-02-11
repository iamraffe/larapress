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
define('DB_NAME', 'larapress');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'i5lkaO<0vu5_CLZi!^5Jv/I!D7=-/p81[dWP8=yN>aR))yqt5?zc0MAQp~+r|r_b');
define('SECURE_AUTH_KEY',  'Yl4-qf8W2^TYh#MW|b1/%Z>W$IzC_&e#M5W*|/,7r&gyeYu@v,_=Q^$urY[qkDx+');
define('LOGGED_IN_KEY',    '@ny_&g}4yE<wR)I-1F|&P0r-hd7E`V*Mdnx <?~v@R->8^W><DT|<b^^STnPsD:|');
define('NONCE_KEY',        '&yILKKvm#s/FpRJHQA==u/|}(@?}=;,M$1LVNZV=Do|Vl|T[HQaL*GEAnd5iHYVf');
define('AUTH_SALT',        'Y+C9a.i:a s o7EP;KYA;/>?j~d;7%xG_f|ql7|!T. Sv+Un$VwG%w;F+lBk4XJa');
define('SECURE_AUTH_SALT', 'k|@~[phE+|kBy1B=%WT$q3Zs{23)N`,h!!.1FJR<KzqIcxNE}|/g[%3OEJJ]u$h]');
define('LOGGED_IN_SALT',   ';]0*9?*oGuC+t+Ny~~#t3Kjj!b|4a)~^0L%vq2x-0N0|<Yi$k*!8CH]dU+Qpcb.J');
define('NONCE_SALT',       'RJb!_WPC6YG&sP#NKK+ FCCfR7v+G+PDeA 7o,RXzzUq |G;]{<E]EkpPDb.wT)*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
