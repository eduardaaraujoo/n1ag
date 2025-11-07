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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ')C<ByvY&-j}5}1V#*O<rzC,I%!>V);*YjP)-Jh@KMOFm{[KNhhxSx)bR2:%IqqH]' );
define( 'SECURE_AUTH_KEY',   '=HFZ-i<8`Kn9T:iAAUt(VS$([Z[BQK(p>BZcDExC_=Nxr64*MgtWnzuZVX4%e `v' );
define( 'LOGGED_IN_KEY',     'ZfcVZ$Lyq3~9^5A8>2-/^HY9.3s[sS2hjRh({AC=gjmyWOwjn)+/=[,FUOr<,QV1' );
define( 'NONCE_KEY',         'oA!*EL^9A+3ac.d|Z>riW5uY/5:4R:7fg7liNC{Nb vV164:=2.Hz;9&n<+%I9O-' );
define( 'AUTH_SALT',         '11S]9xA|WM5%vnyPRws3~-WP76<_d12GIgz%hH)I0o$]:a8rqo`-m!6<&+N2UrF,' );
define( 'SECURE_AUTH_SALT',  'QC`Pc+_D( 7&,jgI:]x)s9  D(Klsg4iiIqA2bQ_^fKv7GlmR1W3YS]zsq#U>?a@' );
define( 'LOGGED_IN_SALT',    'Qh=[TjA6W2|Flq#$Z~^[]Y_%l}u]2>S8N0qalbK.: ^}a4@?1&ME :.D;4#hgRxx' );
define( 'NONCE_SALT',        'o[oY?(jiyKxsyVqv&gDHYL5;W(;UIfn=+/9)/$6<s>pz,CL].5cNM,x=~4rcysw)' );
define( 'WP_CACHE_KEY_SALT', 'M4+&)bJQ>zWg-S66#<y:u.m=s%}vk,yVzl&^V<%yH3W&%S0WV kF20jt,*Agz%@H' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
