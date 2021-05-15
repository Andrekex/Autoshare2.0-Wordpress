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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Autoshare' );

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
define( 'AUTH_KEY',         '9f$jFjN7fg0ay{iblD!!mf965x-u.`NjkTZ[TEq{lGYND?n2R5|L/iFt{2024y(B' );
define( 'SECURE_AUTH_KEY',  'AqyTA;q9Tca#wzBuE4[I@I_e)#s@WR$d 5d@DKBkAJaW=tZD#kK4H-`N~7f>[,Bl' );
define( 'LOGGED_IN_KEY',    ',wy$x:$}:#:?1A^A[+tQogp0x-_5%(.gp>_*uc5o|Y(qSSEE7*}NeB^ARmIHwVpQ' );
define( 'NONCE_KEY',        '> :$9kg,e=o(,Q+LmekSh+Us!>|ApD~|6_aOS24M?,Yk0rvi7WG )wofNbn2W`v|' );
define( 'AUTH_SALT',        '# hX*<J+[Saz}#=wzURcrWx{J<Y ^+b^4VCesdyt45qg:CRsUl;_-Ki@xAanR%||' );
define( 'SECURE_AUTH_SALT', '5E4_Q+]<^./LxmYrV5CI7xrv=X3ZseV5oJ4PE9xSB_7W.OEKt)*^ (t4@!~czYz9' );
define( 'LOGGED_IN_SALT',   ')W.p{{=S8;;AXWF&CeJDo,1[155{b@uTZ(,P0no&+$(8gB`zR?|YGv.aIk3i-GQ!' );
define( 'NONCE_SALT',       'ne(D6(M9`/Y@kda_Y`V9r~W<Dwa[IR.@p4aknL,?TX4bJ}KBzV#!CgP+P`ZAC~Me' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
