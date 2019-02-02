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
define('DB_NAME', 'yashtheme');

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
define('AUTH_KEY',         'Z>#0$V-`tz.u58|n*7ZV&UIp{MiLW&XI=p(>z8M%Nru|0qI`)s;ewjCxB_5^dgK*');
define('SECURE_AUTH_KEY',  'RaIJA|0%nzTTDH {Un1PZ}q)`$11ICk$s?,Zdl8RmHH)grjDLWcS<Bn10s@nb~g-');
define('LOGGED_IN_KEY',    ' y|z)Eofy+}HDh=H]5Ex/%4(Arsphr`Y4[{htiT+mm*8k{=xZ(9pC7J# zd36,j=');
define('NONCE_KEY',        'GSBn6WeHFdbMR#0AfR(}RKf<MwGSA84VAi>: <e^@}K:[^;FprC:pR3P{BPEC&A{');
define('AUTH_SALT',        '$Z^}%bHBzwjIcZ.5e4D_:=5jo8!AP-w2a^>0]N=y+UF?Sa HR8(QHaV3l0>(XCKi');
define('SECURE_AUTH_SALT', 'l11`BBLX0$xhkG1.Wa{NM*fnCxUEcMmpyRt&M?7f3QR8An~POYtX;%G61zGksUXC');
define('LOGGED_IN_SALT',   'UZS?~tOMc$x9dN_uS9?seOg$Og:QA8Au%6 14[mjNG/+v+P+-bfRhLI|t,J%Y+K(');
define('NONCE_SALT',       'nUxu]00.u`j~<rTo-eT6s.F,uHA9Ec^n_QdqMe6];<v,_329bl3ubDSw]~!KofL ');

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
