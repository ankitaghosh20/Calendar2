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
define( 'DB_NAME', 'calender2' );

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
define( 'AUTH_KEY',         'A~]P.$&;R s>g)AJqz@NF_yiS%4g>*zH5F]or-&8{_;kUZ4T#WozHqJ 5KVs7DZ%' );
define( 'SECURE_AUTH_KEY',  '{O<B|gaSV|c-}.ibX7vvW:8xHbDqn:}xDzJD[|I*`uP(xzFrjuwGt:Qra88u6Jf;' );
define( 'LOGGED_IN_KEY',    'ZiGJX [oS%C>e]F=<%wX9sLhLrW{l,3U3T4cx{RQa0A0R|}f/v0h=>L*RZ<g6o=*' );
define( 'NONCE_KEY',        'BI-22ndrH]@Cj4*rCtjv`gR|]0~M>I/?|u,[ahuI>3N@]<UvY0meeZLyeN*7q!Y(' );
define( 'AUTH_SALT',        'V7,hul~vN5(Gb!^exolG~P%N/MiX%1:a;8T oZrC iTm~2W*i+Jf^Bf,*sG Q3Pv' );
define( 'SECURE_AUTH_SALT', '.b`qPtzkRAo-pB)MxM;gCF;S2vD^LiMl?tjQ778:{9WQ4J4+gG=>v[dpewxg8a4.' );
define( 'LOGGED_IN_SALT',   '9y&|,qIBBy[!!4V&F~vK-Gw>K.naz|xFg2k>zcTgvOI__sG{ER8K8.akS;*UT`>m' );
define( 'NONCE_SALT',       'xXVf@s:r;o2M[1mV!M75q4Y+x_uY}xO{-@RM%oF+0Su]+_n{k(KG)3x#V%!i&#)2' );

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
