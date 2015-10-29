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
define('DB_NAME', 'wordpress_base');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '{%P,ovl#N&wb%0s6q<7b|e)C*).]>79.4v:&r_d*wzs,]5g{>ffX_5q{I!/M($-C');
define('SECURE_AUTH_KEY',  't)JnIh!AVY(WA@cHbX3 4Oj@|e/kGwW!%5J|%i-F3~Gl7{k.$8I.B@&>,VW7FWOB');
define('LOGGED_IN_KEY',    '8GogM7IL4Sxt-w]YdvfYek$F$nyECJlKGoO$A7`3CN8BS)2F}8Eo4<7R(:AqBKG4');
define('NONCE_KEY',        'gRg$tDTGSHZsft.l>OgEiOR1L{D{azwYkYL2ksDKuQlMOR[7.s9U.U/8 vs8U{v?');
define('AUTH_SALT',        'q!Xr?#Za6Pk2Ff 4o:Ri 6)jx;I{C|_ru%:2,^%3GZE?ljNX*B:4PbsgL{=)COj=');
define('SECURE_AUTH_SALT', 'dCeh}4.Xc7zs0ZDK6.%,,}6ODRKAq.?Xc0bjn)OQ0rmXAz4$PC:(2HA`=S_!VB:!');
define('LOGGED_IN_SALT',   '`r/2yd5^9|u~R s=8t:,[+<{/9DifR{$H6=G89/.Oc.^ht6}FVG.~U5m0F.]vJqk');
define('NONCE_SALT',       '0F;h<)c9L5rf:+lBxIbcvhQS[ :7xW~7v71G&LuTCQ^-rf4:!j*#)d5n0wcPF>dJ');

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
