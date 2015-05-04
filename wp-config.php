<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jobportal_wordpress');

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
define('AUTH_KEY',         '~Lb4D@LFL]e1pwxua^5ri2.yV1vrv?=VhC#`zwJ@r7t<fH-y;D6_+F=}#=.Ukd/M');
define('SECURE_AUTH_KEY',  'EY+/MrW|l+kw,*vpY$?d0Q1foKwVAR|H!nn)S-wC{7I|aC^AB~|_f-*BChW=aT#V');
define('LOGGED_IN_KEY',    'Jj~cE*9qv;U2TSmY `O%K:Cg-=PK?mNo#kz]TcVm]<FP-j1]I-qR,Q 7_%;eP+|-');
define('NONCE_KEY',        '|HY4);#zgbh7~=87r [pvzl(D9r3kLF[j~W_M|bkRjSjvpiGq:45O6`Z*)D{6F&m');
define('AUTH_SALT',        '2CD27Qjtv_N69I(u5:|$8Vc8E4`u.W6qQm<o%P+]^l?rqTk4pw%`!_x.ln6 e5t3');
define('SECURE_AUTH_SALT', ',htV9hM&C|8Vhu>NN@#+q.vK-H<l`NI.FP+$bkrJCb)L-Jx@^y/bF,)>$7-Cy>J[');
define('LOGGED_IN_SALT',   'B8U>{dsk*S6.U/7zj8oEEA7W#|Z@+$|`y|V@Y#%i8Op)_!=8lHs)+RLdW[&+Mv,,');
define('NONCE_SALT',       'gBGk*4~^nvnz2>!]pp7 ]WG?,z(Hm`Y#^)~e~_i:9~))1PR=*uvN$r%2?li2UeYc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bg_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
