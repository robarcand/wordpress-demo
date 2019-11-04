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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '?z>Gv!qq<geGsIA{${fcgVSsXuLZVI2AR*@1u)=UQ)s bNl@z}T7C{>lI`AE%LHH' );
define( 'SECURE_AUTH_KEY',  'F>aK[k3DcWhl;!QdNVlA8j0{L@J0kK>.|8(6K; S{NI8DUf`Eh ;fS1.Kg=~GlYE' );
define( 'LOGGED_IN_KEY',    'hKqkJw`Fwbw?tb@!m]9,iS99AN6f CDN3)j:?q_61qJAcnw0yTH:N#K@ledF6l,g' );
define( 'NONCE_KEY',        'Fm0P-Z`2@0R2h<XqgM2$>Ul*lq(Dr_^NP>X4 Jq~rUgJN@Wdv.J6WFc@Tf<S;Q~7' );
define( 'AUTH_SALT',        'c!}6US+*ovAlX2zAMNwZrp}tPfM+NM2vWa]$7V| [}WiWRF!JGbDEG.q ;*gI)B|' );
define( 'SECURE_AUTH_SALT', ') :wgQ=+Jm~2Yx<3hQ,$}B|q41QkPt5;&WCv+IAL:::>? vAU$T0Av7P1w9[[0vq' );
define( 'LOGGED_IN_SALT',   'zW&ZdVzPczBPIm(oZ89<An^T])-ZQ^1(H%}/h]a`+,Kux+[/hhpa5iGN_rLV@[[Q' );
define( 'NONCE_SALT',       'pL-?&Kq2JT#a7fu:A;>I}&my2H=TIV|a1Hs|HTemI`K+hYkv76MnXQh!dYteI3dH' );

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
