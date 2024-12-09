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
define('DB_NAME', 'prodigitalclient_meditech');

/** Database username */
define('DB_USER', 'prodigitalclient_admin');

/** Database password */
define('DB_PASSWORD', 'Q7Nm9ToAgbCKuztK436Dy');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '5T/ 3>>H8NXLdHgkvtbf-Qo:=BB$m3!Iv6jyx6D+,@gGauYY-@n>KJy1xa{Y^R3-');
define('SECURE_AUTH_KEY',  '`kmUTp*Ppt9t}`>V!)ahtQOgg0?QB,RyiU6]X|ZcH|7_t>F*1;QMBu%(iyx*6G89');
define('LOGGED_IN_KEY',    'IL(*So:Xz!B5T(?(jv?wpng^-)0$-,rOZ/D>M qUaNb!E#-!NX}Ky23>T_%$=Xkc');
define('NONCE_KEY',        'E!-q|8D2KWC=rg#xq39o~N`,:K=`u#/d~`2W>QsjjL<*sAKEL2=w_u]5G~9OFOeJ');
define('AUTH_SALT',        '>xYzh_hk6`wNE&:QmfD!)#~)X[aHJw4|n<L&/} )bWV/=<#Is,Pp=E!_9H8&D^4(');
define('SECURE_AUTH_SALT', 'k7&` 6>Dit<q#3D=5iGUXAf7]P2.K}/).6~lH?m-SW)i{t`d.D*/rqk6;E)F<~G|');
define('LOGGED_IN_SALT',   'hvq3PrK]rx18i{]AQn7IS6kSK0Et,NAvZ41w46@s_M098>6)((npIMyY&WMkC(F]');
define('NONCE_SALT',       '!MwLw[HCD$qz3Ymr@:d2d 75_7C.]7Loq~6l@_{<ep^5pyHT_eBI8GMX=`Vz|Cdr');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
