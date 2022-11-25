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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         '-r^l(sdrGS(S{A!yC;~5h[llQ0:^k8aV;T9D-`RySJdOW~IYUq2>*ZgCg9m4u4;(' );
define( 'SECURE_AUTH_KEY',  '`hJ:K^~u+A}h<i+e6`xL Yu`hn q&oq1gefP({{_&M&tDo$Vg[RA~A5uuo 3.&<O' );
define( 'LOGGED_IN_KEY',    '=u3h|`cBB7b(q,7wZr]Pv7y:PY)@nTx+SwES)V3T#P{{=^k%yPoL[0iq0+R43gyW' );
define( 'NONCE_KEY',        '5~3Cl:/N< G;VD^K`|Nm]Z;i7Jij p$5Gr;=^&>Qh>J1N )[>!=uTvS,zfBqP$<S' );
define( 'AUTH_SALT',        'kF/&;@^2JiD?l$:+VC.Cdu(w<yLLu8tHnx0g6dUBh2hyHC_QsgAHa+W-Fh4jvrdF' );
define( 'SECURE_AUTH_SALT', '< 3JG^cJA/I}@TW/[4qktq-Fm)zgbQR(M1k}HY<gCcfzH*D+$-WQeo`^<O{^k1(9' );
define( 'LOGGED_IN_SALT',   ' H3v?l%Qg]b6N([LUOIpY8wu:.mM]u86_Y)?oi5QA}L|c>j-NrISuay8yHHN=9Km' );
define( 'NONCE_SALT',       'h6,FcMQZ<AhSS-v(1U0,D~EFR<gE2,+~No}$H#ekw^*QRN^48I<W)7&BAj}5D=FE' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
