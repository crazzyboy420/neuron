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

define( 'DB_NAME', "avocado-2" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'Zt#ElZyyE4MkAAc5Mi18]c]|(p+5BtV!Q;hm:]eviSdt}|NPC5i6I%@,nd%PWp;_' );

define( 'SECURE_AUTH_KEY',  'DN@i0{dtq0lSm8Tw4]xCS%uEv;uvbe]) A)zC:)ws8r1+%iT~z<o+c<RZ@|a4vxi' );

define( 'LOGGED_IN_KEY',    'tnRu]O.ZZPt|N6ZEb 4{5%)84hh,%o[t3<N@I_8)4z[!lOZltS{K JNG0<Fmz3Y,' );

define( 'NONCE_KEY',        '%/~x,Q3*Gja!m;FacQAW&@{X!e[L=OqvS:m|itx9}_tOJ O0w*W*#^CO1AEv[),(' );

define( 'AUTH_SALT',        'jQR|Y~8o,y$fO9.VonC!ui<j[4/0Y1a}#cqw-@Y:4;#Na-2k!0lO11.gc8P@$TY)' );

define( 'SECURE_AUTH_SALT', 'dzrG;sG[8eXg{3 s8CoOE+/E,.u;4n47OH[Hcf*Xs3/cWn9B$u.*rwS^v#5DmD]5' );

define( 'LOGGED_IN_SALT',   'n NlOaFpdMO.Brkoc*CzR>Dn2(g_/%?%~ShUca_NOI~Z4sts[qrcvY>]m6:$xkRr' );

define( 'NONCE_SALT',       'dqnRl`aN5 b%mCHI:%Uagkx~fmP^[2gJ.ba?F6Bmrbt53U=kDC pv]Po{#;O2e``' );


/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'wp_neuron';


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

