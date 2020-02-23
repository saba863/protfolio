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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'G+ThxB4F/i_M;szB]#YYfh$D#|d/E3+;9*7)G@_w?[W)$z5{*R5-iV#i zH|C|:C' );
define( 'SECURE_AUTH_KEY',  'F]3,&%jhO<m!^HQa$,,0xYjmQ/[aW,ac4 @*lI5x_ i9oWDiCcO9OCDe~$00:XB/' );
define( 'LOGGED_IN_KEY',    '1v,t_sZzl4|e:F>#C=;{JdIG[l,gGk=t7&AKusZxC0(EiK(f<[BJ:WBzZ3te%|[6' );
define( 'NONCE_KEY',        '.c:}/>$d:#<qf_J%^>},US6s9_MRm3PZ`|q0%Q:0/YYqf+MpYYL$F2owwO!z`T{j' );
define( 'AUTH_SALT',        ')V/HIP?44sa_}aarP5tn-mZWR+5Z$GBfw565- F<=+bv_/||Y!q^wfdA6T{[LV35' );
define( 'SECURE_AUTH_SALT', 'TH7FIOS5UCVm.NN5lvbL hmH>+2U>pEq$iq4Zn.TwC5c0gO!W-u01 6KqaM?td>7' );
define( 'LOGGED_IN_SALT',   '165(/piKgbL!:F<CI.&(yK#4*I9M#R<a]e@d$d0rSb:;amoE<zVWlRD]9J~(OSZZ' );
define( 'NONCE_SALT',       '{HkHFH[O1nC(J~]5&E6+W6r#*>=Wa2FsW-}NA~T~1>oHXi.s!Uhr5^sc^@g)#.=5' );

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
