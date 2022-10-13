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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'danubetr_main' );

/** MySQL database username */
define( 'DB_USER', 'danubetr_dev_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '6@HIKn(&k[%U' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!]~liB,6)k3VG(kL9Bn<R Rh9NgE}q8U&<VWmV(sZ:]h c([OgGMem7z?,BauDux' );
define( 'SECURE_AUTH_KEY',  '&t@gR}iP1^(>Rlhf)~2?3xt>eSpN/Kl6F>:nwjxUXVoB=7o#rygJCy0:k?<eMm2Z' );
define( 'LOGGED_IN_KEY',    'XLq$rkpk)I8AJ~4Q?&U5.Nj#g4`L)x8KQW< jo>67+zX&dEqhGv* <E_e  e7SGm' );
define( 'NONCE_KEY',        'RPy[%lklMze$L1^p Tv<8owvKVDfmASaeA*19Kei0wXst%*-A`;)f77R!F@G7W6 ' );
define( 'AUTH_SALT',        '?>qdQtc?9(~!ul)~!YM&VXnsM:Bw6:v%~`<pUENWyK+Ve:#]`*r_Przv3E#B!&Fa' );
define( 'SECURE_AUTH_SALT', '4mJ7xL:Pb7nEK$)STNgl3}Qg+@_^V# ^y}=ejvS)ntG^6oCNSV[|oAA^o.JrD __' );
define( 'LOGGED_IN_SALT',   '3k=|+}bKs!amVkub?^Z7xwvEN8`D64mP4j3*{OMIX%(&<&S|Ry~(M&p9M=|)/0RH' );
define( 'NONCE_SALT',       'keQasc|Y8kDNl>0HkP8<UA~61UbtqWiWY; jAtf?4uZ6Yo^ja_T[clIGymG+8kiY' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
