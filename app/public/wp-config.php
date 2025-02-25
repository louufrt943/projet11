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
define( 'AUTH_KEY',          '7#!wJzd`T(``(RB>j)YDf~riv77t:GhgT8Dp;/QC&Grk1,Uew:%qH,81U*IJNdFP' );
define( 'SECURE_AUTH_KEY',   'V6Bm@az-H$K`2Drqyee+tZ[EI UD?F)/W^B(u1U-]:a>xMfu@FZ)JfF,mtR_Zg:9' );
define( 'LOGGED_IN_KEY',     'A8&(pqgM*:BTXK,:Zpu:(1_+k|oT_i%v&o8&;a6;C,Ja;IKP9kkg65zj^C34.bS=' );
define( 'NONCE_KEY',         'fI.bG(>_xL8LZ/9M=YE1|Wx^jYJ|kg%g@`IO7V}bH4UOjl?r5tRbQf_jkA.Af7j|' );
define( 'AUTH_SALT',         'd/!Vc%&v7KNsil&}q,4C#sm92Jv:lxy+bi(_.S[`>Hs1@ENA*of.I4N?,k@`5A[5' );
define( 'SECURE_AUTH_SALT',  'G*B+C3kmb5Gy|[qsko+nBF,ry1gbU~p@=lo4d#sEhy#o[{$N;wy[AbnMo?=-%[JD' );
define( 'LOGGED_IN_SALT',    'U(qs}WltZ$X([hNx~kc#HL(>fJ#wA.AdM|VpxzJp%(zKwQ_.dRFK6,] {4]MGYSW' );
define( 'NONCE_SALT',        'W3lCRE}F^/r11aH/ad=`PWU44Y|4O;q9rf$*VD4DB[vhfQ7SOvb:?]PB<_~YZFgT' );
define( 'WP_CACHE_KEY_SALT', '&RCF/s4JkS<{$#+hX_b]D]0rh[`Ha]KE#x|9j3*,M60~a*->pXzHOY!fkxUR,I9%' );


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
