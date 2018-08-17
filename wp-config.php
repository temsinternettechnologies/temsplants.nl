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
define('DB_NAME', 'temsplants');

/** MySQL database username */
define('DB_USER', 'temsplants');

/** MySQL database password */
define('DB_PASSWORD', 'QuintIan055');

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
define('AUTH_KEY',         '7mU9B>(w@!IDx U-f fUh{E9/H R%[QeR?>yR!U.lqOtne#s$>3J4kLwE}dOkFD.');
define('SECURE_AUTH_KEY',  '!C~/3})x5+_d^RZYvkp i:0DF)`-;<5RT:F6C;K4Sok[l{60mZU;Iua7k_4A1AUc');
define('LOGGED_IN_KEY',    '4`L]Jl.C;=},WE6W1unQv=@nJ@=7=DIGOsccc?E+1L/~XmZ,8UpjLp`G^fc2 ;JQ');
define('NONCE_KEY',        '!ffe^f.]$|s6/7=6KYk)}==L/cQzay13MPX:~Rm?E:TU0yV+DZSloFShurPj&Zw6');
define('AUTH_SALT',        '9M2Vt=P*Z3cRSZ|jy($wsmI%/mR:7ar2*OyuT/(>M<,$k:j:]6z%Q>rS,$ +QCj?');
define('SECURE_AUTH_SALT', 'g.s8;C>9EAL$i<nS&L7}|e|zd6lZOh]J&?dP.NN@gIc@I GbO=`!==P]MJ6_]8SS');
define('LOGGED_IN_SALT',   'X]?u_|*o3oS~7?Il?0<PL!pHx:XjBZPIO~#U:7e_^/xN8P{g4Kxg|:BVPAj/(Bed');
define('NONCE_SALT',       'eNgikFnSWNKM Xf$BE)A,5.RQ#;o_RUYA. ;@/<4!_fM4R3@~F*sFiz&EJE0Gr<3');

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
