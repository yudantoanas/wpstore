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
define( 'DB_NAME', 'trywordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'hBTXE)s<~[>5&N:_1~hG }hSUXKKUZ0_(&_EE~/>}&%kF7ZEox)G6K<hz$P-x*DG' );
define( 'SECURE_AUTH_KEY',  '#~[RO!;+mx|Jaws[z~[0vRcpi3i0s323Z k#g{#p81@pY!Xb>,US$%b|~VZ7exxf' );
define( 'LOGGED_IN_KEY',    'PMwvPh,XZ,?K/d4]=.B8c:@svBIt,8xh,DXkv4FdzJ>k*w_O;*>FEIC#vg/q=wxQ' );
define( 'NONCE_KEY',        '.D<5NFd)h:m[m9=7<(AESgh=b%,Bm!v$mADQ+N$DI6kS:n>IK{/)9W)zZijr8E!Q' );
define( 'AUTH_SALT',        'hN~`$|;|qB y?yLjt!OO<=3kS?/:gfAxb[sm#D]p )Tvum6r*p|-I&!R_@+-Y~r]' );
define( 'SECURE_AUTH_SALT', 'o* xG?F[N*>VBx!d|o2+3U1,5YKUwdKGI<y.&D#T>3gR*R#eOQPt6@K^Mga.;pPV' );
define( 'LOGGED_IN_SALT',   'a(2.`G~>f{5Xe;1SPG)L*F>Z*&]=TspyXia!CV=ky6 $@}~5Pye7TB(L>atyGH`t' );
define( 'NONCE_SALT',       'K-h4j3FQ$7eR0&9]PuD5wb;@ZN(I-&U>Sc~n@g1;`AWC*_t+vQL)h]*mb1l}4I`g' );

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
