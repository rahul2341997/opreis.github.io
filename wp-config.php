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
define( 'DB_NAME', 'Opreis' );

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
define( 'AUTH_KEY',         'xNeMR|eh/GtnqZ[tux|MBuk& !UEF&:5BgDtRpv`[!@`uj:ZNv_#{IeV,sG*$y-E' );
define( 'SECURE_AUTH_KEY',  'Xubj)HjooSZ=ir2$`?a1!)Yu4Xw <ttUlHK31jK&:t}mln>8ypB@XlnFNT+#4Agn' );
define( 'LOGGED_IN_KEY',    'UjVkqg m%XbQ0ef}X4lB4f2TyAd`M5gzjbr*+aYkMV,fv{J)fkjtP>RI?Lz:yBaQ' );
define( 'NONCE_KEY',        'U`Lkj%Yz]+[v(,$Q?F,b~(.n~&N4z?Q3sUCML QBtW2FSIj/jWheaX56+_<3`;4E' );
define( 'AUTH_SALT',        '5%*,g+RoJW(1Empj>Rh{IpiteUm9#l(<Zf*DjuK5?tk%P[#Mq3#60HN94?yK[SP8' );
define( 'SECURE_AUTH_SALT', '%$;7gS^#,b4J^dZDAb0i&90B$/OPnV!,+D;(buRVS=z]t>.z[`5HgWv#YMyjCLp9' );
define( 'LOGGED_IN_SALT',   's@}B<E,NMHH])dPiRtVvW-vJ72UY/11#V]dNp?jzsih(<T`lk 49d yNk{ sm6$n' );
define( 'NONCE_SALT',       '8WVT5WPLqy~fMv=2TK9RaU:]+~*,&(lwe2Rgpv|U%S]~N$~IhAMR[Ssyj<$-dsN<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'op_';

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
