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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'grifcenter' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'd[=J+hI<1p-O1$[K[p_kA6^Q*);.7hc-[F<33V,Utp_hB+m6C*tQ!gs{%|gCX_KB' );
define( 'SECURE_AUTH_KEY',  'Eo)]W4bxu?_q,s/ubB(3-i`<o@L;KDm#aJYl^T#Y9!$&m5](9Vr:vnSf.RGEyPWk' );
define( 'LOGGED_IN_KEY',    'Yg-V|gm/H7jI.pf+<B&-.D%X0|Gd%&cTp:PpO x?/cT0XMu_8e<h@Gj$?%SFyc{W' );
define( 'NONCE_KEY',        '5)]I1SR>kc QmDMf12!kC7? rdm90wLPS^Zykt^u xF`Kc^Qc&f]~TW}yHogwv{7' );
define( 'AUTH_SALT',        'RXAD%womge8nSc!U*Uc$kbg,`3BOBNELY4/&*Y4yN1:C>?*!xoo ~>2`*Y$/?I75' );
define( 'SECURE_AUTH_SALT', '6HVlR1DsCpAt#uk/u{za}n54{|piBiHLd1B2g9L9zGq _q#@?I5_39<r5x/WoAkX' );
define( 'LOGGED_IN_SALT',   '[|RjC*xj T0|7@t&R1Rr>f[L&U9>O!xAt3j0WnzRd*IKdVN|YF5@ujH&[qQv2!ck' );
define( 'NONCE_SALT',       '2eD{)h6h,<_.PYh~q%aK=*Xi9@+)%x5bb?r8_srzUvydUJ`9]@ofUC()i:F5&4E.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
