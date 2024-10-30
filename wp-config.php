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
define( 'DB_NAME', 'web 2' );

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
define( 'AUTH_KEY',         '`-<i=jx5Du8~aM}y]wp@UJm# U/p~uJ`t^}i+tuMfjYGDK4RNScLfT8]/k/<{i3M' );
define( 'SECURE_AUTH_KEY',  'yx>f0@]< [2BYX-5Ql`$PdJ8|N4*X_=op6vyoI;LgfZh. kBU#|(l87W5{y??sjy' );
define( 'LOGGED_IN_KEY',    'lcw<b>S@fxH;Dlv9?$JN%p[=e$T<FHmo7Lla^#Hpj(AA#,0X+24{11#^-mHEdIdw' );
define( 'NONCE_KEY',        '@ulbE*Z_]L%!Dv Yi{Aw<7a5vvh{9~l 9a_rPe3Yfr<NW#Q(Jol|C-p@T02z4I2H' );
define( 'AUTH_SALT',        'gB$FT0-7 z.[Y(a?&3y&Ot,QZ#}T,Tk9aSbt2XM-RMJ~fgmR}?*b21IP~7k^S5YM' );
define( 'SECURE_AUTH_SALT', 'eJxQ1~:+HLd/syd80:r,%`n@5=paH7k-ftZ!.>1`X`6(BpO^)n DID!M^^R[-7C2' );
define( 'LOGGED_IN_SALT',   '&b>Wzjh`sR>kP,,o(G2^e~(>aTfm;BuF!eI2k#J0csaR^df;SoBcF^63^16xSUbs' );
define( 'NONCE_SALT',       'a=r6$Q*!ZYtDU:Q?wnLB{S%MtTNdybU4h[_{6(J&K0=Zu=wT(!Xh)!qw/t&hZBD_' );

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
