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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */                                                                                      

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'clixl8k9_cubic');

/** MySQL database username */
define('DB_USER', 'clixl8k9_cubuic');

/** MySQL database password */
define('DB_PASSWORD', 'Cubic@123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'UdlkX-Rq;}@~WI]3X`GTe]~{oa;4-NJtOlH&6/p?EQhKE-{lw3[}#*J_$<|+5eG(');
define('SECURE_AUTH_KEY',  'z_w>1tJS2%OHtI7e,g<0^T!mafsDPCI,W`;-OC&K;;2EHXSZ_jbX^W:9l0z=D>HX');
define('LOGGED_IN_KEY',    '.s.0mdMy.+j;A.%4aF!RET ;,1wv|xhsgjd~X|i|;aw9FGtP<au~;wS@*jfiBgv@');
define('NONCE_KEY',        '5i7cy;5*~KX}qFg_MYf<P^`B}l^ch_p&&(vZNXTaxDuX,dna}2@ap_*jZ_-gF#ip');
define('AUTH_SALT',        '/,_ctT5CmUx<C*-)d/K!n@W3[5CFlOk/8 c7lD2ySw; GdfI?P).KvZo~i{+oAHl');
define('SECURE_AUTH_SALT', 'aM[/%IIAlFMP}`H7BJT8LTBB>Rs*Jrju(SJ@%d$T_7oH d.b;.WNgVs{J(Y8}sCn');
define('LOGGED_IN_SALT',   'u;6YC&6ImrGVE]_0eB[tFiP5!c|/u>^=Hx2NSbp1(%EaIGcQ*~U(A-`[/ik<f87b');
define('NONCE_SALT',       'bJuj$4L_=`/< 7D#!$>IIu%6`SDY}v[GK8|XGmBvMes;+y.tQ9j@6/H* IhGy|Ce');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD', 'direct');