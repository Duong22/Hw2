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
define( 'DB_NAME', 'mangcambien2019' );

/** MySQL database username */
define( 'DB_USER', 'slave' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define('AUTH_KEY',         'T-NM jnRq76|d:CX>CAgW{H^G9?c,Rx|.]h%c~<j;C|:S-NxF;J=)V`oIxFYB?mT');
define('SECURE_AUTH_KEY',  'O~(H?x]o2K/,xlbD8Om0z;TCZdL]x|)z%MM^aW>;(SO;=S|n7&_+&nmwPEF+:~@v');
define('LOGGED_IN_KEY',    'hh:A|x0{sr-x+JRAYR?JU:Fc]};l^w1NtqE7I;qr@$|4cC&?@p>&8he[}5n14C>X');
define('NONCE_KEY',        '|h &*9J~NU-c1HDKO|Kbdu+,fj_! @EniZMt,7im?l[C:Gr:yE*HH+@89A+}>,hP');
define('AUTH_SALT',        'K<;U7<5;zK2<Yas |0{Wqs-?ymK9}/}=vmL1AOX=N:fdH@Y^d{AgJL<+|bP-e`-!');
define('SECURE_AUTH_SALT', '[h9Q8D _[A`fB%G[)*Lu_)_}L%4AG5-n&a&o0B!jM/`V+t-B,o@kihwNXBZysu69');
define('LOGGED_IN_SALT',   'sC+KsO{[kwlpf.Fm8=>l~5^GvvR6y58F0^gbJT_b5&z6SbIdbn6-:72)0MkogK-^');
define('NONCE_SALT',       '@* .XX]X,(mEl5Zm!+P=6noY)vv. wswh@SvBpjAnKJ$t()YuQXwMw%[Bf-Od[l&');


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
