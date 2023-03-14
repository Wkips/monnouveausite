<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpressthememika' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wordpressthememika' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Gardenof1' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1+IhIBaCoC:!*qj_eLI[OA~y@ltx{b1?s*]NdA/|yKSJP?dCrag}~yIsE{+T(0o~' );
define( 'SECURE_AUTH_KEY',  'X!897I$z8Npr95s=!:F*[q^vlkaSVkdqm18tY;W]OcYwdH%sIs@<qt-+^[OyEo+t' );
define( 'LOGGED_IN_KEY',    'a.Z}I=nFawcB5;Z#2BAnCz>/mVxtu&Y=}qGSSo]zbobvm;Ib|N#L(s?HGD4i4Kcw' );
define( 'NONCE_KEY',        'p|~)HyLU,Da{K5Y;~]z8v.z[lW94~ 7C!~bCUMzm{B;NzD~*Wv@ faq55bAyLSr3' );
define( 'AUTH_SALT',        '(wRxdbu)GM?[wt[qL;8Ju-?8P<lD}Kc5%{PXNVP1%w` ,[$Uy3ctPwOvI@S4v9BV' );
define( 'SECURE_AUTH_SALT', '3;OcuJpNwnZbO+*FXgSY3L;3`%XF{rf[u)SNcls Lg(6Oe62PkGbWaj$pZfRez~:' );
define( 'LOGGED_IN_SALT',   'gRNHjg6e`2}!Zr6dQB0AUPsYXiI*H)LCvgGG^Ho0x>|n$TU}mCS`H#GD{*V3`.3;' );
define( 'NONCE_SALT',       'FWB`aFHOz,=)=$0suO>6X 4sjmwnYdno]m6YDhw2t^Llu/Uk)I#.&Azh_KuRxc k' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
