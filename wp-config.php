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
define( 'DB_NAME', 'datapoolclub' );

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
define( 'AUTH_KEY',         '(uc*bzFVL54 2|)HzPtCFlh7U15SD6.sa.g}NVdX$fpykYyA667jnb+;CHU=g=0P' );
define( 'SECURE_AUTH_KEY',  'pPf*c6LW/9^g^ ,8b0XuUb=Wa(9$XKU(Q(S[&i~9`-19[;bGU)eq0pzcdX2!x[o*' );
define( 'LOGGED_IN_KEY',    'r ?FN%#^(Z]a@(MJM=+ZrO$~UjFsG[Z?B]r^ydSnz_VYtFkT+QgQ!H}#,82VP{5K' );
define( 'NONCE_KEY',        '|~+Wp43RuT~u5D<ogEhVP<2?4tq(0>~!]AnOj^+0Do8-)wjVTAc7a~06fgFm!*c:' );
define( 'AUTH_SALT',        'N<UAj/?+JFalTKgdK!NAFf-,^:],gNRO3Lv%3*;)_<;B_}z2h-e5n^DCBS%n${Q@' );
define( 'SECURE_AUTH_SALT', '1ET[%|i}6@P7~ck]71,q~(G8(5!Ql!.DDyc$dyS[oLOJqufq|)zuyITi(SNd@#6`' );
define( 'LOGGED_IN_SALT',   'i~meTwwjD+GU=OD6Bs]$9d7q:Fp:UWj0/Znc8d?fhAmcrBdy7JvVD5$;#])}^[KK' );
define( 'NONCE_SALT',       '+dnw6s2rGNHq4>nR*C5!WA9oPB/9lD>.x+O&T.-ez/zc3RZ%)*/IU//we=qRmhGC' );

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
