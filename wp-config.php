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
define('DB_NAME', 'bt-to-wp');

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
define('AUTH_KEY',         'g_O{/2)3knE^loO6(k%,Gjv[.p~kUsY}>P4[asaZE9^}~,O _WoS.u&Kp(Xm<khd');
define('SECURE_AUTH_KEY',  '7)m~DPSXTuiUp}a,8y(}b:{KP:RWm*R+%;5&r2}~b {$m5}M#k;Q=-4}<#.AQTbY');
define('LOGGED_IN_KEY',    'D3KNY_d{Oy^hSc/IoCNL&%:q5^w]$ccVe;#B6V2 <PN.cqsmwUy([$ |@j:Q|B5*');
define('NONCE_KEY',        '$^d:NZ|v^P=3H)P~iE;9TZeq,hh~<8p:KT(CGrf2DAzn`:=rBwD$>ZprZ>/M|FaU');
define('AUTH_SALT',        'h?H^CH7/)vJTuRl@(wVe4y7g2lgJr3pbLj8Ls{LhS^+t!6-U+z+$=Nhi%k5+RqQa');
define('SECURE_AUTH_SALT', 'fuVbnwhRsSf/Z9AXf/Qi5e7(8^| T&QY@A]vzh*E.[MY26 yG$?@YhL5|mhJIl7 ');
define('LOGGED_IN_SALT',   'JpSmVN~Hy,1b,~+nFp>6%QLvE69Kh*>aKCd$>?DvC7Dd3l?$;(,vBD.#K^u4YLU@');
define('NONCE_SALT',       '&-A,Vl:vao_Obe$|g&6~Q{n]w%LR96^fhyBO+Tm<cRs|_w`E9nr^ubBw2bOg_s,5');

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
