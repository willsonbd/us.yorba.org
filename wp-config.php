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
define( 'DB_NAME', 'usyorba' );

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
define( 'AUTH_KEY',         'I_Vy2~9t#OWPV52*!x4?14)K$ZmpGppQ~S7 y-4p:KlS)lt[yhV .@iFYzt&}g]_' );
define( 'SECURE_AUTH_KEY',  'A+eqy0qlblQ=sF!,>K{PvXaRn,)!kO5sLs|YZlD3FCwFw1Y)5uI^a}Zp5H7eg3<`' );
define( 'LOGGED_IN_KEY',    '>8{_zlz!)|xhv87=T#y<i(NA/:/: xH,#6z696-zs>D:~-FP?]f;QzeaVs`VNo4k' );
define( 'NONCE_KEY',        '~FG~CI29giw7<;vQ_4G {.9>P&gWI{I(GdXVrGj,tTR$F[MM=j-h_3ym/:77RbUo' );
define( 'AUTH_SALT',        'vDpXlm)NniV/Qv$z[Y`7ngQ#Ov(L&N<LAQox83lSW?ZM|9iw#@P2?[n15I:x)bE8' );
define( 'SECURE_AUTH_SALT', 'wUdkFyN?*c2$<u[[;uBj~&,s{T&JA[fI:!vx/XMuiU)>4:B{bjZk(+x=rlZD`|0S' );
define( 'LOGGED_IN_SALT',   'Ygj>sf$(D#Y|Q&{?a(n{s(?Ad7`;6nn9,>vd~:CT Ci#yjXtpv5mim@$-Nt]|[]B' );
define( 'NONCE_SALT',       '~p>3_E_%X.q=|9L%}Pb ta*jWqxH@-jL)_(VSYh^Xzu~k>lwZ?i#cl|/muABY/r^' );

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
