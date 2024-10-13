<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tor' );

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
define( 'AUTH_KEY',         'Ep2.J~jaO[h$b5 ZL/g^iW37fU9xm0,W-4LxkVOQ>`EM_pvtctaTm.i_lv(EBR1J' );
define( 'SECURE_AUTH_KEY',  '`*|BQ3%#<.D.(9T{6OW:YC{PRLGR*><U,_@qb~QvHsbm]ja~n7gQ9lX.S[`/M{h4' );
define( 'LOGGED_IN_KEY',    'qIHEw_/@y8Er-[N;rqPASVY[Wu`gK1f<i$EpRL*sO(k<c#SR1`rT:Da!K2/r~V39' );
define( 'NONCE_KEY',        ']f&Kun4l98(e)ys+$_r?Ba=+t^l[%mTSaqjLo|qa6md$IzZ?SQ>Calg5rqxdU8-%' );
define( 'AUTH_SALT',        'w}*SFx`-rSjevx%D:nS8zG_hh@0:=jpJrtm6VPK<u_KJrUnV9]$CR?N1[IX2{ga9' );
define( 'SECURE_AUTH_SALT', 'CA-14S|m7Q^s.C!`~q6}o7#!k:Yjl0@E!lXcWNUmk!Yw>h6m*[ug@POsI|My~Tw5' );
define( 'LOGGED_IN_SALT',   '3!juAvh9<%)k~(W$tNX/Fcdx%<vK(DuFxCv}NuEVd8M+U36>(i,f;$@e|dV [gH1' );
define( 'NONCE_SALT',       'uHw!L`P/ LF& ]2<@Q:ThoLhESJ;*{e 6!UX!HP87b^ksu2Se.nP01@/B?)}?~|<' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
