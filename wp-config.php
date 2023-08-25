<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'chicDressing' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wAkQ9iAZo%blxE]Ge+NUGI:h)XSF?O<>)W>:[]p]>gE2/ Im0|-a)=O9hL<H8wX_' );
define( 'SECURE_AUTH_KEY',  '9ACt_#Qg&eb><}p,3c$prr%`Q$^yx!i{85gr<ZB3txLZ^[<@n>oKYQjO]Kt7b=zk' );
define( 'LOGGED_IN_KEY',    '0GGk%zKtxR6r630m:-*CmHIl_msf)D]Q35@zRX<J%u2i8M;Ga4k(.H[.v}W^x^,A' );
define( 'NONCE_KEY',        'EB*)h?<piqaDC~OrG1wXc7r<XrGITA(zfN7&sIDV1$;?VH_[jX>b?Xm,vI9{[d(P' );
define( 'AUTH_SALT',        'Hn7/.<;-&R2)_Z^:PWo);}9]U9c9uDrpGt>:50?%HK#rI:15S}9wF+n|Ux&JXPNF' );
define( 'SECURE_AUTH_SALT', 'Y%&uc;`DZV^}<6LY;`zJ!yyj)J#k1Z3%dF!9+,T5J{/s~t8mZlQ_lGyNm^OQea}x' );
define( 'LOGGED_IN_SALT',   '_A533#eg%jQLujqLzl9+)>49;UVZ`QX?I.nXT{DD.U;{T$1<8{1aCx3y&,zqw.3H' );
define( 'NONCE_SALT',       ';kMjcRB*LZS1S$.BaeQul1mq;SYs{T/CO[(G`YjB|^$_t45bAg+sFWX@S5/Q:lq,' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
