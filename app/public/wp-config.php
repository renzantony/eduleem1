<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ',GW+3,%jJ3~5}[>)zT*%V=kWnej/7 Kkh_~QFtnQ`024cj`/%90-^Ch6sWq QG&,' );
define( 'SECURE_AUTH_KEY',   'v>JjTp^SD80p#7J~9Dzb(VO*?H^.t1[*sw9Ped@%zHcz9R:qey83e_yj^e|GA@Hz' );
define( 'LOGGED_IN_KEY',     'vNh)o5y{~L!X=.w$/2NA&Z]x167UX*_<4V`Q#NKvlXk1.KI3<Us[jAXiPL K~}AK' );
define( 'NONCE_KEY',         'hCEfu/|O>OV2TauR)1-`P4VE_6H%a^,HK8L)[vrMfY#w|wLnHDCSL:xf68xi{^~l' );
define( 'AUTH_SALT',         '{$8Y_!|yeiup3=pVsi>{m#HLpV2,W$pd0%.^#N2uA397}(BV^Qhfx@$7;!x]%FlR' );
define( 'SECURE_AUTH_SALT',  ',${Q6Zn[0+7@~je}4Z7 LC 28mqr[7~QFr0<%:2sZd|GiTZdB[>/X_RoIP:}6I`[' );
define( 'LOGGED_IN_SALT',    '}%LD,UN@o-rfl~!(yp9?4,f&YCI{vgir[ktT*e,N3d Wh*B*@oFEGfOe(:p7?R*1' );
define( 'NONCE_SALT',        '|9X1d|x5!ZM2AGpKs?~qJB0ZLZcB|jR}wwo# 9_lOz!>L@}_:+~AJu~jKrqA+knE' );
define( 'WP_CACHE_KEY_SALT', 'q>+QJeas)}hLyBMhyI_ey8P*8Ma)iwExsXIO5+&2/t}a$:@QxWBK~2q^SakxRmH@' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
