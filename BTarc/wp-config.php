<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'redfinc1_archive');

/** MySQL database username */
define('DB_USER', 'redfinc1_archive');

/** MySQL database password */
define('DB_PASSWORD', 'gljuo9vR!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>*B7Z,H<x&NT|n6@:g|l_pm-QG-d<:2|$VQ?}6rL/#r4kn-p.F2!%!VPJ|%p*B%=');
define('SECURE_AUTH_KEY',  '11iSu?IAK[+5B57#?_T|_RydH$_/pkL}+evex4c_Kf>`(GR*<>K_c}]]RWL1`[Or');
define('LOGGED_IN_KEY',    'O@rnv[ls|:;ivw:<T-So[P0SUcMzsY@Z`^I~Z$={M;U,RPh&N/Njhap/`4vQ=Lr7');
define('NONCE_KEY',        'f&s]yT.f)+7%=%T_fs)p*rC:Q`h1d+K4qh|O*b^^D|F?=107?:/~TQ_o-9!*rvcX');
define('AUTH_SALT',        'zf?81x--OukUzXdtbyo1(9oK.{``+7KDE%_^QM-0p4R`^7ia&4S+fEBOXDU4$yim');
define('SECURE_AUTH_SALT', 'X+ EO4H:+L~uo;E^`2/S2*pnES-fQa@5X^>=%]yFlJmt7Am],kC9[r<I(}XnYuq6');
define('LOGGED_IN_SALT',   '1ueTN;cu5n`X1Qz5UzBrs._d;Cf/;>$N-:`r:%hYms(-r/c=b:10C+,?}(tvOR:*');
define('NONCE_SALT',       '_G_8+h6m#Zt]_ibuZ Dz4|P^KnC[q~!8qy?bqlRN@y+gLh3fAJSrp`5Jc)?cYS6f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
