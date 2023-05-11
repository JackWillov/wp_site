<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_site_1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Io9x Oa=|Nf4Iio{=>y8+G&}t0oCPpEI!3zktv>wvo0sudd4}%0`.qy?5DUD[X]I' );
define( 'SECURE_AUTH_KEY',  'h<4y;SSEXo,/t eYzg;63+ZEL8D7OaN+)E60B5jS7l[i=G%W8.S;NCs~4T9m!hNh' );
define( 'LOGGED_IN_KEY',    'Ga{6Se*6Hjn{n@ XX/|Yy7>.0>PsQvxSI;_nxnIQ%l(94,/_~Tn%<%{;/UI7.)D-' );
define( 'NONCE_KEY',        'kxqu/[Bb:F+lq-Pp* m91#S.$ZzxhBAW-5=Bu!M ^dr-3]H{FVk#&N>9R*n.:cC ' );
define( 'AUTH_SALT',        '0xw<yj1t_6.m7tm.SJJ>nt3EqsMCv1M~7&}He/PCHb^HH}U%@k:,s4fl|oCfL[H@' );
define( 'SECURE_AUTH_SALT', 'vGn2!hlN>b)3Hr[n&>(.n+!xaH5fDzaz&z o:dWh~YK[`FpeeneuO+-4fost4wD;' );
define( 'LOGGED_IN_SALT',   'onTrH/wnA@5S.Q5a.X&hJfD*g<W)FWl=S|4Hn<oB|E FlG+Q2wI&hi?+(oWjzG}B' );
define( 'NONCE_SALT',       'U&5@}0tc&c@CP&mD[n8*eotfqA%H;)nm4|M(} r}~l*@BCTHIhj84e$H6{gS[r,r' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
