<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'silirin');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'develop');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'bvs;zCJaeM=4JiJo[cbIM.cI4aFJn6i}O/V<f/{iy+?mHAq3a$~R<TT.oLI~Ya4u');
define('SECURE_AUTH_KEY',  'E858r}%uP3[LbKU5F.|m[NsFxiTk;+V+dB}ly]z24qr^Ac/=afC6l |9t?(4R{9%');
define('LOGGED_IN_KEY',    '`TRF:I|!cp)ZL8e6|,}@s/h-;VKj%cfLk+=n-qq7X:^J!j5ef/T4xO|K<#ANL?{A');
define('NONCE_KEY',        'z%0)k_}xG->nw)fdc7-**97$8prIh!VUpENcJ=~^k-j-6|&,X$|X18QL9.tpwv5?');
define('AUTH_SALT',        ':~>2y]hIA|7],PpQ~v6_sv`=h:|Fexg^O4!G!DjvYN&+V~/gr4`VB,;Qo_XJYr>c');
define('SECURE_AUTH_SALT', '3nkYSU<EhS3n/#zl+gI|5^biHk#tT~lIDsT-E0FH^@(ROjTe$kIc@6j_!$^i_)|*');
define('LOGGED_IN_SALT',   ' $Ge%a<70-h+R@W`WVy*XKI9Mt@T=#y(b@r7V2sLaxCr*J^MI~B+>v^L9aKpm&sD');
define('NONCE_SALT',       'fha0C^7Z[/^B<0^_`cWzx>7ZItY6kkdi7lkT/tm^g^eaGDz*5WZvM!t-Rcw-)yK(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
