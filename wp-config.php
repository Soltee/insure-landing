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
define( 'DB_NAME', 'insure' );

/** MySQL database username */
define( 'DB_USER', 'soltee' );

/** MySQL database password */
define( 'DB_PASSWORD', '11111111' );

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
define( 'AUTH_KEY',         '6YR3(hjgod7)S09?I* eu:q~rK[-Tvu^J,NKG)o{Z_R$EFsQ4IN@#!8MsWfuQ9&F' );
define( 'SECURE_AUTH_KEY',  'e9hFp$tbi-p[+`@Oaq_}k=F.]Li)=KkL$_IBOU~V~.7>Lf,{vh1%Z2]/.]?/D~E ' );
define( 'LOGGED_IN_KEY',    '(_fNh~-x~G4tt1Gcu~UumT187(Dox|BMd=>x`/~1F17;d?*azCG5W(ggg2`HE4jG' );
define( 'NONCE_KEY',        'W: !.OW-L_<A;`t**/,#Rkk(?Qki_CqhB=QW<w?=I41r~2._z&R`<Sd^R;%qzV3h' );
define( 'AUTH_SALT',        '@`75LLl{;&%TF+7L4gcZcH(CgMQXHfW(ICa&RGA?[:V?g4SWhUA9.{{C>wz5RY{v' );
define( 'SECURE_AUTH_SALT', 'Drw%.&{mhXb+MPyWKW@$bomvZ$0w|:X?&Mr4;8)1V8ar,)@ckzF>O9MpPqQb(*I6' );
define( 'LOGGED_IN_SALT',   ')lZ{?:A1,qCaq5V<T}v7Vm(TNCC(ov+OB)$`U)[?WF8wr99n}TKk@r3E2[egA@a%' );
define( 'NONCE_SALT',       '{LZ/YT4)CZohlQ1qg(6cr]^{;{%s<bnn0mj&~4fJ+vE9o&7+,r2z]S]_=;b,ZQe+' );

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
