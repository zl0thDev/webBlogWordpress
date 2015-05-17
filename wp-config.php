<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es
 * auf der {@link http://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt,
 * wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von
 * wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define('DB_NAME', 'webBlogWordpress');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', 'root');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', '');

/** Ersetze localhost mit der MySQL-Serveradresse */
define('DB_HOST', 'localhost');

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define('DB_CHARSET', 'utf8');

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern,
 * alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define('AUTH_KEY',         ')8OQZsQS9gN=/BV9!;rPRw[7;k8Y`#|X?PP0{/+( X+r]ZBSVQ##F!(8hFF~Q>X)');
define('SECURE_AUTH_KEY',  ')zYJdog::zU,y2[8(T(FlHU_?&dvwcYFa!c ,iy7Dg%3nz},hd^!T !!4mU%pOTu');
define('LOGGED_IN_KEY',    'I*L9U=S@Po,gYH&!a,hlJF54*scD1*S0?~d-H-W|8tv&%J*pWQPlTpGA oc;G2`4');
define('NONCE_KEY',        '<hPL<Qp`Cm^+lad|7SBxrIN2|V+$dSeg{!E8%IHF$<wGQ[aJj>XxXU@<0QH^4-PD');
define('AUTH_SALT',        'N0X,|!n-RyKeHY-*qU$A+3cG(/=1L+]Tm*+s2&Y_SFhOJp}2*{XA*qkzU)Bc.$%J');
define('SECURE_AUTH_SALT', 'W[%GZxdTn.WmS0b3A$}/3NY^{8[An/N=gN_1<w`L1cCyt0l}SZbH`+jdz6xE*m6!');
define('LOGGED_IN_SALT',   'mR}Zj8rhFPY.*e@>z}|(X0DG?Y^@bxm_g-#(qgTtIWN+zGN/(tmmR|9r5jd/ZR&T');
define('NONCE_SALT',       'Xy*0al2)G69SDWudSb[y 2%e;sq5Ho31,|yfAfb=+TZb8VK3<ggM  (<Ck|*wk=-');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
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
