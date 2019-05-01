<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpressBlog' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'DclMaxLenire' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'tupeuxyarriver' );

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
define( 'AUTH_KEY',         'RS C+r{*+C|2_7fM>btM#3^z-_)-K!!%%EGf]n&V0e*P6LJ<9:{.TUsX^)**Yx@W' );
define( 'SECURE_AUTH_KEY',  'f3/*3eK-C;isA9K75Rc$S+b.!j!FBM!A{Tn@.F<i&>oe:p$_N1gJe63F^)j1@ qy' );
define( 'LOGGED_IN_KEY',    '>B~Dm?Or){ 39zSeFt:{}5YYit_}7:@:Cz]%}TY_(O.0ftFy0{r^XV7zUQ=T^<1N' );
define( 'NONCE_KEY',        '_<X82(f9Q)]O9gJ.n}J`xymO N}AhDC*n4o7qw19=frh]GhPp)SfJcU3t6|-.bCT' );
define( 'AUTH_SALT',        ':2ev2fDSQ4W-*4,.hUJw>u,];?!gNkSLSz5QYIki0(xxY-iY3 5q=)/(QVL;P=~,' );
define( 'SECURE_AUTH_SALT', ':/)%b$/M0dk6&$vu`j1W7@FomVQOq!Y%iuCQCAyL][4XG2SDiDh`8IKZ7v+XXzxV' );
define( 'LOGGED_IN_SALT',   ']S(?(/tgFF)f]xh`B{<=^EqY9_U.*o{X)32nAMOeQXK,O2XhySymE1B:h<CjuM>+' );
define( 'NONCE_SALT',       ' Lir(r.LqwrDM!!4{5=S#J4K`zp1/L<!+[m]VvaaA Enb=bdQJ;OA16(8#e~cza<' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_blog';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
