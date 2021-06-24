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
define( 'DB_NAME', 'mydb' );

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
define( 'AUTH_KEY',         'k4@,#1UIlR}zjoTK8OG;G7p<cyK&H8^VaKh@w_}91z%,dT^QY(?DP- r*SpQBiX~' );
define( 'SECURE_AUTH_KEY',  'l9!yp eX$/HA_]n.znw>.$FQ1 1I4QY]Og?Sx@C$9rCjkwX: i8)*l][CmDV%;>q' );
define( 'LOGGED_IN_KEY',    '/JnOk/^:Jkl)$Ese<H[1v 3AA#D$N-WF.u$GzpFzpG4|O@5KRC(*bH/lK;vM@=P(' );
define( 'NONCE_KEY',        '=dttT*LDy/MqZ${Y4_;pdtYT,leiXF_qPMlf9^`JB7bH&R9}.0(egj_.YY0b*u+6' );
define( 'AUTH_SALT',        'onXjl1h1Ye;4$T_^JU)6-v%HxWxZ0n:[&yqXt=P#ZG3Nf~NgGc<w`]k_WQUj55R-' );
define( 'SECURE_AUTH_SALT', '[&dFZS3VL@7>h!-kYT1$pJRg9UGg;X?uRlWyWf8^YYJ)444=13>]Pw{7lj9KF-o-' );
define( 'LOGGED_IN_SALT',   '[a~Q_rd{?~ridumeI+d{D8L12ZM,T]crdQ%Y(-XOGZJ&xDELwkU+<(YWXfEzdqhP' );
define( 'NONCE_SALT',       '[irs9)#JjG~|WB@?NS8[bGNk@X:;%(k<5LY(.{=jt6<s<b-^@CJ/YytQsNy8U_eE' );

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
