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
define( 'DB_NAME', 'siteodc' );

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
define( 'AUTH_KEY',         'guF]%kf=qwB>g+z<p3hwARhZSi^MAexSgp$uzf&C^<tD^q8o8N2E^#,j;[d!mG7)' );
define( 'SECURE_AUTH_KEY',  '9WIR+oqt!x9NiRUOr8RA2*FI~%St@t.hds{HtA @qj&S/NHtE^P+{hg^/P0.`6:D' );
define( 'LOGGED_IN_KEY',    '4~HR_Is)R)YT:oFs.wqHD[c %9tma<h,a%I^.(ll@{Ol^wJMe$L<)Q<qWn?d.E(R' );
define( 'NONCE_KEY',        'g??]uUB6l=KtR:.Q[OS+ :u8dg$3Nha9,Qo.A(N=G/HY$V+[V|5leo qD~UESkH>' );
define( 'AUTH_SALT',        'dE/r2HUEliT)piYn5L~>S)Aa~?gWc(cg*g,7+p>2G+nTQdb*!{}#%{eu-Vmokl{[' );
define( 'SECURE_AUTH_SALT', 'W)D1Yb?1s:^gf5/#[d!P[8C|D ucytwKG!5/WJ)p0 -J7$IPkr&YV{Z29Nmqxu@C' );
define( 'LOGGED_IN_SALT',   '4dVT{.hE5_2o;m6gh^THcB`B: pm|bx!qLr)A8RR4bhX|3wAF%vI)z#eG]0r; IS' );
define( 'NONCE_SALT',       'qL*}m ?w`CDKoz>H09~t?x#0oQ)p`ECIBw@+NmtT8hK6I+#QTtE/=$q@Kkz/?0vz' );

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
