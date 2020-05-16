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
define( 'DB_NAME', 'Final_Project_2020' );

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
define( 'AUTH_KEY',         'Ho|M_yg9&CUS~Ng]M2> b{J7),ZQ.zm&&hK9fFuz1O(~/D*l?oT{A^n|:mGuIoef' );
define( 'SECURE_AUTH_KEY',  'Lay3YsM5;#_x^8gd$ZgSQaVoqXFJK>9CIw,}[SK_Gt%hUYL(J# eKgH$D2`y:hIQ' );
define( 'LOGGED_IN_KEY',    'N^?IUMoLDIXCXn6.5DM2fK):,~o:%~]`%e|5`g? Vy6Am*@@$(jRtEF5[C7x=KL6' );
define( 'NONCE_KEY',        '##y](w9+l$sJzfIW*r+sKh0=}tGYWu)-t>n7VnD;{tGbbJe9LIrQ=:TVD(q18-zI' );
define( 'AUTH_SALT',        '+bS0Jh<Bzb9ek20N*odO>8|/q~DgX{c.1u_c4:?!/jQxd5=b#`Be{4sR3]v~i{H4' );
define( 'SECURE_AUTH_SALT', '7(;dQ{,)K_{JLx,MAvr`d4cUL{uo<zZeqIW>cmE`v<tn<!:7w]2v_-R&WF1Ln?n@' );
define( 'LOGGED_IN_SALT',   '^3ZTdcX8@arg<4Z+}w2iBJft@<u%tL LE~EMW*i<;rq@&wkuWY-Ct_Z{0,4g~,wd' );
define( 'NONCE_SALT',       '%B+3k[RcOY,B7}H_YWCDTk#gjX61|W?3<QK4AOWwr=)KW:?jG/-#].&znVfMaU@?' );

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
