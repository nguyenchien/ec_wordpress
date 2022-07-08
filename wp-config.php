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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ec_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '$(}b[|3[#XN{5LkCbLt[%M1Z;L7J$,Ead3(bPy.Nr&ti2a-zbg)692bVyodSX0ys' );
define( 'SECURE_AUTH_KEY',  'x8pTR$8Q?@=SJ*4t0j-4Eo/}xQLvo|:Fwpj$3yKLnP>SK(Dxf3=CY4xj1D[MY *}' );
define( 'LOGGED_IN_KEY',    'GS8}My{E1PG12ezMk6sG)FL)SW.AK:*z>D5gt_ v8$@cRegDc8(.NsJ.jTaUWFn(' );
define( 'NONCE_KEY',        'z>W$=kSrP?Kwqj[2?=p5xPL[J5>6J39n7$m/bt`@WWiIgZiS}ceRRM9f!qc<^$v_' );
define( 'AUTH_SALT',        '>!cdIEGp Hh?(**=4qa>%nx*h%tAPcmr-+F/qj::fkiG@wFi)1YrE|+oQ#gZCE1&' );
define( 'SECURE_AUTH_SALT', 'IJ&+rjEog0/%%b%Mk^,=CYT3um`GZ>U?gF<FDBV:}8`%dfk|sPak-zy~z+};0F(?' );
define( 'LOGGED_IN_SALT',   '!l(jLVBSG5^`v[*>bh6.i_m>$8?:Ny1 DQ77v9O8GA796(E|V]Pb>/XDVff@18N{' );
define( 'NONCE_SALT',       '3egz6!q /wwv.vfBia?5&G^/DS9Okb{7)M LrFQq#h`!j|XsVYr[kkqgT_;%M(9^' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

