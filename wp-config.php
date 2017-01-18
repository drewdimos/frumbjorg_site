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
define('AUTH_KEY',         'b%28AK}%+x%QnJWZ=rFZVX;/pcMN=J 1aNBD#A|+6+-x}Uwi3dwD;,XcVjE0Mu*|');
define('SECURE_AUTH_KEY',  'EB_QV2XZLf+FLNA7~Gx_5Vf=d6.>W;y!}*0g(c_6,Ve:ah?%g_@E<LG37.6VI#R$');
define('LOGGED_IN_KEY',    'SIQ+H{!><OJcyLA~(UVGhdS>,6mT4o^SiuLi~A[i*}7mCr-#,=pI1F+cn*K^*YeK');
define('NONCE_KEY',        'Z>ur)/_}OaI`UwBDykj^NOF _@3TmRGaw?qiwBI4?}?LE.W${ z^42ahR6u?$Azw');
define('AUTH_SALT',        '%;~RP+7-X04oQ7U{3}81[>=3sQG!whr&$>-=JsHUs_LO g&>cj)E}$Jg@z=.`&_O');
define('SECURE_AUTH_SALT', 'q:/.DqeZLRp2nZ4Enc(eSSHtpCHOrI=e!=#pV=uM?t!dnBeuYmsD2 iaKwQkw)xU');
define('LOGGED_IN_SALT',   '6CGtL<~A,(5~,<cX-,-+xP5Oo{Rp1bm)`Zg]~pmC8L$1={[G,`t;G/|;lEi(V<`R');
define('NONCE_SALT',       '=gV45(4~J:?@^P~VE~]-Y;mzVOnKiK5Nz3xksLW0[syi-TRmcorwkZgR9 q@ftpO');

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
