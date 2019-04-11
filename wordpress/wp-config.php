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
define( 'DB_NAME', 'automation_nightwatch' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.189.127' );

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
define( 'AUTH_KEY',         'vUhEkCVT+4;shEWK.06_YYrU5aR<}BW%3{h_:zx_*0b~9KC`4qzE;</N0tO8/e[=' );
define( 'SECURE_AUTH_KEY',  'AA!Q3&oV5/,tn?LX7MnOzE~b`:8/s7#^hvhvoH[4Wdrh ;057r5|W(TOkdcm,.kN' );
define( 'LOGGED_IN_KEY',    '2K2kJ@7B23pD[Gd<* KphzMU$x,_F.lt <m~k`S7^qD?a.=4DC^f$$HI^z;It;*3' );
define( 'NONCE_KEY',        'nxToC*V7}(YORo6E9Y*q:CJ+#S6d%wu~_n6;Pw3`-$lQ;IS,RJ]=Io5?WVO/r$c;' );
define( 'AUTH_SALT',        'Z:qW6L+Ipr7dHg@mE3=W^(B*u*FXCWKbk(A!CRa0ot`q`=0:t:(rgT[$tvMTG:&(' );
define( 'SECURE_AUTH_SALT', 'sqlytZPD)0X+5.E01%zO)W;Q1N3+{6{4K6 *M!TOjLZESkLuSh5TUV:z_wEsLux<' );
define( 'LOGGED_IN_SALT',   'iZg^,b3v{tWf`g)</dU4S{aQ;k.po_[)u;Y}V49Su?7=VEcL)hSi6`O<;Ln&ZhRm' );
define( 'NONCE_SALT',       'X/h#4~v6X6QzhfeGn!*hywRk;}(UhT^a*^SaK`up!3#(UAXXu;)fkgp]qpG4JTyU' );

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
