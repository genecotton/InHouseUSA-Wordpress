<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp-inhouseusa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'H`|w(L{JH(Bz ?}yMX`4t93F.=8N%3O*7$i+vg$I3!To|lBY],^%ewe0fZbxA8c}');
define('SECURE_AUTH_KEY',  '7l{^31:G]Q`yH~+,g(@v|-tz5D<|eFk<qc(uuiNjs692A4@+hE(J9E,Y2md7(sbb');
define('LOGGED_IN_KEY',    'w{)-d~xn{w,.RP2sZ#LQ^C[!8}+MSDm)mF2>?-YDc8w`pQb49ZJG1$J|$0m?6vL)');
define('NONCE_KEY',        '*k#Rk2U64 *f!>N?/D1TF[!-wVaZxF|08eGz]+@Uj0[|Q$NJk]O=s)|!T$Iv^{.M');
define('AUTH_SALT',        'Q ]oi;6y% !byu~q)+yU{yMoh9,bGghGeTayeDTlBnM`(MwE)|a=X:^2_f1-$^z5');
define('SECURE_AUTH_SALT', 'c^^uoHOxk |d.51<f2+fE`sO]h<D2[ky5Gk!~{|R@D0=zRgyX)1/R<9SfC[Xv,-$');
define('LOGGED_IN_SALT',   'jSIWE$rR(u+{JK_DN+qn-Bzz>_%s&W4*G[el?W(tDX Zu1O2Zro2MyY|al%@3SkM');
define('NONCE_SALT',       '#+*XWp~uL|UCbvA`aE kht%Uj{6L @{/csTl +phmR2:>BF (|c>pl:QSZV.X_KG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
