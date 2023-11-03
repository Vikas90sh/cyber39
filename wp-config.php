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
define( 'DB_NAME', 'github' );

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
define( 'AUTH_KEY',         '|6L6A(H_U!SYPTH0Q>hlM,Emv0Vn7@;f~+M.c&N6`Epj7Av;v#*sOX(mMc-v~7j)' );
define( 'SECURE_AUTH_KEY',  'Wy!W n0>WT$L*){*oThdj:w^MqucNpAqCdEU[#9fSY{=_%|/3yT>L$}$hHc5,}-@' );
define( 'LOGGED_IN_KEY',    'J%oG~ua>8n)1e03*)E|Y+ XfVf}ElPk$]nh.n5cR6`H?zJ_B%R>5ECsZn0/`Epeu' );
define( 'NONCE_KEY',        '.ZqW>;*noNUmKq^@4e~q_/~sM6U/<ABijnIdLT/(>l8>;IclvMy.iC0Gu`:oYw<$' );
define( 'AUTH_SALT',        'olKB7 Y(%5_Ltm)_{GBLNBxBHa/&6x wojO=bq_ +WZw;}%b-[T^veUopdH|A5MW' );
define( 'SECURE_AUTH_SALT', '*GO-xr6IqGvp`&[y!V(rARdO]<w2ypo_Qa eYQoF<=j8WDzyq!3$2 GxRfmvJj_g' );
define( 'LOGGED_IN_SALT',   'oQ!:-R}0>KNd&7lC^9*5t_(p@7<HZz~}K];o)bxJw)2rVNs1W8 jFvy:,5~pL95/' );
define( 'NONCE_SALT',       '29]YH?@U+[A4~4o~F$Jj-B$,Us`Hh Ge@D]MCw>BK`Y!T&%4Vlzv;zH/WWsOFoi[' );

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
