<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'ddo74brn9b6dij');

/** MySQL database username */
define('DB_USER', 'zlkdixzpijwodh');

/** MySQL database password */
define('DB_PASSWORD', 'bf158f8c1fd6dae841d11d7fe1644bd1e86963978bd6ece227291f138aba16b6');

/** MySQL hostname */
define('DB_HOST', 'ec2-3-216-92-193.compute-1.amazonaws.com');

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
define('AUTH_KEY',         'k;#^-z%Lw4>M2^x+3z+_<9Q?_K9hTgvb*8/-g0Lb|>EAFK=|Mi9KMMFq%O?yI@)=');
define('SECURE_AUTH_KEY',  '-u*:k&oas;,BiOGa2`)1i${gX77v]B=,#z*i(bpOr@:`c76Yj!|3l|RD+9&-&.~2');
define('LOGGED_IN_KEY',    ')aaIr[agxC+5B ^+}>%KpW)4{K|aD{t=o2)vmI2Ba(+4]e]C`&b)kkmX[WvlN$&H');
define('NONCE_KEY',        'kAs3_SUZc{6Qk)R|SSv B;BF8k1z0 t6qYV6[P21.vD]&%`T0&1F7PfJp.1ISfP(');
define('AUTH_SALT',        'gf!-9`+cM=nPLIXm$jB-Hu:><ui0y;F]|Xib<W:;&hBLyadGhZ=%ku{p71i@pAV;');
define('SECURE_AUTH_SALT', 'KfU0Ez.o1+0^[#.EbUv[O{]cI-3o%=2spvb+,PlIIn! dyE2EL~}t9 -2Rb3/8iw');
define('LOGGED_IN_SALT',   'qy>V9!x|~^uW{63e:;6ua{llNT^lem7V0y?r>0(UPQ9.yh+{4t<LJ@y>%H9[A%|^');
define('NONCE_SALT',       '4ld|+84s]hjDpV0Z8o(3kGCBriZ)VeALV.156VVbB[lXdRVN%Sfy*=N8DxP-ZUzV');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
