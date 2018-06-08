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
define('DB_NAME', 'localwp');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'e27UnUe0wtioMaZA');

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
define('AUTH_KEY',         '#Fxg`tc(BedVtN>*npR0%){ui*t~+(LxD=_Ex@S+_8]:F:8I?]X $?SJh4sm8G<_');
define('SECURE_AUTH_KEY',  ' )`]y8PDc@[| G*f8gBJ!4-I}g!r6+Tgd63XtAB<yR9Lou-U)Co4<G)0~6A&F}oy');
define('LOGGED_IN_KEY',    'Fm.Q/s|X/m$Dr2?ES_R<k=9i0$LD.7i`_`sJG1U4*~Kn+Xhr(8>ud4%X;n1y}pDH');
define('NONCE_KEY',        ' PvLMWfOzc|?kSW:H}ipSf&1t.)=^kLai8<6oP%>^l6W5hj5#).[umo)o~p._[u(');
define('AUTH_SALT',        '9 c{,0`B{zV4d?nTg3j}<7^xxtInddyqd#|EYCaoszGuZAF9AG#h;>pgdr(u^qp[');
define('SECURE_AUTH_SALT', '?5oW8l4Eb# Z==,Q`Mg:~<9[%a6Nc(1o1&bF5*,U@}.P%LsuTEGJ|U#sJP6$%=j]');
define('LOGGED_IN_SALT',   'cEtmY`y@.5#bQt; }I>,e<]^dayCLJjhEV]`$]fd$>j3r/LM$Tz~&e~}%*zeuTs$');
define('NONCE_SALT',       'dYQ8YV4E.54Yuw>_l+*sI|xP|ofqA?d!I3Qu 8q>*Iux92O.8%$2S_a u34ON/9H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'localwp_';

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
