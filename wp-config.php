<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', "xuantp" );

/** MySQL database username */
define( 'DB_USER', "root" );

/** MySQL database password */
define( 'DB_PASSWORD', "" );

/** MySQL hostname */
define( 'DB_HOST', "localhost" );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'r2l#O(thteIszq9MRPqO.xu@1-7I+G6LSw0Og-!8_YJEd0@9K~>$A~Gm=D*t2o?t' );
define( 'SECURE_AUTH_KEY',   '35:bDi3mu=w@K7O6&%m`,#ZHx{_JDG1nA4z @)cTv~g06e,f,)yQL~=5h8x5L8kt' );
define( 'LOGGED_IN_KEY',     '~L$)7@CE*40E#[TuB>)){K1cF_|FqPl.YfyX/iO_ow,W6k_-!r`^:xxOUtDu-7Ek' );
define( 'NONCE_KEY',         'v37fp61z?jnU;QolE4 PPU7xJn}VC@M+?D6s%8FKL)Tgn pmA!6C;I/LYfhO2pm&' );
define( 'AUTH_SALT',         'S1Y]?m0cCA?ZFS1B3DCS;`wVAdTX,hN/P9/s/ g*,UJUfuHmU1ytCTd9t:Y}ZFz>' );
define( 'SECURE_AUTH_SALT',  'n+[]UJ5=pQSf )N[L{@ Tg13}Y==`^(Be@jC 5YVc7r~<L`c=L$,ASqmQZP,3+m ' );
define( 'LOGGED_IN_SALT',    'n|j`_yf=4ni+:6yV8q.M-R$3S|VPD~<.4H0fMHC{0{ t2E]}gy80tkY,)H`?YCSl' );
define( 'NONCE_SALT',        '2 .U yRESyO.[rt/d+1?kTKscv<CO$qvT$`&(hQGL1;gVhG:vq8My7o)WTn{~:7x' );
define( 'WP_CACHE_KEY_SALT', 'VF;4mud+M$]ZatO6DCrZT:,|T{ls;b}lV$NNHI4 9Ym|e/<;.E=DsRNyh(zovvls' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
