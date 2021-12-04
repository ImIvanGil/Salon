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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'B5/qU4lt<L} %PPY!gnn4ZB8B@7<%wrlR(Yl]!KoPtrex]2EwUPt$zJSKbj2dp^u' );
define( 'SECURE_AUTH_KEY',  '@pT++KJMzf2P>ug -C+9~_p8=lOfc3XZAg5-j,#av{CuyikG W5,j<g2.78^C[Z,' );
define( 'LOGGED_IN_KEY',    '5zvy@-u;_XO+~F|&KG04`E$bBxYx^5Pw@CP~DMr+?ZOXMPQ|oaePI)X]QbkVOy=^' );
define( 'NONCE_KEY',        ';/5pzYW 7eHP(_v4iQZO@$pIN74kAeJoveVPq^ywjOP}GpiV(5` @{4B6?I@Br!W' );
define( 'AUTH_SALT',        'A<2:mlULp#PC:;9iC{(wD1O0D+<w}+lAEuf}Ueo[{0=Kdgss!Cw3uI[&`-[9}eHK' );
define( 'SECURE_AUTH_SALT', '{#F&G63k1HOJ46C^1u%j+Ir%okN}Ib:~aB3!h D(oyeHy%SdpZ8f(^ -ZMq?;Db2' );
define( 'LOGGED_IN_SALT',   'PmHT9_U{:V<,:=>yqE.eEVOLu/~?6v<CV `{Fm<fih[Jo+#H*Y}P|:$*}&,NbLqh' );
define( 'NONCE_SALT',       'Wr_.m?r4p=ftOsNC0mW]qLyX+~3F17EO5N2amf^QM?ymZ=?s2MtKfCYN:E[=]@Of' );

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
