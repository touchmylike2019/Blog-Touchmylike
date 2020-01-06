<?php
require('./vendor/autoload.php');
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();

// ** MySQL settings - You can get this info from your web host ** //
define( 'DB_NAME', getenv('DB_NAME'));

    /** MySQL database username */
define( 'DB_USER', getenv('DB_USER'));
    
    /** MySQL database password */
define( 'DB_PASSWORD', getenv('DB_PASSWORD'));
    
    /** MySQL hostname */
define( 'DB_HOST', getenv('DB_HOST'));

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
define( 'AUTH_KEY',         '%aN`yG1/,;I>}~|OVQ-[jA!J~`$Xc|{[0G`b$&NvtW2%jVkeJc $[r}yiL]9,wxy' );
define( 'SECURE_AUTH_KEY',  'ac3R%%)S+O$5m!;,(24iQ2!y@C3_+gr1hWP7}WNdEw-D@i[F }J|kZ=f1DeGf/r2' );
define( 'LOGGED_IN_KEY',    '%Yf~bTEXALzhBVWrkx<ZJS>iT+i%MSuq^tJUNgCN)ot,g`3!(5]+^zaqPeLoU$Vc' );
define( 'NONCE_KEY',        'XY5N[BJ2 =JqH>DK!fPD>WD(^r&OBX3+K;1P)[-<DF)<r]fKXy+qEt,]YhH^fIi`' );
define( 'AUTH_SALT',        'drBoYB6[(App!:vA;tpc99|:#33Zc +#C]-[-;Ne6}6315*:V%xgWew`03Rc+*HA' );
define( 'SECURE_AUTH_SALT', '1R5N$=H_z.!?b&dH?v?QTb7PboecgnogjH6K>5M0/_!4o?`)H&sJ}}/CKwo|>[9I' );
define( 'LOGGED_IN_SALT',   'P4t7Y;P);ww.O}C--#Dk;gxP$ch#p8=N:r`;6(WdY`]vA%!3s;Km_7&q?&.WQ.|x' );
define( 'NONCE_SALT',       ':F7)FNCLQYmHu+?bW*A2TJ#@.nh~rJ<47<7z@quWN~>QcUVozlmlBSQ>@TmnHrC5' );

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
