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
define( 'DB_NAME', 'Restaurant' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'h M&:Dca-hO|jmu|)eqRg[-IP5dE${|fG)y%`mPA} 9>@o){GfbA%B>Sv7t-$L4J' );
define( 'SECURE_AUTH_KEY',  '<_#/AtG)o%[/XtEC[vF]Eq`jSWWY1BLM5W:TU9Iv&5IkLMGIa4rCopR1XXT:TmsA' );
define( 'LOGGED_IN_KEY',    ',S46H^Mer2ix^}cc7aH?GzB kS$F)[g}Wu_paBM! 3Qfks~H%bdzer1Pp 9`~3x5' );
define( 'NONCE_KEY',        'IYD_LF22|Om,%lX+4ebaG~NzVe{0.Z9ZH$[r+q{3k/$ho IkH`c_/52Ii#1Yvz>|' );
define( 'AUTH_SALT',        'T9P+0ER#DN+Yn-_i^48G]PC:<vexwL<mAycjO>Yk#i=+KW![3*lV?&_(rVqO]yY{' );
define( 'SECURE_AUTH_SALT', '8G@IJC4uJR4GBs,:&Gg.kDtY;=%fy!19b^]vAaR#w|Rt@D|g)Sc[PJcI=IRc=iLp' );
define( 'LOGGED_IN_SALT',   'Az~|=(OE:wh]=PN;bLmAS&$Alv*sST-TWn+*FvQ*/a(+t-jcQ,!3m8zS$O|_(KF ' );
define( 'NONCE_SALT',       '&{BY8}.+34rSyCdJjK~?NgEAX(mp}C_f*K<6r,:=W~8eVtpKeEWg cjJNL8#%-;h' );

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
