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
define('DB_NAME', 'scotchbox');

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
define('AUTH_KEY',         '/VV%N|^T3PY-n9w(i_$=O<1LL^1tzHtk%l~m8y)7u0^DH&t?JyR;v^+-b-l5b|*&');
define('SECURE_AUTH_KEY',  'SlVmRo7UjCAg)IV3n~u~ 4c}y`P[?^Q^W>NFgF-UFfB3:8K<s+O>Oh/Pch90G4mx');
define('LOGGED_IN_KEY',    '-<Ws4+BV$-h,2!GLGg|x^}n^a P)[D@*>3+3t<+}(%gL#GdKOgZ5Y[+r L*T9VgR');
define('NONCE_KEY',        'Qdz~^x)wzL:9,F2^D%U`~ov<+;jPuhK7KZyyFo#brlR|E%)Vx%nyFotFyyEhq,:b');
define('AUTH_SALT',        'Hm}(yv{}%K$8k3=Z.k2._nz=z:.DHxKBB;v9K6v[SfS|zIsZ&ygEI:vC#N{a|I_w');
define('SECURE_AUTH_SALT', '<BiX}eM;To]|fJ_|74yov+Pd_pv1a,A|u*Q7*@i4Y2jxD<9{Q3,x&a M{ZcuNO`c');
define('LOGGED_IN_SALT',   'XH%d=F37g,&g)J~nKfX<^duv^Jw<;f|0DOZhnW=+|59;~6D>o*NQbp^x=K8l9IZk');
define('NONCE_SALT',       'n|(h@4j-.2v<3P3.ng-&|A{7M|D_X*U`M)yE]ngzPPf<} ni>EVQ]RDMPxCqON4p');

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
