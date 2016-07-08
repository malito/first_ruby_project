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
define('DB_NAME', 'wordpress_gastro');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'echouruguay');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Cq9ZaU/E]3m*hk]F+heAw$$hVYA&UH/h+<SKD7V)QY2|8D83joe-)M;1Z/r=+6+<');
define('SECURE_AUTH_KEY',  'c#^n+[sWVCyG/$[}YmZGq*Md;n5?<qswCt1a~Q1`t)%42v<M5kR/]K*+q[I<|}+}');
define('LOGGED_IN_KEY',    'CC]v&Bk7i4*:l?+@ kCVM//ct&43=8%,KV^!=S).wKp-@~aAXS%8EO6C<~:2@q)(');
define('NONCE_KEY',        'uJ<A*i~=eDTAt}/WY3_/v&NQ^Obk8P-*rp(tV=t@_=ETz+W`I%B>wq>U?V^El;-+');
define('AUTH_SALT',        'N|/~K[]Gh*.w:k{9qc09XFhuNNA#=&WN6XetI6zskmSG YM}|v J;>vz%Z[;`91p');
define('SECURE_AUTH_SALT', 'jEs*=Y* dO;+DJ%MEf~r&OVy5G`@Yy*tE^p1;0golt.|%>R. N_ W -x-v?#@43M');
define('LOGGED_IN_SALT',   'Qp@0>B-=c,-t>Y-{)BVxc6V: S[(h$(R[?j%V)[12JtK]7E<4|PRhXU^^9AD U=1');
define('NONCE_SALT',       'y_/?-A:1bwLC*G-/4F8bY=)/aY`J|PHrkG]+2/!V#9p*-V7VmPYrS,59tyB4?Pn[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
