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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mosiur-e' );

/** Database username */
define( 'DB_USER', 'mosiur-e' );

/** Database password */
define( 'DB_PASSWORD', 'g)0s/2JlB]bGS1@e' );

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
define( 'AUTH_KEY',         'Bjwb`db{EVn==yNl*##k9Sgb3I^N7x_&wzj=%*lZMR.&?`J.P?}fT}T(qScV!H0{' );
define( 'SECURE_AUTH_KEY',  '(k$>2lAER+&cpS>uh/1q c!LK:@yQ|);W|+>w/}J>[Ylnz1stxN:]8^|,F{&w+M ' );
define( 'LOGGED_IN_KEY',    'Vow(7:5kbe3BaS3/T*asTgT$~7%@q=2ztk+q;@Omn=14e.^0VRhm +<.Nu|=wu}j' );
define( 'NONCE_KEY',        'I`N`K1Jih(^<WX0:*B/.W)C2N6s}R%48bCJH~+/8$#+1>]or;D/=V`SBtufjQ+9o' );
define( 'AUTH_SALT',        '2(zIICNrv@7$2&ru1YwmQxqix6(3RYezM)SP1xyYGm+IC-#Qgk=1-DQLKSP!kn!1' );
define( 'SECURE_AUTH_SALT', 'vPv<OQW%P~@Aih7 .Bv%~d)]4?^i$`H349Lmp;f5dS(^ IDPVTU]FwynA?@d2cEV' );
define( 'LOGGED_IN_SALT',   'ZK?UE14-BpMSBrLtzq!YNhF: l{,)@8wM_4#bu7?~g[SL5-5T>&jaci>Ahn6aBBR' );
define( 'NONCE_SALT',       'RcxyS{AJy9jx-%REps=DBj_,)UZ#-f[Ww{MdB$@TaZ-HRYj=A=/KEd6x23cO@K-x' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
