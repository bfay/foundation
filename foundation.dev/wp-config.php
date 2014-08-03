<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'foundatiDBni60t');

/** MySQL database username */
define('DB_USER', 'foundatiDBni60t');

/** MySQL database password */
define('DB_PASSWORD', 'mH2seSH8xj');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '0Rk$}B7MYz,^0Ijvr^}MYUf$7IEQr^{>3bm$y.EQfbnPbXiy2EAMm*;]6Xmxu*AWi');
define('SECURE_AUTH_KEY',  'h[Zs!0GKZo[8Nc|4Jgz>8NRgv0FUkzBRn$0FUjz@Un${Ujy3IXnq^Ebu.3Iq^6Pf');
define('LOGGED_IN_KEY',    'w1GVw[|4Ghs!@[Kgsoz4GVRd@4FBNozv|0Rkgr!BNJUv|73Fgrn@>JUQ>3Ufbr$7I');
define('NONCE_KEY',        'Qcr>3Ufvr$7Jfbn<3BQr$y{Abmjy.EQMfuA6Iiuq$2Tebm<6IEPx.2;Aamix.LW');
define('AUTH_SALT',        'x9h_1GWZp_1Ow|8Ods@:GVk:CZs!04JZo>8Nc|4J^4JYcr!4Qfv7Mcv{BFUjy}BXn');
define('SECURE_AUTH_SALT', 'Ai2Lapt_6Sh]9Oix:1GWl~:ds_5KZpt[CRhw8Ok-:CGVk~Vk}CRgz0FJYo!0Fv,4J');
define('LOGGED_IN_SALT',   'P-#51Det~51Ddp~-#HSplw1GSOZp[C8Kl-|_:Cdw|!:Cdokw|NZVgw0C8JZ|0:CNo');
define('NONCE_SALT',       '{Tixt.;Pext*9PaWi_2KHSt~+]5Wiew#GSOa-#_1l-5GCOp-w#8Zkhs!COKV@:84G');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');
define( 'WP_MEMORY_LIMIT', '256M' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
