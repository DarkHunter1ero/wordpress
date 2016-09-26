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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'Kzu&IfM5I(RF0nKQGSR$ejr9+!:0$YN`Ck,Gv3Uaxk!>I[i7BB;)7=u3-;,Iemfe');
define('SECURE_AUTH_KEY',  'MN(oK*y}xWp9yTPWAGsAo<s(e6GO6_1A~Ac!Gd-!y([o[syKL)m,zqg?fb-VJ~#r');
define('LOGGED_IN_KEY',    '+<5);m@uaxjYrMB6)6&~8e{,9K!]tzwadHI721uuj,(%*iu<}S#Jo^9y}V!^x0YF');
define('NONCE_KEY',        '^lg[$pNoS0f6 m%Ax:Ftp-7m6gTEN!SO^{!  /Ci6U7$C`LS~:*vGNBnJ]K+ hj|');
define('AUTH_SALT',        'hnyWdi;=`~#%!*|ANU2u-JspI>8E$Z3%@@B@jG>zX<J ^+Z}%D#8Q;RN6P`++oqA');
define('SECURE_AUTH_SALT', '`(R{J1W[>Mw],8etW [a!ot0%f;_}_?vtwziJ^}q~idLqd j,[~/sWV$HL>vTOfy');
define('LOGGED_IN_SALT',   '$0/6p[V[}&?q^0G(J^fIb`S|sn]=9v_jX6CnQRxvzG=PQmwv|$Kq291O*UIZidE6');
define('NONCE_SALT',       '(Qmd8<3Ral2l@zTcn5CRnclxfg51#Lp!{Q8k:yV^{)VS-lKZP{XY2@;w)Nu|XJ<g');

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
