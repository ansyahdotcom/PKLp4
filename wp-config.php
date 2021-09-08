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
define( 'DB_NAME', 'pklp4' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ']o5%Aeee2QWD3=$1^<~8!:v(ct^Us:nzo7N#.YCSDt;NRlEG A/Ady26uvB=VO(m' );
define( 'SECURE_AUTH_KEY',  '>z(G ,c<t(:!hj:Nc*=NrKWXP s,6zdVC*wR{r.9A*fVxC1cs5pgC!,p%6_GT])T' );
define( 'LOGGED_IN_KEY',    'q*L^,C/rTsEMmj&$]IAWu&yn(h(6p}O4S~0w%,vux}B_M=mz$K.xQ4X3v0?1B~?d' );
define( 'NONCE_KEY',        'r@pRjb,mNo *IpO^z4?w6Rl,ztMC3nOtU&/z?+CBkrs>92N[5k+.D&HXMw*]tVA9' );
define( 'AUTH_SALT',        '4a54kIr=#4&1<8H`DfI0vq@}$G02>i +! [A<Splc8+5&#&&-t[KLHJQ3gf=!(S<' );
define( 'SECURE_AUTH_SALT', 'vQ =zgq6Jw1N-nz5WtU>^p-GE~X~$&*SK0P[.+$GZ-!/g6`+&Y&SV[Ngvb%=PN]^' );
define( 'LOGGED_IN_SALT',   '^cF4qV&o/.#}g8PfJ,g`wK(AQZ~|AFmjS.AAG^uqQ/`^K+o:=.lpgGgQ[8LLi(;P' );
define( 'NONCE_SALT',       '556XZ0x#wSmQzQ=5zr^txE$P,pp1n[MJnM7?,],-C:Zti`Dz_*kWPl+>]U03}dZP' );

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
