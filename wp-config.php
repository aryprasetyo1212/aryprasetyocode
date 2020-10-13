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
define( 'DB_NAME', 'aryprasetyo' );

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
define( 'AUTH_KEY',         'DnYO+WM=KB]lV?~pv^9;4NiLl~JtYY1;;j0l85/;3IW/%(^R@,cA2/bu:%JU:EwT' );
define( 'SECURE_AUTH_KEY',  'ceknt+:G~:6Lh-2fafU-a8nA)yG<3=4m,Dr&)8fe3.}(kv]Ipw=b6K[5?oF9CM}Z' );
define( 'LOGGED_IN_KEY',    'X7]vcbgC^}Lc96R @RKSD.p1]z57VaAl`<}/kY2_#4~xlfU7[0I|>B^k1G+Y5XMt' );
define( 'NONCE_KEY',        '0t@F/VsCE#QV$:RRr)]Dc1R%_):#AN-k0%zOnPe1NZbWrn9@jxgFNSH$ S|z;1^Y' );
define( 'AUTH_SALT',        'ihivM@*K.m^n]~bFjKEhPP1pE~vjC>>pt^rl2*fIYj(i)c+=eCE:u|U/$#L<g]5z' );
define( 'SECURE_AUTH_SALT', 'aB[kr+>x[Pr%KV}PSL6lZJJO+E!ET7[;(#m9@0TI`T+L4~QktGo1{Lu/#4Hd>2KC' );
define( 'LOGGED_IN_SALT',   'p`h7r7JQ.qH=TBpSrD{LNTsU1lXB@DVh~qd(C~+/p~7K-0l q[QRIOWtLO(t0xYG' );
define( 'NONCE_SALT',       '@[Ay>@VB<q#xidf^a{?+?yqY$?<^b,5x[7+fbequ`X_M2:Idvr!IW9r.Sf#yqf@;' );

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
