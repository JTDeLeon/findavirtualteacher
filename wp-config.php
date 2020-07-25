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
define( 'DB_NAME', 'wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'organixx2020' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '3J5)j>.USY)@ICLXs{Y!b4Z9&M^/EV]BAlB;Z5Y@C{MOqPW_;:m=0Iz5t6xYG]^1' );
define( 'SECURE_AUTH_KEY',   '$;t3}G/%BUXur15`W]D;8+9G]Ew G=n c%)%6Oz_lM;EtRYFO:$za!j9^VUZ!5DM' );
define( 'LOGGED_IN_KEY',     '==Kb{!k,{u9jpb@dV{$k[,*8?5T-#wM7xv6@e9u]Y%%-CzUtZ9F~=o}&vmi1|n^w' );
define( 'NONCE_KEY',         'd!3LEO!T`A*SPL#X(0k|4ZHEaM4*,32b X9!,C6*bKVN-_e;,4`ct0 `21v*aZRA' );
define( 'AUTH_SALT',         'n~,)~r.`7lS_$HAf+6G{][_I;0hql6JZK/ytP4-++G(]em/zoZoyCd+K1naBv4DR' );
define( 'SECURE_AUTH_SALT',  'CLjmw][ZL:a`cJxE{pe<ekKHOM@[f~NyAWBu<[3IYhH<GOyM}isp~V,6SghhWYS9' );
define( 'LOGGED_IN_SALT',    '(V*R{)xN-m_Ic>Xp@`gMw+Bq{*^FpWg_x`Ts2D]hsLn#r]~<eibZ._]*]]0ze|>f' );
define( 'NONCE_SALT',        'MT.6}d32dwc5HhFtN+mKf`8(+i%]LxYZ4SRboex]cjeSGbZ-jA$zD;$Yl;@,ncai' );
define( 'WP_CACHE_KEY_SALT', '6F{P-hwjrAhuLg!6(WlzC5%05W&P[a3.{`%3xU.3 gr[R)X`zyhdOTzp-af>t{Am' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
