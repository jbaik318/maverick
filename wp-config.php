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
define('DB_NAME', 'maverick');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'P|_!R:TJOM^,&Q~lBKl$zGB2GyG}Mn4.G{TeSR{ TC%KW!xLegBps4t7G-DFn[K7');
define('SECURE_AUTH_KEY',  'xBRl22MJSIiPUL/9*|.8mzm`nkr%Y(9CpU1@GUipy@heNyC48;x0WsV.v$}M$3aN');
define('LOGGED_IN_KEY',    ',X[a24K}p@YhSBu<&Yg}}l=YIY{*DC!*.8@ksfs0.!m}j`RK~!RRhCb:x%Zm B3>');
define('NONCE_KEY',        'ttL9![dAQdF[$fhTs/>Ozk61Y~,B^ n3%.<*lu/u(C~&z(MEM L7EhO-m7fsX0c6');
define('AUTH_SALT',        '-L`Rn~gtf~.Bt^D+3~rMURI:*5t7-K(mc!*n4uk%2qM{R2(_=A:KJ>;Yz#*|i2YG');
define('SECURE_AUTH_SALT', '`*bIE7]Y >@t/#iQ^wU}}N0)Ho>5#)v%9g!qKvmX%M5<cIPd8TpuuAsw|Gr}a]4B');
define('LOGGED_IN_SALT',   '_MNC K2xtQ~(2m%h0]t$gTHz B&po?#yE|0I0@R-.03v`nP$L.-gALMA15bn&AJF');
define('NONCE_SALT',       'dAj>/HV#dwH>9&;aM6oDah;gmckbMS%hplSJB,[DKWG#^0Ltp>5!:V81Y0A]n;aZ');

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
