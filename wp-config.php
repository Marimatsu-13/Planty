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
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '+SqH]]~_cc,RS>o&(h@mih~VMfW@-eg7C5a8wU<Vr)00xWL@&Y5;]*-Dryqko>eC' );
define( 'SECURE_AUTH_KEY',  'ny:iIWv[+A 8j@)2bX&n-b-xmo-0D+8syj#`VOr,9^i7LK9l3yXlu7ZU{bf5z^v4' );
define( 'LOGGED_IN_KEY',    'n#_@1L%6Ba5h3p^Wk=DNK/ s~?@%){A~<g3?W$d?5*u$Oyh(M_7W/X2)-SbNQW+5' );
define( 'NONCE_KEY',        'kWD|?gYgc1$xfU%mJ?mY_3OJ [MmZU=%~tWQ:G~,$!6?a7n%(BN!2Y;(n!zHwZjK' );
define( 'AUTH_SALT',        'PEO1[Z#]>E2{,$La$hj6<AZCj4l2bdj>z8iNIzPWS_%boy.7ODR,38lCqv&LQj:{' );
define( 'SECURE_AUTH_SALT', 'dMbv.~E+CBj^-H;e]hV)5Y2j^5AQwK9;DLbGBhW0YY<D972^B YwAic>ULp!5`2_' );
define( 'LOGGED_IN_SALT',   'z(ixxD<i;Lky%<zN9]<x83paIV>Z0[JDOqTftbJnZ1L^]>WYs]l^qz+nmmr(<T>[' );
define( 'NONCE_SALT',       '{~f)r!U$h5>/q:b{]q|bE0jn#KnQjbzKy2(kX=[^}u^8@A``A/.+%A?S#:GN!0]a' );
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
