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
define('DB_NAME', 'dbwordpress');

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
define('AUTH_KEY',         '7CEZ{9N}W9]_N|-cF|=ZfK8wZrC[YUf^Wg=pscjG(?]>|J_@P1kS,whxA?c@(Bc9');
define('SECURE_AUTH_KEY',  'c~/J=1eA8Q;%,jF6QRFAl98sB}Vh%QsvLm<W#75_f;u^yzSOB)p>M`QvyD-3 n:^');
define('LOGGED_IN_KEY',    'l%}p[3~t T=XTp]Wp;D1k VUglZfbVo}^4M&p^giq,1`=w2,.>HZi+>Bo+:zPpv/');
define('NONCE_KEY',        'rh;/RN*G5d_K0X.UxawzfR)]bBg.0oGZTe+=gI;Ytn}l0T}lx^!p+*@ZM52zs%?E');
define('AUTH_SALT',        'ak5OHQ57cnY8972n:XJcn0s )r5t~+8CicBd V(%DA!9ajV>$EpTl.*nAjCUo;!9');
define('SECURE_AUTH_SALT', 'l7. ea4?|E0&_E2FrLJ@0mgom JXwk_z0pi8.g;uYpg2mI*x}NmhJQdvgPs!yWz)');
define('LOGGED_IN_SALT',   '<k{&2~3+Qay6/;Uq9#I_(s.q+FIpY~BNcLses^Q9=YIF9Lm1>yV%[3Ip<%cjr/sv');
define('NONCE_SALT',       '^v<mALHN!/4_g]Zx{GUcWWgrhuOpHO%%{1`zw_a0najA-|:d+CuBy/1uP,y*JYQU');

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
