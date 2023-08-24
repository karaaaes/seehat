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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '|TD,8qa5nNg^e%GP_pl:AGb<d7JL3VehGi#Y~l.]V&{NhA#MS)UA2SLI8wNl*|]w' );
define( 'SECURE_AUTH_KEY',  '>D2{l2i;F#{^_fJ$|JKI)NOT~gG1rUtFWLHVLi/.+%%8u+d`6Yec/@6/>bHsx{Sh' );
define( 'LOGGED_IN_KEY',    '9D5!{Cqx;@o7z7%wJ~G?F3>b8%?N-c6e7dlcCzj<d+~zO?MrP)ipgGmc@8r)%f@_' );
define( 'NONCE_KEY',        'c#Z^ ,GBmpcf2@quE?R,=V]@ :Cz@+t`GnFGW{s` nH#V[~& >xl>uCW*BosVR+>' );
define( 'AUTH_SALT',        'KN>lX[;#v|v,)(.@/(swKL~Cnl|C 7=aD`bs%7/gk]]5*t?dIhd;6+P pf?:_suO' );
define( 'SECURE_AUTH_SALT', 'i`DC49`^ xh# hF~hP!RZ!wr,aff]s.3Pe=3NN_rDG mTBF961m>(.1qBuudWW!L' );
define( 'LOGGED_IN_SALT',   'U KV)J|GO(W+832_Bd(,~xohr32V8C1b?6clsE`|hsTeP /mC.:erJ,D2~Ko.{R-' );
define( 'NONCE_SALT',       '?z%pzUq]T[DMG!R7GK}v_l!52T5O+>d=TGm$#lx0cHLO,= d0=feOz{ayQsX.ha@' );

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
