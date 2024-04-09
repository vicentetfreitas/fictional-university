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
define( 'AUTH_KEY',          '9?Z `=KIa`Rb);t@xvv8SG[}B_SpN*I8ry(g^Fl=>PBlRL9echy$Z0)mrS*S){S*' );
define( 'SECURE_AUTH_KEY',   'yZNjWi(9@/KWv`phkO5!#iZ+aSLh8K?NltdF:KxN8>4dMJ@!B30wA/)meRQ7~JJ^' );
define( 'LOGGED_IN_KEY',     'k(E2?JzR*^v#n &%3&Dr<^]14:|>^JRd<nBv:h}9Bxj.|u|Sdf)12lYC$^{2a!(v' );
define( 'NONCE_KEY',         'U`lAr:H`trE}([ifwZFc&ohRBecdiEA9eA.CtM+eB01?k<x=uu*^|cboO{WPmKG)' );
define( 'AUTH_SALT',         '=q+4!:#B>*L%*69A~_-18-XkXn#f>j>^&e]nTV,v64HwcV#zB*bZ(|AZWpxj7L;#' );
define( 'SECURE_AUTH_SALT',  '|{=}`_T(Q^^K;qB5O%R&!|,f#igJUG>7^r&{L+h=;^i;=AyzelgF3BvC]ITiz.ry' );
define( 'LOGGED_IN_SALT',    'uK?(s JG4GfSM#[e1B0x?TVX-PJPbeHkbeq}dB(GTZds6D4n+4$*nKQ]Jd>GSwj(' );
define( 'NONCE_SALT',        '@m]h=g3}r5+s._3sF6[ei:+xM=PaNH>o5OGJ80DLfG(Q9.!|J03 $.p7T*eIQNH.' );
define( 'WP_CACHE_KEY_SALT', '(wpw/{G+iz*vRBot)mWGNm1 S7mTL)>!JhiyyNwumqY=yXK{%q>~LZ@KF<J@Qsd_' );


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
