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
define( 'DB_NAME', 'nutriachill' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'X@-&ecgV3#%dEf[]o|y~CeA,kdL/(bRL:eYq2d_ir~-OjfmA|c6+z?@WX8>o#VVN' );
define( 'SECURE_AUTH_KEY',  'r#r.h?cu$Eei/v|iLJ5q>F^ mMXjTOlKNDYkyzas+|#YKN@WqBWLR-3qv[!u8p*+' );
define( 'LOGGED_IN_KEY',    ';$)8Ck1_xJ1icxVGL|q?vS;+3)3+*3Mbb]Fe.e+9X;wR$K=c]1Lr!])[-O{{CQVY' );
define( 'NONCE_KEY',        '1prMkAj%x/-s?O <>_z)j+|+*(f|cHSXQW5v#]zPEjDMJ{b#Vt@yDkd7!T5RK[[.' );
define( 'AUTH_SALT',        ',uin-KCzQ{Ekl2gYSVc YE)XJPq})=|?o,0u?5/dl`(VN-=N_[1+Hy/~o:G|Fe6c' );
define( 'SECURE_AUTH_SALT', '[*Py<IDIF@boFP(L@,3%C-km86kY~]ku(l{|iCk92#Pq+L8?2sF(:|c1rVjpu_X`' );
define( 'LOGGED_IN_SALT',   '+ie9%c_i!qc<wx0,~I!2L@6Z,`%[Y)9PgN|N1U4,Mfa^qq3{w?eeLzC*Z|ml{nje' );
define( 'NONCE_SALT',       'jI+Jr[~9:* VaO| K._gw 4f7XDrmUy{+0r:&P%0t}rG2K9kQ[]pZvJpy;0[K9,9' );

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
