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
define( 'DB_NAME', 'wordpress3' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '.dF.]KTMIS_i(_fW n.$aL~1-7v?}0n&<]]F#>Rz<@Qz7ur0o@B<$%:*d){hTO+r' );
define( 'SECURE_AUTH_KEY',  'N>EFyUQX(dwwV{pgCUw%G}R<EBjA_.&*7|j>Ki^)<34e:JK() Y,r6/P0r@3E78d' );
define( 'LOGGED_IN_KEY',    'l|2}3J.5O1kh|M!S)8pGgCS+~UimaS},<UcSaP8 0r8ScH%%zn^.S?a$3_tO(y4_' );
define( 'NONCE_KEY',        '|0nq<;C|Y0{!Eq!*zq?o>F[j{`R^<`cC@-GA^SW@#Sz-Ez=;OEX8M.%(?wXuKp!0' );
define( 'AUTH_SALT',        'o`>z58xbetd-*Nf~d-7[zWZY*;[)q=!Bldx/Ng2XoUbRef-*_1UYVPdkeEP7lL<j' );
define( 'SECURE_AUTH_SALT', '0UWD#8Q9Zufh)EbuPS{Hk{V^#IAf_~Kgy%RW:&EXlir{n .Z@|UhMxdD&CG;`41D' );
define( 'LOGGED_IN_SALT',   'fI3Y=@-ZQ8G:Aq`HQ*6DYi.7ABtfm(%A5{Ccq /|iM:J&y:wYn9%{!FlJbp_KTw8' );
define( 'NONCE_SALT',       ',?oZ[P5{cE35xYSkCT?T<RtJyU:{DRr7JBt)>>|NA4s4C|=gEzcY Wb_&vbQJ^$b' );

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
