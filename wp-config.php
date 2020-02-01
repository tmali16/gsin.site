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
define( 'DB_NAME', 'gsin_site' );

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
define( 'AUTH_KEY',         'vR)iUx3W=<1.*8&|_q;yI?eLy<jfLMVL$SLqU,RxgSkN]3$7YGKoX,D|:i7$-H{f' );
define( 'SECURE_AUTH_KEY',  'j;]<`ENr{Rg0!6yJralnrXB=INQ}Nv)dc`3-#y@;k]x2Eyg+kFNF3 >8sYST!6*c' );
define( 'LOGGED_IN_KEY',    '&Gs6{%jhp)YDGhS#?dH)dDoVmnJ4`iS,0K6jr-|uw>Vnv C04zL)}_#g]VIfldQ4' );
define( 'NONCE_KEY',        'f*eF~?Tgb*Euo[~>:{`Tv_2):F9E1u?j:l55,UN=FHUPGYazPyT~iz:0#<GR3U~#' );
define( 'AUTH_SALT',        'Fk)xo0~fr2a-;ZsL)V{&V&nLFL8nlaKs0ZbaN}b7RtO 6FT)gza59h_:/{|@>`gQ' );
define( 'SECURE_AUTH_SALT', 'eBY{U,55-bm|je~l<b2Xel/;u52P>tkj@RbaC-W*S)!bl[l&$!HbGv^Vuq,P:Mj}' );
define( 'LOGGED_IN_SALT',   'XKnG6.Ze4z5nuMw80oI:KFy7)NSDM]R~v7jbYu2-LL7l<m`#~.$wkOd.(Btb.rt8' );
define( 'NONCE_SALT',       'jhbX;o<-A8~Yuv/[t2Xx3P6nb*!bfG^u>J!Tkj?1b89IbgF p}Ea>r3& rtg=#WY' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gsin_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
