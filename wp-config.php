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
define( 'DB_NAME', 'bandido0220.github.io_db' );

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
define( 'AUTH_KEY',         '4c%LSvZ&leJPT^c]>q39-B3`67,_g(#[lou~L/[#~{giU~MH!( 3]q/slC lvAD!' );
define( 'SECURE_AUTH_KEY',  '}JeWa#q{1|; UkTw~ATBi,q2@%PVG2WTxYZ;Lr:<(Ti~cdj&VJ!#dNCQ/PKxATpM' );
define( 'LOGGED_IN_KEY',    'QeteYz1)TZ?V2zpH(n$He]<Bwp@Y4)Me*` (wH$ht#m<T]U$fP&-bC0H-7GEvX?1' );
define( 'NONCE_KEY',        '_5me-Rill5:|^y1khKp!:g@Q9]Nh2[{c)2VZyLLb++R1_tCfQMCjY0#.3ew%=)@N' );
define( 'AUTH_SALT',        'CxulPlmzgVb4KU9~:?O30+{jX:)m>GI84=H<kVNr= u&]?ElY;f^udw$i^2DDn/p' );
define( 'SECURE_AUTH_SALT', 'Mwnz<O4rCsR?vx$}hb:UiKAXB;P?E;Y^aH_#o [$Ct~7`EdOEB@c8.pYNOYZJwI<' );
define( 'LOGGED_IN_SALT',   '}+X^d/IK0+vT]HBG3F#rMniyqc6yBZR<UjHa0eS}F(2.k-mW.gFL8j@VI5ggjvr[' );
define( 'NONCE_SALT',       ']$Kkthn#M|xHo,HII-?d!|s1+B,IW0DNciD#`U&xip?.rr>5spm0~rD%>p9ZOUQ{' );

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
