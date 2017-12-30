<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'blockchainbeach_com_1');

/** MySQL database username */
define('DB_USER', 'rybmgu9b');

/** MySQL database password */
define('DB_PASSWORD', '^9BmNNmV');

/** MySQL hostname */
define('DB_HOST', 'mysql.blockchainbeach.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'ZJkT*9cMyq^OsQN/@^A1W_^kDU#4C_Gv`LyH$lu$U/"xAnogWJ4+mw9UvEcv?Vto');
define('SECURE_AUTH_KEY',  '_3aKef;kvHJErFc#V1"mf*r:Cgzl!7L4h@12NonT!kNc7$/M;6Sg79":9054D;9w');
define('LOGGED_IN_KEY',    'uwEDuq7IH+egn4KSxInwvKpe1qWrl/)ULx6cMrCrVW%(ZE211YtWu|Gs0+^1Y&L+');
define('NONCE_KEY',        '!UPW)p`r+3fY0wAxS@msR)%3|_MCCPd?Zt#fDFBaAw9xepb&~uhQsQ;&3rX1N*os');
define('AUTH_SALT',        '9r9Ip?wr;86phEmMl69qtVaD?vwejPTfK)FQcFA(X@hvBKJQ1SCNe#"EhQ/d3ZqP');
define('SECURE_AUTH_SALT', 'Vkssj~$U|KJf2t~!d*RDP#(V;#UbT1@gS%dtr~rzcpJj:26W&UZ2%;Rz_:l13azI');
define('LOGGED_IN_SALT',   'C|Z^(?R:mC_Aa`ucm$Npv7BQ`&)_Pg4oM3*yGEUYkVa/3?5dk5HyQlbeU)a5hiPL');
define('NONCE_SALT',       'jK?G/zmQ~nnB$MX|8uBIv^eTnNS%zsoc?Eg||UL;vML$U(@?pxWFM1E?N6SyZ1H(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_2fkrud_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

