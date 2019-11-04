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
define( 'DB_NAME', 'coolmat' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'kW=~c*O{U%n?G$99DG8npR g)f`&x`@O?!sG?7GD$48@=;3M1uSAUc8]junRaqKB' );
define( 'SECURE_AUTH_KEY',  '90:;c)|^/KH}kG[HSYt0JH1k@o/F2Lu8onNP2Az8IKayr$z^>h?xZ#O!@sC(EDD`' );
define( 'LOGGED_IN_KEY',    'vB:g|7|T3}~y^8q<.uA$[J@r>C6{|9aYZt[DXD` v0=,_117xa9J$)`t?Nt@>?_R' );
define( 'NONCE_KEY',        'IG)Hr :hm|.v3(%]qDDZ2+rXd7Y+88g n174?n1(mDYk4Ph%ifwn0j@[@-pj7M=&' );
define( 'AUTH_SALT',        '* KDS``}UiAJ{HsF[vCkQWV,E7N?@B4RDzA^]RVyfOua2,a1U^2>RUDZuY]rP(H>' );
define( 'SECURE_AUTH_SALT', 'n3JYH+#PV=b^sbr}bB& @VN~Xnp5mq*Q SF*ojh,?I7n`0LL?&w0*P/6O#!1EO$:' );
define( 'LOGGED_IN_SALT',   'o[^$3hi,_=/b1Dh57aPx[=y//PtO&HyisndaHl<O+j]/O2LtU5.0#THXRLSf,P;n' );
define( 'NONCE_SALT',       '%o[9~ynMtDC&klavWaS_9x}bcTDg{J,%=/zUAC3~0r3a}G@]X/tvzVhKNN!<)/?Y' );

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
