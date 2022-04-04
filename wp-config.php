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
define( 'DB_NAME', 'marmishlag' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', '127.0.0.1:60854' );

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
define( 'AUTH_KEY',         'N[)+Q<LTfGc9|93[APC7C5JHxlN&S4q6o[Ul9Hc|WOn9kM{--B#!+o%ZLjKLI.h|' );
define( 'SECURE_AUTH_KEY',  'BP]EDL?Oy7B-Iy@%|0oJ)u02//a`& vQMZhut*JZp|2fhh es@`|!hgJ2JTixHc>' );
define( 'LOGGED_IN_KEY',    'HR;HVgm{C*0K-`TzhV=g2V&t`=OmX,GrETD/rf!qn{m[{)D*^yMrj;sCA+V*[HTS' );
define( 'NONCE_KEY',        'g|_aLKR3m!Gzvmvw2y+_g#XDiJCEyq^`Vp^{P7K!O5A4a/neoZP_hSfi7|];<=7y' );
define( 'AUTH_SALT',        'qA(4Zp#hDYhr}#Vw<d/&!3+9Z(DpPkpWI,1{@x^hmcyM5r{A]{aze3P@^j<A{kVh' );
define( 'SECURE_AUTH_SALT', 'UfCac#U:%<IwptMzAmOwYdJ8}.J9#{e@5o#BQ)BW;f<rOpd9i*>S)&18/0I^sVHY' );
define( 'LOGGED_IN_SALT',   '=<ZFvxQY`vuiQhzqsZwLM!/!;a{hW,(OQY:)>|s_g,|~?D0Z6g8}~_R/cd0O]:J@' );
define( 'NONCE_SALT',       'N]q.MT}g&{mgd=Q/$-j+3<VQQ` L~JM~02{NM)i4xd6/G(XYj*>QRwp)I~2tU!Nm' );
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
