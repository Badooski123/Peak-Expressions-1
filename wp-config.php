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
define( 'DB_NAME', 'comDBspkmv');

/** MySQL database username */
define( 'DB_USER', 'comDBspkmv');

/** MySQL database password */
define( 'DB_PASSWORD', 'DYjB4Lr4ZZ');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

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
define( 'AUTH_KEY', '_5SWSh#9eg!@80RFkgGkZzsRJgjf^y3{MEjM},J7YQrn;THiW+;26bTqeXumLKldZ');
define( 'SECURE_AUTH_KEY', 'N4YUvj>Lmb+ym.+X3{MA$mj.yTx1]KH5Sl_-ax#D6#laxts:CdRJkY4w||G-o{MU');
define( 'LOGGED_IN_KEY', 'cn},JF3QVk[!C4JXn{ETmnF7MrTq*W;umuHt_5O~OhHWOlVRFgYz}R1VKkcZzs0u');
define( 'NONCE_KEY', 'FJInb^.Ha+t;_H{<MAbPu<L:SDhZshGD9aSp~}Cz}FVKh!N{EBfnrJYQvx2HDi+^T');
define( 'AUTH_SALT', '[FYQrnbyq0UJg^y}6XqD6APyixA9-9sl[t#L1h}Bkc@rn,kG4:RGZ3bMEfP*A2vQ');
define( 'SECURE_AUTH_SALT', '50o}FgQNnNo!C0RJFgj,$bQuf.^j>$7Qj,m{*+A;TLmMq.IAXPImp:_DWwp[t2#L');
define( 'LOGGED_IN_SALT', '8RzEfXyq{.iMnf^y3^EH#~9;SH9eA+qi.tTHia>jYznf^IB@YNFgQ}^B76ym<+x');
define( 'NONCE_SALT', 'PMjYrUQpL9WOLp_E<Lxp1ZCNs|]SlZSpd^3UQAuz7yYQr,*;TW~*MfEu<Owl~Nhl');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
