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
 /** Detect localhost */
 function is_localhost() {
     $whitelist = array( '127.0.0.1', '::1' );
     if( in_array( $_SERVER['REMOTE_ADDR'], $whitelist) )
         return true;
 }
 define('IS_LOCALHOST', is_localhost());
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'golocal_it-works');

/** MySQL database username */
define('DB_USER', 'golocal_it-works');

/** MySQL database password */
define('DB_PASSWORD', '3t#o^ZT$DXvL');

/** MySQL hostname */
define('DB_HOST', '80.179.226.46');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/** Site URL */
require_once(__DIR__ . "/wp-config_url.php");

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '];-=swiG)tyFwyA*tJC!X!UsT?ETRNh6f,d-0kk{OrA2c{8zD?`n1AhMl3@s&-mS');
define('SECURE_AUTH_KEY',  'Vy/WkF+j/{h0F1rkR5z!0)u@lO*3BtLt?QN8,#Q)eJZqrmjfH*w2Pe-FTvLQ)1uT');
define('LOGGED_IN_KEY',    'c6/3_dvs]>MIqV;HoZmR63*iA_iE.t1%(Ly]q9hg]8fN&%u{- &0_t< KIr~=knH');
define('NONCE_KEY',        'V{<(`=p2[gtM rNj-Rq!/+(+x:R|k3 qyyi<hV8HhDnWY6]iZ(3XcPHqpfrdz{ul');
define('AUTH_SALT',        'eNWL3eq2VQaC)%+;obn+}0FH-6C%Cf@q_<W*/jlmw)h7j4ZrzVe5FNa|K&*d~n!I');
define('SECURE_AUTH_SALT', '4YMUbCGp3-P)k.nZ*uD,GF#?E$az+EKnx*!fX|t(!Zi2F~iaLM7BqBQnj1jU}Ru;');
define('LOGGED_IN_SALT',   'T[`wrd9%ssq8qX12AoBhg?aAfmZV3*B ?`yhqnegqyz2=aZ2<c;ot-U^6]zuW:Ad');
define('NONCE_SALT',       'bEo;P`@Z/<o}BS!tA%nwD$i=h{1HPV],(?P-|eVg[K+-Ko<;e]~RQ&KtTEO<W0`p');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
